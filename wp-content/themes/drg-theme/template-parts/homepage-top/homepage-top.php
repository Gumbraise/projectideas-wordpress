<div class="container mx-auto px-4">
    <div class="flex flex-wrap">
		<?php
		$terms = array(
			'post_type'      => 'ideas',
			'posts_per_page' => '3',
			'orderby'        => 'date',
			'order'          => 'DESC',
		);

		$loop = new WP_Query( $terms );
		if ( $loop->have_posts() ) {
			$i = 0;
			while ( $loop->have_posts() ) :
				$loop->the_post();
				$i ++;
				?>
                <div class="<?php if ( $i != 2 ) {
					echo 'pt-6';
				} ?> w-full md:w-4/12 px-4 text-center transform duration-200 hover:-translate-y-4">
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
                        <div class="px-4 py-5 flex-auto relative">
                            <div class="pb-4">
                                <h6 class="text-xl font-semibold"><?php the_title(); ?></h6>
                                <p class="mt-2 mb-4 text-gray-600">
									<?php echo htmlspecialchars( excerpt() ); ?>
                                </p>
                            </div>
                            <div class="absolute bottom-0 left-0 mb-3 px-4 text-gray-400 w-full">
                                <div class="space-x-4 float-left">
                                    <p class="inline-block"><i
                                                class="fas fa-comment"></i> <?php echo get_comments_number(); ?></p>
                                    <p class="inline-block"><i
                                                class="fas fa-eye"></i> <?php gt_get_post_view(); ?></p>
                                </div>
                            </div>
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
			<?php
			endwhile;
		}
		?>
    </div>
</div>
