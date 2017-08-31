<?php
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
			
		<h2>Comments</h2>

		<ul class="comment-list">
			<?php
				wp_list_comments( array(
					'avatar_size' => 75,
					'style'       => 'ul',
					'short_ping'  => true,
					'reply_text'  => dolphin_get_svg( array( 'icon' => 'mail-reply' ) ) . __( 'Reply', 'dolphin' ),
				) );
			?>
		</ul>

		<?php the_comments_pagination( array(
			'prev_text' => dolphin_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous', 'dolphin' ) . '</span>',
			'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'dolphin' ) . '</span>' . dolphin_get_svg( array( 'icon' => 'arrow-right' ) ),
		) );

	endif; // Check for have_comments().

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php _e( 'Comments are closed.', 'dolphin' ); ?></p>
	<?php
	endif;

	comment_form();
	?>

</div><!-- #comments -->
