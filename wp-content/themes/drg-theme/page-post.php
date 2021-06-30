<?php
/**
 * The template for displaying the following page: post
 *
 * @package WordPress
 * @subpackage DevsAreGenius
 * @since 1.0.0
 */

if ( ! is_user_logged_in() ): header( 'Location: ' . get_home_url() . '/signup' );
endif;

if ( isset( $_POST['post'] ) ) {
	$post_data = array(
		'post_type'    => 'ideas',
		'post_title'   => htmlspecialchars( $_POST['title'] ),
		'post_content' => htmlspecialchars( $_POST['content'] ),
	);

	$post_ID = wp_insert_post( $post_data );

	update_field( 'field_60bf39ef56e0f', htmlspecialchars( $_POST['confidentiality'] ), $post_ID );

	if ( ! function_exists( 'wp_handle_upload' ) ) {
		require_once( ABSPATH . 'wp-admin/includes/file.php' );
	}
	$uploadedfile     = $_FILES['my_file_field'];
	$upload_overrides = array( 'test_form' => false );
	$movefile         = wp_handle_upload( $uploadedfile, $upload_overrides );
	if ( $movefile ) {

		$wp_filetype = $movefile['type'];
		$filename = $movefile['file'];
		$wp_upload_dir = wp_upload_dir();
		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename( $filename ),
			'post_mime_type' => $wp_filetype,
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);
		require_once( ABSPATH . 'wp-admin/includes/image.php' );
		$attach_id = wp_insert_attachment( $attachment, $filename);

		set_post_thumbnail($post_ID, $attach_id);

	}
	
	header( 'Location: ' . get_permalink( $post_ID ) );
}

get_header();
?>
    <section class="bg-gray-200 pb-16">
        <div class="container mx-auto px-4">
            <div class="py-8">
                <h2 class="text-2xl font-semibold leading-tight">Post an idea</h2>
            </div>
            <div class="flex content-center items-center justify-center h-full">
                <div class="w-full lg:w-4/12 px-4">
                    <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-100 border-0"
                    >
                        <form action="" name="post" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="action" value="my_file_upload"/>
                            <label for="post-image">
                                <div class="group bg-gray-200 rounded-t-lg top-0 w-full h-36 bg-center bg-cover relative"
                                     style='background-image: url("<?php echo get_template_directory_uri() . '/assets/img/scenery/image1.jpg'; ?>");'
                                     id="post-image-back">
                                    <div class="absolute group-hover:opacity-75 opacity-0 transition duration-200 w-full h-full z-10 align-items cursor-pointer text-center content-center flex  justify-center place-content-center">
                                        <i class="fa fa-plus-circle relative m-auto block text-7xl text-white  "></i>
                                    </div>
                                    <span class="transition duration-200 relative block w-full h-full cursor-pointer opacity-0 group-hover:opacity-50 bg-black rounded-t-lg"></span>
                                </div>
                            </label>
                            <input accept="image/*"
                                   name="my_file_field"
                                   id="post-image"
                                   type="file"
                                   class="hidden"
                                   value="hey"
                            >
                            <div class="flex-auto px-4 lg:px-10 py-10">


                                <label
                                        class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                        for="post-title"
                                >Title</label
                                >
                                <div class="relative flex w-full flex-wrap items-stretch w-full mb-3">
                                    <input
                                            name="title"
                                            id="post-title"
                                            type="text"
                                            class="px-3 py-3 placeholder-purple-300 text-gray-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring focus:ring-opacity-75 focus:ring-purple-900 w-full"
                                            placeholder="Title of your idea"
                                            style="transition: all 0.15s ease 0s;"
                                            required
                                    />
                                </div>

                                <label
                                        class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                        for="post-textarea"
                                >Description</label
                                >
                                <div class="relative flex flex-wrap items-stretch mb-3">
                                    <textarea
                                            name="content"
                                            id="post-textarea"
                                            class="px-3 py-3 placeholder-purple-300 text-gray-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring focus:ring-opacity-75 focus:ring-purple-900 w-full"
                                            placeholder="What is your idea?"
                                            style="transition: all 0.15s ease 0s;"
                                            required
                                    ></textarea>
                                </div>
                                <div class="block m-auto w-full text-center my-8 space-x-4">
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio" name="confidentiality" value="public"
                                               checked>
                                        <span class="ml-2 block uppercase text-gray-700 text-xs font-bold"><i
                                                    class="fa fa-unlock"></i> Public</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio" name="confidentiality" value="private">
                                        <span class="ml-2 block uppercase text-gray-700 text-xs font-bold"><i
                                                    class="fa fa-lock"></i> Limited</span>
                                    </label>
                                </div>
                                <div class="text-center mt-6">
                                    <input type="submit" value="Send the Idea" name="post"
                                           class="cursor-pointer w-full block text-center transition duration-200 bg-purple-900 text-gray-300 shadow hover:shadow-lg outline-none focus:outline-none uppercase hover:bg-purple-700 hover:text-white font-bold py-3 px-8 rounded items-center">
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/post.js"></script>

<?php
get_footer();
