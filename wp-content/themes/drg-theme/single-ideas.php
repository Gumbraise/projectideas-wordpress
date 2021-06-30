<?php
/**
 * The template for displaying a single idea
 *
 * @package WordPress
 * @subpackage DevsAreGenius
 * @since 1.0.0
 */
get_header();

gt_set_post_view();

global $post;
$a_id = $post->post_author;

if ( $a_id == get_current_user_id() ) {
	if ( isset( $_POST['edit_idea'] ) ) {
		$post_data = array(
			'ID'           => $post->ID,
			'post_content' => htmlspecialchars( $_POST['description'] ),
			'post_status'  => 'pending',
		);

		if ( $_POST['archive_idea'] ) {
			$post_data += [
				'post_status' => 'draft',
			];
		}

		wp_update_post( $post_data );

		update_field( 'field_60bf39ef56e0f', htmlspecialchars( $_POST['confidentiality'] ), $post->ID );
	}
	if ( isset( $_POST['archive_idea'] ) ) {

		if ( get_post_status() == 'draft' ) {
			$post_data = array(
				'ID'          => $post->ID,
				'post_status' => 'pending',
			);
		} else {
			$post_data = array(
				'ID'          => $post->ID,
				'post_status' => 'draft',
			);
        }

		wp_update_post( $post_data );
	}
}

?>
    <section class="relative block" style="height: 500px;">
        <div
                class="absolute top-0 w-full h-full bg-center bg-cover"
                style='background-image: url("<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail_url();
				} else {
					echo get_template_directory_uri() . '/assets/img/scenery/image1.jpg';
				} ?>");'
        >
          <span
                  id="blackOverlay"
                  class="w-full h-full absolute opacity-50 bg-black"
          ></span>
        </div>
        <div
                class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
                style="height: 70px;"
        >
            <svg
                    class="absolute bottom-0 overflow-hidden"
                    xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none"
                    version="1.1"
                    viewBox="0 0 2560 100"
                    x="0"
                    y="0"
            >
                <polygon
                        class="text-gray-200 fill-current"
                        points="2560 0 2560 100 0 100"
                ></polygon>
            </svg>
        </div>
    </section>
    <section class="relative py-16 bg-gray-200">
        <div class="container mx-auto px-4">
            <div
                    class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64"
            >
                <div class="px-6">
                    <div class="text-center mt-12">
                        <h3
                                class="text-4xl font-semibold leading-normal mb-2 text-gray-800 mb-2"
                        >
							<?php the_title(); ?>
                        </h3>
                        <div class="mb-2 text-gray-700 mt-4">
                            <i class="fas fa-user mr-2 text-lg text-gray-500"></i
                            ><a href="<?php echo home_url( 'profile/' . get_the_author_meta( 'user_nicename', $a_id ) ); ?>"><?php
								the_author_meta( 'user_nicename', $a_id ); ?></a>
                        </div>
                        <div class="mb-2 text-gray-700">
                            <i class="fas fa-clock mr-2 text-lg text-gray-500"></i
                            ><?php echo human_time_diff( get_the_date( 'U' ), time() ) ?> ago
                        </div>
                    </div>
                    <div class="mt-10 py-10 border-t border-gray-300 text-center">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-9/12 px-4 relative">
								<?php if ( $a_id == get_current_user_id() ) { ?>
                                    <form action="" method="POST" class="space-y-4" name="edit_idea">
                                        <textarea name="description"
                                                  class="px-3 py-3 placeholder-purple-300 text-gray-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring focus:ring-opacity-75 focus:ring-purple-900 w-full"
                                                  style="transition: all 0.15s ease 0s;"
                                        >
                                            <?php echo htmlspecialchars( get_the_content() ); ?>
                                        </textarea>

                                        <div class="block m-auto w-full text-center my-8 space-x-4">
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="form-radio" name="confidentiality"
                                                       value="public"
                                                       checked>
                                                <span class="ml-2 block uppercase text-gray-700 text-xs font-bold"><i
                                                            class="fa fa-unlock"></i> Public</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="form-radio" name="confidentiality"
                                                       value="private">
                                                <span class="ml-2 block uppercase text-gray-700 text-xs font-bold"><i
                                                            class="fa fa-lock"></i> Limited</span>
                                            </label>
                                        </div>

                                        <button name="edit_idea"
                                                type="submit"
                                                class="transition duration-200 bg-purple-900 text-gray-300 hover:bg-purple-700 hover:text-white font-bold py-3 px-8 rounded inline-flex items-center w-full text-center">
                                            <span class="text-center w-full uppercase">Update idea</span>
                                        </button>
                                    </form>
                                    <form action="" method="POST" class="py-3" name="archive_idea">
                                        <button name="archive_idea"
                                                type="submit"
                                                class="
                                                <?php if ( get_post_status() == 'draft' ) echo "bg-blue-900 hover:bg-blue-700"; else echo "bg-red-900 hover:bg-red-700"; ?>
                                                transition duration-200 text-gray-300 hover:text-white font-bold py-3 px-8 rounded inline-flex items-center w-full text-center">
                                            <span class="text-center w-full uppercase">
                                                <?php if ( get_post_status() == 'draft' ) echo "Publish idea"; else echo "Archive idea"; ?>
                                            </span>
                                        </button>
                                    </form>
								<?php } else { ?>
									<?php if ( get_field( 'privacy' ) == 'private' ) { ?>
                                        <div class="z-10 absolute w-full h-full block bg-gradient-to-b from-transparent via-white to-white"></div>
                                        <p class="mb-4 text-lg leading-relaxed text-gray-800 relative">
											<?php echo htmlspecialchars( excerpt() ); ?>
                                        </p>
									<?php } else { ?>
                                        <p class="mb-4 text-lg leading-relaxed text-gray-800 relative">
											<?php echo htmlspecialchars( get_the_content() ); ?>
                                        </p>
									<?php }
								} ?>

                            </div>
                        </div>
                        <div class="text-center space-x-2 mt-4">
                            <a class="hover:text-white hover:bg-purple-600 transition duration-200 text-purple-600 shadow-lg border inline-block border-purple-600 font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none"
                               target="_blank"
                               href="https://www.facebook.com/dialog/share?app_id=2296148857110995&href=<?php echo home_url( $wp->request ); ?>"><i
                                        class="pt-3 fax fa fa-facebook-f"
                                        aria-hidden="true"></i></a>
                            <a class="hover:text-white hover:bg-purple-600 transition duration-200 text-purple-600 shadow-lg border inline-block border-purple-600 font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none"
                               target="_blank"
                               href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo home_url( $wp->request ); ?>"><i
                                        class="pt-3 fax fa fa-linkedin"
                                        aria-hidden="true"
                                ></i></a>
                            <a class="hover:text-white hover:bg-purple-600 transition duration-200 text-purple-600 shadow-lg border inline-block border-purple-600 font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none"
                               target="_blank"
                               href="https://twitter.com/intent/tweet?url=<?php echo home_url( $wp->request ); ?>&text=<?php the_title(); ?>"><i
                                        class="pt-3 fax fa fa-twitter"
                                        aria-hidden="true"
                                ></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php comments_template(); ?>
    </section>
<?php
get_footer();
