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
                    <h2 class="text-2xl font-semibold leading-tight">Search by user</h2>
                </div>
                <div class="lex sm:flex-row flex-col">
                    <div class="mt-4 relative flex w-full flex-wrap items-stretch mb-3">
                        <form class="w-full" action="<?php echo home_url( '/users' ); ?>" method="GET">
                            <button class="z-10 h-full leading-snug font-normal absolute text-center text-purple-300 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                                <i class="fas fa-search text-purple-500"></i>
                            </button>

                            <input
                                    id="search-bar"
                                    name="search"
                                    type="text"
                                    placeholder="Search a user (Gumbraise, ...)"
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
					'posts_per_page' => '12',
					'orderby'        => 'registered',
					'order'          => 'DESC',
					'paged'          => $paged,
				);

				if ( isset( $_GET['search'] ) ) {
					$terms += [ 'search' => '*' . $_GET['search'] . '*', ];
				}

				$loop              = get_users( $terms );

				if ( $loop ) {

				foreach ( $loop as $user ):

					$where = 'WHERE comment_approved = 1 AND user_id = ' . $user->ID;
					$comment_count = $wpdb->get_var( "SELECT COUNT( * ) AS total 
                                 FROM {$wpdb->comments}
                                 {$where}" );

					$terms2 = array(
						'post_type' => 'ideas',
						'author'    => $user->ID,
					);

					$loop2 = new WP_Query( $terms2 );


					$hours_since = floor( ( time() - strtotime( $user->user_registered ) ) / 3600 );
					$iq_profile  = ( $hours_since + ( ( $comment_count * 5 ) + ( $loop2->found_posts * 20 ) ) * 5 )

					?>
                    <div class="w-full xl:w-1/4 lg:w-1/3 md:w-1/2 px-4 text-center">
                        <div
                                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                        >
                            <div class="bg-gray-200 rounded-t-lg top-0 w-full h-80 bg-center bg-cover relative"
                                 style='background-image: url("<?php echo get_avatar_url( $user->ID, array( 'size' => 344 ) ); ?>");'>
                            </div>
                            <div class="px-4 py-5 flex-auto relative">
                                <div class="pb-4">
                                    <h6 class="text-xl font-semibold"><?php echo $user->user_nicename; ?></h6>
                                    <p class="mt-2 mb-4 text-gray-600">
										<?php if ( ! empty( $user->description ) ) {
											echo htmlspecialchars( $user->description );
										} else {
											echo "A lambda DevsAreGenius user";
										} ?>
                                    </p>
                                </div>
                                <div class="absolute bottom-0 left-0 mb-3 px-4 text-gray-400 w-full">
                                    <div class="space-x-4 float-left">
                                        <p class="inline-block"><i
                                                    class="fas fa-lightbulb"></i> <?php echo $iq_profile; ?>
                                        </p>
                                        <p class="inline-block"><i
                                                    class="fas fa-sticky-note"></i> <?php echo $loop2->found_posts; ?>
                                        </p>
                                        <p class="inline-block"><i
                                                    class="fas fa-comment"></i> <?php echo $comment_count ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-200 px-6 py-4 rounded-b-lg">
                                <div class="flex mx-4 items-end">
                                    <a class="font-bold w-full text-purple-900 text-right"
                                       href="<?php echo home_url( '/ideas?user=' . $user->user_nicename ); ?>">See
                                        his ideas »</a>
                                </div>
                            </div>
                        </div>
                    </div>
				<?php endforeach;
				wp_reset_postdata(); ?>
            </div>
            <div class="px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">

                <div class="inline-block w-full items-center justify-between">
                    <div class="flex-1 flex items-center justify-center">

						<?php
						$pages = paginate_links( array(
							'current'   => $paged,
							'format'    => 'page/%#%',
							'total'     => $loop->max_num_pages,
							'type'      => 'array',
							'prev_text' => __( '&lt;', 'drg' ),
							'next_text' => __( '&gt;', 'drg' ),
						) );
						if ( is_array( $pages ) ) {
							echo '
                        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px"
                             aria-label="Pagination">';
							$i = 0;
							foreach ( $pages as $page ) {
								$i ++;
								?>
                                <span
                                        class="
                                        <?php
										if ( ( count( $pages ) == ( $loop->max_num_pages + 1 ) ) && ( $paged == 1 ) ) {
											$current_page = $i;
										} else {
											$current_page = $i - 1;
										}
										if ( $paged == $current_page ) { ?>
                                            bg-purple-50 border-purple-500 text-purple-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium
                                        <?php } else { ?>
                                            bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium
                                    <?php } ?>
                                ">
							<?php
							echo $page;
							?>
                            </span>
								<?php
							}
							echo '</nav>';
						}
						?>
                    </div>
                </div>
            </div>
			<?php } else { ?>
                <label for="search-bar" class="relative text-center py-24 md:py-48 space-y-4">
                    <p class="text-3xl font-semibold">No User Found</p>
                </label>
			<?php } ?>
        </div>
    </section>
<?php
get_footer();
