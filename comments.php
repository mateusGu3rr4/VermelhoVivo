<?php
/**
* @package WordPress
* @subpackage Theme_Compat_ Edited by MateusGuerra
* @deprecated 3.0
*
* This file is here for Backwards compatibility with old themes and will be removed in a future version
*
*/
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<h3 id="comments"><?php	printf( _n( 'One Response to %2$s', '%1$s Responses to %2$s', get_comments_number() ),
									number_format_i18n( get_comments_number() ), '&#8220;' . get_the_title() . '&#8221;' ); ?></h3>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>

	<ol class="commentlist">
	<?php wp_list_comments();?>
	</ol>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>
<?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	<?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments"><?php _e('Comments are closed.'); ?></p>

	<?php endif; ?>
<?php endif; ?>

<?php if ( comments_open() ) : ?>

<div id="respond">


<div id="cancel-comment-reply">
	<small><?php cancel_comment_reply_link() ?></small>
</div>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.'), wp_login_url( get_permalink() )); ?></p>
<?php else : ?>

	<?php comment_form(); ?>

<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
