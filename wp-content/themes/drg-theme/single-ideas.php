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
                            ><a href="profil.html"><?php global $post;
								$a_id = $post->post_author;

								the_author_meta( 'user_nicename', $a_id ); ?></a>
                        </div>
                        <div class="mb-2 text-gray-700">
                            <i class="fas fa-clock mr-2 text-lg text-gray-500"></i
                            ><?php echo human_time_diff( get_the_date( 'U' ), ( time() + 7200 ) ) ?> ago
                        </div>
                    </div>
                    <div class="mt-10 py-10 border-t border-gray-300 text-center">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-9/12 px-4">
                                <p class="mb-4 text-lg leading-relaxed text-gray-800">
									<?php echo get_the_content(); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php comments_template(); ?>
    </section>
<?php
get_footer();
