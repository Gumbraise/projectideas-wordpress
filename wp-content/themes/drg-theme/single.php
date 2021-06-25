<?php
/**
 * The template for displaying the articles
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

                <div class="text-center space-x-2">
                    <a class="hover:text-white hover:bg-purple-600 transition duration-200 text-purple-600 shadow-lg border inline-block border-purple-600 font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none"
                       target="_blank"
                       href="https://www.facebook.com/dialog/share?app_id=2296148857110995&href=<?php echo home_url( $wp->request ); ?>"><i
                                class="pt-3 fax fa fa-facebook-f"
                                aria-hidden="true"></i></a>
                    <a class="hover:text-white hover:bg-purple-600 transition duration-200 text-purple-600 shadow-lg border inline-block border-purple-600 font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none"
                       target="_blank"
                       href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo home_url( $wp->request ); ?>"><i
                                class="pt-3 fax fa fa-linkedin"
                                aria-hidden="true"
                        ></i></a>
                    <a class="hover:text-white hover:bg-purple-600 transition duration-200 text-purple-600 shadow-lg border inline-block border-purple-600 font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none"
                       target="_blank"
                       href="https://twitter.com/intent/tweet?url=<?php echo home_url( $wp->request ); ?>&text=<?php the_title(); ?>"><i
                                class="pt-3 fax fa fa-twitter"
                                aria-hidden="true"
                        ></i></a>
                </div>
			</div>
		</div>
	</section>

<?php
get_footer();
