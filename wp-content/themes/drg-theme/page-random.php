<?php
/**
 * The template for displaying the following page: random
 *
 * @package WordPress
 * @subpackage DevsAreGenius
 * @since 1.0.0
 */

$terms = array(
	'post_type'      => 'ideas',
	'orderby'        => 'rand',
	'posts_per_page' => 1,
);

$loop = new WP_Query( $terms );
if ( $loop->have_posts() ):
	while ( $loop->have_posts() ) : $loop->the_post();
		header( 'Location: ' . get_the_permalink() );
	endwhile;
endif;