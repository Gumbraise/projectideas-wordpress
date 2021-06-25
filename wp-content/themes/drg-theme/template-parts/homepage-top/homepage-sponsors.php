<div class="container mx-auto px-4">
    <hr class="border-gray-400 my-12">
    <div class="grid grid-flow-col grid-rows-1 lg:grid-cols-2 2xl:px-64 ">
        <div class="2xl:mr-20 hidden lg:block">
            <h2 class="text-4xl font-semibold pb-4">Sponsors</h2>
            <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-600">
                DevsAreGenius (aka. DRG) is a free-to-use. However, the
                effort needed to maintain and develop new features is only sustainable with proper financial
                backing.
            </p>
            <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-600">

                If DRG provides value to you or your business, we encourage you to support the website
                development: it ensures the project stays healthy and actively maintained.
            </p>
            <a href="#contact-us">
                <button class="transition duration-200 bg-purple-900 text-gray-300 hover:bg-purple-700 hover:text-white font-bold py-3 px-8 rounded inline-flex items-center">
                    <span><i class="mr-2 far fa-handshake"></i>Become a sponsor</span>
                </button>
            </a>
        </div>
		<?php
		$terms = array(
			'post_type' => 'sponsors',
		);

		$loop = new WP_Query( $terms );
		if ( $loop->have_posts() ) {
			?>
            <div class="lg:ml-20 grid grid-flow-col grid-rows-<?php echo ceil( count( $loop->posts ) / 2 ) ?> grid-cols-2">
				<?php
				while ( $loop->have_posts() ) :
					$loop->the_post();
					$image = get_field( 'sponsor_logo' );
					?>
                    <div class="h-48 flex items-center justify-center border-r border-b border-gray-500 border-opacity-25 border-solid">
                        <a href="<?php the_field( 'sponsor_link' ); ?>">
                            <img class="<?php the_field( 'size' ); ?>"
                                 src="<?php echo $image['url']; ?>"
                                 alt="<?php echo $image['alt']; ?>">
                        </a>
                    </div>
				<?php endwhile; ?>
            </div>
		<?php } ?>
    </div>
</div>