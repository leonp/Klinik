<?php

// Do not delete these lines

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
	
		<p class="nocomments"><?php _e("This post is password protected. Enter the password to view comments.", "scherzo"); ?></p>
		
	<?php
	
		return;
	}
?>

<!-- You can start editing here. -->

	<?php if ( have_comments() ) : ?>

		<h1 class="comment-heading"><?php _e("Comments", "scherzo"); ?></h1>
		
		<?php previous_comments_link('Older comments') ?>
		
		<?php next_comments_link('Newer comments') ?>

		<ol class="commentlist">
		
			<?php wp_list_comments('avatar_size=24&type=comment'); ?>
			
		</ol>
		
		<ol class="pinglist commentlist">
		
			<?php wp_list_comments('avatar_size=24&type=pings'); ?>
			
		</ol>
		
		<?php previous_comments_link(__('Older comments', "scherzo")) ?>
		
		<?php next_comments_link(__('Newer comments', "scherzo")) ?>

	 <?php else : // this is displayed if there are no comments so far ?>

		<?php if ('open' == $post->comment_status) : ?>
		
			<!-- If comments are open, but there are no comments. -->

		 <?php else : // comments are closed ?>
		 
			<!-- If comments are closed. -->
			
			<p class="nocomments"><?php _e("Comments are closed.", "scherzo"); ?></p>

		<?php endif; ?> <!-- if comments are open -->
		
	<?php endif; ?> <!-- end if have comments -->

	<?php comment_form(); ?>
