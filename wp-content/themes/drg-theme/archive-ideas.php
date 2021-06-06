<?php
/**
 * The template for displaying a single idea
 *
 * @package WordPress
 * @subpackage DevsAreGenius
 * @since 1.0.0
 */
get_header();
?>
    <section class="bg-gray-200 pb-16">
        <div class="container mx-auto px-4">
            <div class="py-8">
                <div>
                    <h2 class="text-2xl font-semibold leading-tight">Find an idea</h2>
                </div>
                <div class="lex sm:flex-row flex-col">
                    <div class="mt-4 relative flex w-full flex-wrap items-stretch mb-3">
                        <button class="z-10 h-full leading-snug font-normal absolute text-center text-purple-300 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                            <i class="fas fa-search text-purple-500"></i>
                        </button>
                        <input
                                type="text"
                                placeholder="Keywords (college, Vue.js, Java, ...)"
                                class="px-3 py-3 placeholder-purple-300 text-gray-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring focus:ring-opacity-75 focus:ring-purple-900 w-full pl-10"
                        />
                    </div>
                </div>
            </div>
            <div class="justify-center flex flex-wrap">
				<?php
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

				$terms = array(
					'post_type'      => 'ideas',
					'posts_per_page' => '12',
					'orderby'        => 'date',
					'order'          => 'DESC',
					'paged'          => $paged
				);
				$loop  = new WP_Query( $terms );
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
                            <div class="px-4 py-5 flex-auto">
                                <h6 class="text-xl font-semibold"><?php the_title(); ?></h6>
                                <p class="mt-2 mb-4 text-gray-600">
									<?php echo get_the_excerpt(); ?>
                                </p>

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
				wp_reset_postdata();
				?>
            </div>
            <div class="px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">

                <div class="inline-block w-full items-center justify-between">
                    <div class="flex-1 flex items-center justify-center">

						<?php
						$pages = paginate_links( array(
							'current'   => max( 1, get_query_var( 'paged' ) ),
							'format'    => 'page/%#%',
							'total'     => $loop->max_num_pages,
							'type'      => 'array',
							'prev_text' => __( '&laquo;', 'drg' ),
							'next_text' => __( '&raquo;', 'drg' )
						) );
						if ( is_array( $pages ) ) {
							echo '
                        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px"
                             aria-label="Pagination">';
							foreach ( $pages as $page ) {
								echo $page;
							}
							echo '</nav>';
						}
						?>
                    </div>
                    <div class="flex-1 flex items-center justify-center pt-8">
                        <p class="text-sm text-gray-700">
                            Showing
                            <span class="font-medium">1</span>
                            to
                            <span class="font-medium">12</span>
                            of
                            <span class="font-medium">42</span>
                            results
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
