<?php
/**
 * The template for displaying the pages
 *
 * @package WordPress
 * @subpackage DevsAreGenius
 * @since 1.0.0
 */
get_header();
?>

    <section class="bg-gray-200 py-16">
        <div class="container mx-auto px-4">
            <div class="relative">
                <h1 class="text-center mb-8 text-5xl font-extrabold text-purple-800">
					<?php the_title(); ?>
                </h1>
            </div>
            <div class="p-5 m-4 bg-white relative shadow-sm rounded-3xl">
                <?php the_content(); ?>
            </div>
        </div>
    </section>

<?php
get_footer();
