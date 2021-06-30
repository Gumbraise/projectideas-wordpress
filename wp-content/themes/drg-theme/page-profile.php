<?php
/**
 * The template for displaying the following page: profile
 *
 * @package WordPress
 * @subpackage DevsAreGenius
 * @since 1.0.0
 */
get_header();


global $wpdb, $post;

$profile = get_user_by( 'id', um_profile_id() );

$where         = 'WHERE comment_approved = 1 AND user_id = ' . $profile->ID;
$comment_count = $wpdb->get_var( "SELECT COUNT( * ) AS total 
                                 FROM {$wpdb->comments}
                                 {$where}" );

$terms = array(
	'post_type'      => 'ideas',
	'posts_per_page' => '4',
	'orderby'        => 'date',
	'order'          => 'DESC',
	'author'         => $profile->ID,

);

$loop = new WP_Query( $terms );

$hours_since = floor( ( time() - strtotime( $profile->user_registered ) ) / 3600 );
$iq_profile  = ( $hours_since + ( ( $comment_count * 5 ) + ( $loop->found_posts * 20 ) ) * 5 );


if ( $profile->ID == get_current_user_id() ) {
	if ( isset( $_POST['edit_profile'] ) ) {
		$user_data = wp_update_user( array(
			'ID'          => $profile->ID,
			'description' => htmlspecialchars( $_POST['description'] )
		) );
	}
}
?>
    <section class="relative block" style="height: 500px;">
        <div
                class="absolute top-0 w-full h-full bg-center bg-cover"
                style='background-image: url("<?php echo get_avatar_url( $profile->ID, array( 'size' => 2000 ) ) ?>");'
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
                    <div class="flex flex-wrap justify-center">
                        <div
                                class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center"
                        >
                            <div class="relative">
                                <img
                                        alt="..."
                                        src="<?php echo get_avatar_url( $profile->ID, array( 'size' => 150 ) ) ?>"
                                        class="shadow-xl rounded-full h-auto align-middle border-none absolute w-64 -m-16 -ml-20 lg:-ml-16"
                                        style="max-width: 150px;"
                                />
                            </div>
                        </div>
                        <div
                                class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center"
                        >
                            <div class="py-6 px-3 mt-8">
                                <!-- I'm an easter egg -->
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4 lg:order-1">
                            <div class="flex justify-center py-4 lg:pt-4 pt-8">
                                <div class="mr-4 p-3 text-center">
                      <span
                              class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                      ><?php echo $iq_profile; ?>
                      </span
                      ><span class="text-sm text-gray-500">IQ</span>
                                </div>
                                <div class="mr-4 p-3 text-center">
                      <span
                              class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                      ><?php echo $loop->found_posts; ?></span
                      ><span class="text-sm text-gray-500">Ideas</span>
                                </div>
                                <div class="lg:mr-4 p-3 text-center">
                      <span
                              class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                      ><?php echo $comment_count ?></span
                      ><span class="text-sm text-gray-500">Comments</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-12">
                        <h3
                                class="text-4xl font-semibold leading-normal mb-2 text-gray-800 mb-2"
                        >
							<?php echo $profile->display_name; ?>
                        </h3>
                    </div>
                    <div class="mt-10 py-10 border-t border-gray-300 text-center">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-9/12 px-4">
								<?php if ( $profile->ID == get_current_user_id() ) { ?>
                                    <form action="" method="POST">
                                        <textarea name="description"
                                                  class="w-full text-center mb-4 text-lg leading-relaxed text-gray-800 border">
                                            <?php if ( ! empty( $profile->description ) ) {
	                                            echo htmlspecialchars( $profile->description );
                                            } else {
	                                            echo "A lambda DevsAreGenius user";
                                            } ?>
                                        </textarea>
                                        <button name="edit_profile"
                                                type="submit"
                                                class="transition duration-200 bg-purple-900 text-gray-300 hover:bg-purple-700 hover:text-white font-bold py-2 px-8 rounded inline-flex items-center w-full text-center">
                                            <span class="text-center w-full">Update profile</span>
                                        </button>
                                    </form>
								<?php } else { ?>
                                <p class="mb-4 text-lg leading-relaxed text-gray-800 w-full">
									<?php
									if ( ! empty( $profile->description ) ) {
										echo htmlspecialchars( $profile->description );
									} else {
										echo "A lambda DevsAreGenius user";
									}
									}
									?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <div class="w-full inline-block">
                    <h4 class="text-2xl font-semibold inline-block text-left leading-tight"><?php if ( $profile->ID == get_current_user_id() ) {
							echo "My";
						} else echo "His" ?> last ideas:</h4>
                    <a href="<?php echo home_url( '/ideas?user=' . $profile->display_name ); ?>">
                        <p class="text-lg text-purple-900 font-semibold inline-blockv float-right leading-tight">See
                            more
                            »</p>
                    </a>
                </div>
                <div class="flex flex-wrap my-4">
					<?php
					if ( $loop->have_posts() ) {
						while ( $loop->have_posts() ) : $loop->the_post();
							?>
                            <div class="w-full xl:w-1/4 lg:w-1/3 md:w-1/2 px-4 text-center">
                                <div
                                        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                                >
                                    <div class="bg-gray-200 rounded-t-lg top-0 w-full h-36 bg-center bg-cover relative"
                                         style='background-image: url("<?php
									     if ( has_post_thumbnail() ) {
										     the_post_thumbnail_url();
									     } else {
										     echo get_template_directory_uri() . '/assets/img/scenery/image1.jpg';
									     } ?>");'>
                                        <span class="relative block w-full h-full opacity-50 bg-black rounded-t-lg"></span>
                                    </div>
                                    <div class="px-4 py-5 flex-auto relative">
                                        <div class="pb-4">
                                            <h6 class="text-xl font-semibold"><?php the_title(); ?></h6>
                                            <p class="mt-2 mb-4 text-gray-600">
												<?php echo get_the_excerpt(); ?>
                                            </p>
                                        </div>
                                        <div class="absolute bottom-0 left-0 mb-3 px-4 text-gray-400 w-full">
                                            <div class="space-x-4 float-left">
                                                <p class="inline-block"><i
                                                            class="fas fa-comment"></i> <?php echo get_comments_number(); ?>
                                                </p>
                                                <p class="inline-block"><i
                                                            class="fas fa-eye"></i> <?php gt_get_post_view(); ?></p>
                                            </div>
                                            <div class="space-x-4 float-right">
                                                <p class="inline-block"><i
                                                            class="fas fa-clock"></i> <?php echo human_time_diff( strtotime( get_the_date() ), time() ) ?>
                                                    ago</p>
                                                <p class="inline-block <?php if ( get_field( 'privacy' ) == 'private' ) {
													echo 'text-yellow-500"><i class="fas fa-lock';
												} else echo 'text-purple-500"><i class="fas fa-unlock' ?>"></i></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-200 px-6 py-4 rounded-b-lg">
                                        <div class="flex mx-4 items-end">
                                            <a class="font-bold w-full text-purple-900 text-right"
                                               href="<?php the_permalink(); ?>">See
                                                the
                                                idea »</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
						<?php endwhile;
						wp_reset_postdata(); ?>
					<?php } else { ?>
                        <p class="text-xl w-full text-center"><?php echo $profile->display_name; ?> hasn't posted idea
                            for
                            the moment</p>
					<?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
