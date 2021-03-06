<?php
$terms = array(
	'post_type' => 'contacts',
	'order'     => 'ASC'
);
$loop  = new WP_Query( $terms );

$image = get_field('image', wp_get_nav_menu_object(3));
?>
</main>

<footer class="relative bg-gray-200 pt-8 pb-6 shadow-2xl">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4">
                <span class="sr-only"><?php bloginfo( 'name' ); ?></span>
                <img src="<?php echo $image['url']; ?>"
                     alt="<?php echo $image['alt']; ?>" class="w-72 mb-4">
                <h5 class="text-lg mt-0 mb-2 text-gray-700">
					<?php bloginfo( 'description' ); ?>
                </h5>
                <div class="my-6">
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <a href="<?php the_field( 'link' ); ?>" target="_blank">
                            <button
                                    class="bg-white <?php the_field( 'class' ); ?> shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                                    type="button"
                            >
								<?php the_field( 'icon' ); ?></button
                            >
                        </a>
					<?php endwhile;
					wp_reset_postdata();
					?>
                </div>
            </div>
            <div class="w-full lg:w-6/12">
                <div class="flex flex-wrap items-top mb-6">
					<?php
					$i = 1;
					if ( has_nav_menu( 'footer-menu' ) ) {
						$menus = wp_get_nav_menu_items( 'footer-menu' );
						foreach ( $menus as $menu ) {
							if ( $menu->menu_item_parent === '0' ) {
								?>
                                <div class="w-full lg:w-4/12 px-4 <?php if ( $i === 1 ) {
									echo 'ml-auto';
								}
								$i ++; ?>">
                                    <h6 class="block uppercase text-gray-600 text-sm font-semibold my-2"><?php echo $menu->title; ?></h6>
                                    <ul class="list-unstyled">
										<?php
										foreach ( $menus as $submenu ) {
											if ( $submenu->menu_item_parent == $menu->ID ) {

												?>
                                                <li>
                                                    <a
                                                            class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                                            href="<?php echo $submenu->url; ?>"
                                                    ><?php echo $submenu->title; ?></a
                                                    >
                                                </li>
												<?php
											}
										} ?>
                                    </ul>
                                </div>
								<?php
							}
						}
					} else {
						echo 'Veuillez assigner un menu dans l\'administration WordPress -> Apparence -> Menus -> G??rer les emplacements';
					}
					?>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-400"/>
        <div
                class="flex flex-wrap items-center md:justify-between justify-center"
        >
            <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                <div class="text-sm text-gray-600 font-semibold py-1">
                    ?? <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>