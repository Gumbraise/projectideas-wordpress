<?php
/**
 * The template for displaying the following page: 404
 *
 * @package WordPress
 * @subpackage DevsAreGenius
 * @since 1.0.0
 */
get_header();
?>
    <section class="bg-gray-200 h-screen w-96 mx-auto flex flex-wrap  content-center">
        <div class="container  mx-auto px-4 relative text-center space-y-4">

                <h1 class="text-4xl font-semibold">404</h1>
                <p class="text-xl">Page not found. If you advise us to add this page, contact us on <a
                            class="evan"
                            href="<?php echo home_url( '/post' ); ?>">this
                        page</a>!</p>

                <form class="relative" action="<?php echo home_url( '/ideas' ); ?>" method="GET">
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
    </section>

<?php
get_footer();