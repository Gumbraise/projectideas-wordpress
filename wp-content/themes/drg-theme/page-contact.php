<?php
/**
 * The template for displaying the following page: contact
 *
 * @package WordPress
 * @subpackage DevsAreGenius
 * @since 1.0.0
 */
get_header();


$terms = array(
	'post_type' => 'contacts',
	'order'     => 'ASC'
);
$loop  = new WP_Query( $terms );

?>
    <section class="bg-gray-200 pb-16">
        <div class="container mx-auto px-4">
            <div class="py-8">
                <h2 class="text-2xl font-semibold leading-tight"><?php the_title(); ?></h2>
            </div>
            <div class="flex flex-wrap">
                <div class="h-auto w-full md:flex bg-gray-100 shadow-2xl rounded-lg">
                    <div class="md:w-1/3 w-full space-y-6 p-12 bg-gradient-to-b from-indigo-900 to-purple-900 text-white rounded-t-lg md:rounded-none md:rounded-l-lg">
                        <h3 class="text-xl mb-4">Contact information</h3>
                        <p class="text-lg space-x-4">
                            <?php the_content(); ?>
                        </p>
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <a href="<?php the_field( 'link' ); ?>">
                                <p class="text-lg space-x-4">
									<?php the_field( 'icon' ); ?>
                                    <span><?php the_field( 'text' ); ?></span>
                                </p>
                            </a>
						<?php endwhile;
						wp_reset_postdata();
						?>
                    </div>
                    <div class="md:w-2/3 w-full p-12">
                        <h3 class="text-xl mb-4">Send us a message</h3>
                        <div class="md:flex w-full md:space-x-4">
							<?php echo do_shortcode( '[contact-form-7 id="16" title="Contact form 1"]' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
