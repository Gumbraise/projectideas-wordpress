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
            <div class="space-y-4 mb-10 py-10 border-b border-gray-300 ">
				<?php
				$args = array(
					'date'   => 'DESC',
					'status' => 'approve',
					'parent' => '0'
				);

				$comments_query = new WP_Comment_Query;
				$comments       = $comments_query->query( $args );

				if ( $comments ) {
					foreach ( $comments as $comment ) {
						?>
                        <div id="comment-<?php echo $comment->comment_ID; ?>" class="flex">
                            <div class="flex-shrink-0 mr-3">
                                <a href="<?php echo $comment->comment_author_url; ?>"><img
                                            class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8"
                                            src="<?php echo get_avatar_url( $comment->comment_author_email ); ?>"
                                            alt="<?php echo $comment->comment_author . ' profile picture'; ?>"></a>
                            </div>
                            <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                                <a href="<?php echo $comment->comment_author_url; ?>"><strong><?php echo $comment->comment_author; ?></strong></a>
                                <span
                                        class="text-xs text-gray-400"><?php echo human_time_diff( strtotime( $comment->comment_date ), ( time() + 7200 ) ) ?> ago</span>
