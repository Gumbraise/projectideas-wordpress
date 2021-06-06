<?php
/**
 * The template for displaying a single idea
 *
 * @package WordPress
 * @subpackage DevsAreGenius
 * @since 1.0.0
 */
get_header();
?>
    <section class="relative block" style="height: 500px;">
        <div
                class="absolute top-0 w-full h-full bg-center bg-cover"
                style='background-image: url("<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail_url();
				} else {
					echo get_template_directory_uri() . '/assets/img/scenery/image1.jpg';
				} ?>");'
        >
