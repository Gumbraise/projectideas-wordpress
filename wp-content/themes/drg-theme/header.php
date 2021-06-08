<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage double6
 * @since double6 1.0
 * @version 1.0
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo( 'name' ); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="icon" href="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>">
	<?php wp_head(); ?>
</head>
<body>

<div class="relative bg-purple-800 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="/">
                    <span class="sr-only">DevsAreGenius</span>
                    <img class="h-8 w-auto sm:h-10 hidden md:flex"
                         src="<?php echo get_template_directory_uri() . '/assets/img/tech/drg_header_alt.svg'; ?>"
                         alt="DevsAreGenius Logotype">
                    <img class="h-8 w-auto sm:h-10 flex md:hidden"
                         src="<?php echo get_template_directory_uri() . '/assets/img/tech/drg_logo.svg'; ?>"
                         alt="DevsAreGenius Mark">
                </a>
            </div>
            <div class="-mr-2 -my-2 md:hidden relative">
	            <?php if ( is_user_logged_in() ): ?>
                    <a href="/profile"
                       class="hover:bg-purple-700 transition duration-100 relative text-white rounded-full text-base font-medium mr-2 mt-1 inline-block float-left">
                        <div class="bg-cover bg-center m-1 w-10 h-10 rounded-full"
                             style='background-image: url("<?php echo get_avatar_url( wp_get_current_user()->ID ) ?>");'>
                        </div>
                    </a>
	            <?php endif; ?>
                <button onclick="toggleNavbar('md');"
                        type="button"
                        class="inline-block bg-purple-900 rounded-md m-2 p-2 inline-flex items-center justify-center text-gray-300 hover:text-white hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-900"
                        aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <!-- Heroicon name: outline/menu -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
			<?php
			if ( has_nav_menu( 'nav-menu' ) ) {
				wp_nav_menu( array(
					'menu'                 => 'nav-menu',
					'theme_location'       => 'drg',
					'container'            => '',
					'container_class'      => '',
					'container_id'         => '',
					'container_aria_label' => '',
					'menu_class'           => 'hidden md:flex space-x-10',
					'menu_id'              => '',
					'echo'                 => true,
					'fallback_cb'          => '',
					'before'               => '<div
                   class="text-gray-300 transition duration-100 hover:bg-purple-700 hover:text-white px-3 py-2 rounded-md text-base font-medium">',
					'after'                => '</div>',
					'link_before'          => '',
					'link_after'           => '',
					//'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'item_spacing'         => 'preserve',
					'depth'                => 0,
					'walker'               => '',
				) );
			} else {
				echo 'Veuillez assigner un menu dans l\'administration WordPress -> Apparence -> Menus -> Gérer les emplacements';
			}
			?>
            <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
				<?php if ( is_user_logged_in() ): ?>
                    <a href="/logout"
                       class="whitespace-nowrap transition duration-100 inline-flex items-center justify-center px-4 py-2 rounded-md shadow-sm text-base font-medium text-white bg-purple-900 hover:bg-purple-700 border-solid border-purple-900 border-2">
                        Logout
                    </a>
                    <a href="/profile"
                       class="hover:bg-purple-700 transition duration-100 relative text-white rounded-full text-base font-medium ml-8">
                        <div class="bg-cover bg-center m-1 w-10 h-10 rounded-full"
                             style='background-image: url("<?php echo get_avatar_url( wp_get_current_user()->ID ) ?>");'>
                        </div>
                    </a>
				<?php else: ?>
                    <a href="/signin"
                       class="hover:bg-purple-700 transition duration-100 text-white px-3 py-2 rounded-md text-base font-medium">
                        Sign in
                    </a>
                    <a href="/signup"
                       class="ml-8 whitespace-nowrap transition duration-100 inline-flex items-center justify-center px-4 py-2 rounded-md shadow-sm text-base font-medium text-white bg-purple-900 hover:bg-purple-700 border-solid border-purple-900 border-2">
                        Sign up
                    </a>
				<?php endif; ?>
            </div>
        </div>
    </div>

    <div id="md" class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right hidden md:hidden">
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-purple-800 divide-y-2 divide-gray-50">
            <div class="pt-5 pb-6 px-5">
                <div class="flex items-center justify-between">
                    <div>
                        <img class="h-8 w-auto"
                             src="<?php echo get_template_directory_uri() . '/assets/img/tech/drg_logo.svg'; ?>"
                             alt="DevsAreGenius Mark">
                    </div>
                    <div class="-mr-2">
                        <button onclick="toggleNavbar('md');"
                                type="button"
                                class="bg-purple-900 rounded-md p-2 inline-flex items-center justify-center text-gray-300 hover:text-white hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-900">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="py-6 px-5 space-y-6">
				<?php
				if ( has_nav_menu( 'nav-menu' ) ) {
					wp_nav_menu( array(
						'menu'                 => 'nav-menu',
						'theme_location'       => 'drg',
						'container'            => '',
						'container_class'      => '',
						'container_id'         => '',
						'container_aria_label' => '',
						'menu_class'           => 'grid grid-cols-2 gap-y-4 gap-x-8',
						'menu_id'              => '',
						'echo'                 => true,
						'fallback_cb'          => 'wp_page_menu',
						'before'               => '<div
                   class="col-span-2 transition duration-100 text-gray-300 hover:bg-purple-700 hover:text-white px-3 py-2 rounded-md text-base font-medium text-center">',
						'after'                => '</div>',
						'link_before'          => '',
						'link_after'           => '',
						//'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'item_spacing'         => 'preserve',
						'depth'                => 0,
						'walker'               => '',
					) );
				} else {
					echo 'Veuillez assigner un menu dans l\'administration WordPress -> Apparence -> Menus -> Gérer les emplacements';
				}
				?>
                <div>
					<?php if ( is_user_logged_in() ): ?>
                        <a href="/logout"
                           class="w-full whitespace-nowrap inline-flex items-center justify-center px-4 py-2 rounded-md shadow-sm text-base font-medium text-white bg-purple-900 hover:bg-purple-700 border-solid border-purple-900 border-2">
                            Log out of <?php echo wp_get_current_user()->user_login; ?>
                        </a>
					<?php else: ?>
                        <a href="/signup"
                           class="w-full whitespace-nowrap inline-flex items-center justify-center px-4 py-2 rounded-md shadow-sm text-base font-medium text-white bg-purple-900 hover:bg-purple-700 border-solid border-purple-900 border-2">
                            Sign up
                        </a>
                        <p class="mt-6 text-center text-base font-medium text-gray-300">
                            You already have an account ?
                            <a href="/signin" class="text-purple-400 hover:text-purple-300">
                                Sign in
                            </a>
                        </p>
					<?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<main>