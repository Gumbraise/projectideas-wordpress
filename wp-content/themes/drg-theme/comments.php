<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage DevsAreGenius
 * @since DevsAreGenius 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$comment_count = get_comments_number() + 1;
?>
<div id="comments" class="container mx-auto px-4">
    <div
            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg"
    >
        <div class="px-6 pb-10">
            <div class=" mt-12">
                <h4
                        class="text-2xl font-semibold leading-normal mb-2 text-gray-800 mb-2"
                >
                    Comments
                </h4>
                <div class="mb-2 text-gray-700 mt-4">

					<?php echo $comment_count;
					if ( $comment_count <= 1 ) {
						echo ' comment';
					} else echo ' comments'
					?>
                </div>
            </div>
