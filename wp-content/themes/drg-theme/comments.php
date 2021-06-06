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
                                <p class="text-sm">
									<?php echo $comment->comment_content; ?>
                                </p>
                                <a href="?replytocom=<?php echo $comment->comment_ID; ?>#respond">
                                    <p class="mt-5 uppercase tracking-wide text-gray-400 font-bold text-xs">Reply</p>
                                </a>
								<?php
								$args = array(
									'date'   => 'DESC',
									'status' => 'approve',
									'parent' => $comment->comment_ID,
								);

								$replies_query = new WP_Comment_Query;
								$replies       = $replies_query->query( $args );

								if ( $replies ) {
									?>
                                    <div class="mt-5 space-y-4">
										<?php foreach ( $replies as $reply ) {
											?>
                                            <div id="reply-<?php echo $reply->comment_ID; ?>" class="flex">
                                                <div class="flex-shrink-0 mr-3">
                                                    <a href="<?php echo $reply->comment_author_url; ?>"><img
                                                                class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8"
                                                                src="<?php echo get_avatar_url( $reply->comment_author_email ); ?>"
                                                                alt="<?php echo $reply->comment_author . ' profile picture'; ?>"></a>
                                                </div>
                                                <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                                                    <a href="<?php echo $reply->comment_author_url; ?>"><strong><?php echo $reply->comment_author; ?></strong></a>
                                                    <span
                                                            class="text-xs text-gray-400"><?php echo human_time_diff( strtotime( $reply->comment_date ), ( time() + 7200 ) ) ?> ago</span>
                                                    <p class="text-sm">
		                                                <?php echo $reply->comment_content; ?>
                                                    </p>
                                                    <a href="?replytocom=<?php echo $reply->comment_ID; ?>#respond">
                                                        <p class="mt-5 uppercase tracking-wide text-gray-400 font-bold text-xs">Reply</p>
                                                    </a>
	                                                <?php
	                                                $args = array(
		                                                'date'   => 'DESC',
		                                                'status' => 'approve',
		                                                'parent' => $reply->comment_ID,
	                                                );

	                                                $rereplies_query = new WP_Comment_Query;
	                                                $rereplies       = $rereplies_query->query( $args );

	                                                if ( $rereplies ) {
		                                                ?>
                                                        <div class="mt-5 space-y-4">
			                                                <?php foreach ( $rereplies as $rereply ) {
				                                                ?>
                                                                <div id="reply-<?php echo $rereply->comment_ID; ?>" class="flex">
                                                                    <div class="flex-shrink-0 mr-3">
                                                                        <a href="<?php echo $rereply->comment_author_url; ?>"><img
                                                                                    class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8"
                                                                                    src="<?php echo get_avatar_url( $rereply->comment_author_email ); ?>"
                                                                                    alt="<?php echo $rereply->comment_author . ' profile picture'; ?>"></a>
                                                                    </div>
                                                                    <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                                                                        <a href="<?php echo $rereply->comment_author_url; ?>"><strong><?php echo $rereply->comment_author; ?></strong></a>
                                                                        <span
                                                                                class="text-xs text-gray-400"><?php echo human_time_diff( strtotime( $rereply->comment_date ), ( time() + 7200 ) ) ?> ago</span>
                                                                        <p class="text-sm">
							                                                <?php echo $rereply->comment_content; ?>
                                                                        </p>
                                                                        <a href="?replytocom=<?php echo $reply->comment_ID; ?>#respond">
                                                                            <p class="mt-5 uppercase tracking-wide text-gray-400 font-bold text-xs">Reply</p>
                                                                        </a>
                                                                    </div>
                                                                </div>
			                                                <?php } ?>
                                                        </div>
		                                                <?php
	                                                } ?>
                                                </div>
                                            </div>
										<?php } ?>
                                    </div>
									<?php
								} ?>
                            </div>
                        </div>
					<?php }
				} ?>
            </div>
            <!-- comment form -->

            <div class="w-full rounded-lg md:px-12">
                <div class="flex flex-wrap">
					<?php
					comment_form(
						array(
							'logged_in_as'       => null,
							'title_reply'        => esc_html__( 'Leave a comment', 'drg' ),
							'title_reply_before' => '<h5 class="pb-2 text-gray-800 text-lg">',
							'title_reply_after'  => '</h5>',
							'submit_button'      => '<div class="w-full flex items-start">
                        <div class="text-center w-full"><input class="w-full block text-center transition duration-200 bg-purple-900 text-gray-300 shadow hover:shadow-lg outline-none focus:outline-none uppercase hover:bg-purple-700 hover:text-white font-bold py-3 px-8 rounded items-center" type="submit" name="post-message" value="SEND COMMENT"></div>
                    </div>',
							'comment_field'      => '<div class="w-full md:w-full mb-2 mt-2">
                                    <textarea
                                        id="comment" 
                                        name="comment" 
                                        class="px-3 py-3 placeholder-purple-300 text-gray-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring focus:ring-opacity-75 focus:ring-purple-900 w-full"
                                        placeholder="Type your comment..."
                                        style="transition: all 0.15s ease 0s;"
                                        required
                                    ></textarea>
                    </div>',
							'class_form'         => 'w-full',
							'class_container'    => 'w-full',
						)
					);
					?>

                </div>
            </div>
        </div>
    </div>
</div>
