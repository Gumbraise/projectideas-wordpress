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
                        <form class="w-full" action="/ideas" method="GET">
                            <button class="z-10 h-full leading-snug font-normal absolute text-center text-purple-300 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                                <i class="fas fa-search text-purple-500"></i>
                            </button>

                            <input
                                    id="search-bar"
                                    name="search"
                                    type="text"
                                    placeholder="Keywords (college, Vue.js, Java, ...)"
                                    class="custom-transition px-3 py-3 placeholder-purple-300 text-gray-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring focus:ring-opacity-75 focus:ring-purple-900 w-full pl-10"
								<?php if ( isset( $_GET['search'] ) ) {
									echo 'value ="' . $_GET['search'] . '"';
								} ?>
                            />
                        </form>
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
					'paged'          => $paged,
				);

				if ( isset( $_GET['search'] ) ) {
					$terms += [ 's' => $_GET['search'], ];
				}

				$loop = new WP_Query( $terms );
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
                                <a href="<?php echo get_author_posts_url( get_post_field( 'post_author' ) ); ?>">
                                    <div class="z-10 bg-white w-8 h-8 sm:w-auto rounded-full absolute m-4 shadow-lg">
                                        <div class="bg-cover bg-center w-6 h-6 rounded-full m-1 inline-block"
                                             style='background-image: url("<?php echo get_avatar_url( get_post_field( 'post_author' ) ); ?>");'>
                                        </div>
                                        <p class="hidden md:block float-right py-1 pl-2 pr-4 text-gray-800"><?php echo get_the_author_meta( 'display_name', get_post_field( 'post_author' ) ); ?></p>
                                    </div>
                                </a>
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
				wp_reset_postdata(); ?>
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
						$from = ( $loop->query_vars['posts_per_page'] * $paged ) - ( $loop->query_vars['posts_per_page'] - 1 );
						if ( ( $loop->query_vars['posts_per_page'] * $paged ) <= ( $loop->found_posts ) ) {
							$to = ( $loop->query_vars['posts_per_page'] * $paged );
						} else {
							$to = $loop->found_posts;
						}
						?>
                    </div>
                    <div class="flex-1 flex items-center justify-center pt-8">
                        <p class="text-sm text-gray-700">
                            Showing
                            <span class="font-medium"><?php echo $from; ?></span>
                            to
                            <span class="font-medium"><?php echo $to; ?></span>
                            of
                            <span class="font-medium"><?php echo wp_count_posts( 'ideas' )->publish; ?></span>
                            results
                        </p>
                    </div>
                </div>
            </div>
			<?php } else { ?>
                <label for="search-bar" class="relative text-center py-24 md:py-48 space-y-4">
                    <p class="text-3xl font-semibold">No Idea Found</p>
                    <p class="text-xl">Try to change your keywords</p>
                </label>
			<?php } ?>
        </div>
    </section>
<?php
get_footer();
