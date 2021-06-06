<?php
$terms = array(
	'post_type' => 'contacts',
	'order'     => 'ASC'
);
$loop  = new WP_Query( $terms );
?>
</main>

<footer class="relative bg-gray-200 pt-8 pb-6 shadow-2xl">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4">
                <span class="sr-only">DevsAreGenius</span>
                <img src="<?php echo get_template_directory_uri() . '/assets/img/tech/drg_header_dark_alt.svg'; ?>"
                     alt="DevsAreGenius Logotype Dark" class="w-72 mb-4">
                <h5 class="text-lg mt-0 mb-2 text-gray-700">
                    Collection of ideas for genius developers.
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
                    <div class="w-full lg:w-4/12 px-4 ml-auto">
                        <h6 class="block uppercase text-gray-600 text-sm font-semibold my-2">Useful Links</h6>
                        <ul class="list-unstyled">
                            <li>
                                <a
                                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="find.html"
                                >All ideas</a
                                >
                            </li>
                            <li>
                                <a
                                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="#"
                                >Day idea</a
                                >
                            </li>
                            <li>
                                <a
                                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="#"
                                >Advanced search</a
                                >
                            </li>
                            <li>
                                <a
                                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="#"
                                >Search by user</a
                                >
                            </li>
                        </ul>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <h6 class="block uppercase text-gray-600 text-sm font-bold my-2">Other Resources</h6>
                        <ul class="list-unstyled">
                            <li>
                                <a
                                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="#"
                                >Privacy policy</a
                                >
                            </li>
                            <li>
                                <a
                                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="#"
                                >Terms &amp; Conditions</a
                                >
                            </li>
                            <li>
                                <a
                                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="contact-us.html"
                                >Report a bug</a
                                >
                            </li>
                            <li>
                                <a
                                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="contact-us.html"
                                >Contact Us</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-400"/>
        <div
                class="flex flex-wrap items-center md:justify-between justify-center"
        >
            <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                <div class="text-sm text-gray-600 font-semibold py-1">
                    © <?php echo date( 'Y' ); ?> ProjectIdeas
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>