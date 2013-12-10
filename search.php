<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<h1 class="page-title"><?php _e("Your search for", "scherzo"); ?> &#8220;<?php the_search_query(); ?>&#8221;</h1>

		<?php while (have_posts()) : the_post(); ?>
			
				<article <?php post_class(); ?>>
				
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="archive"><?php the_title(); ?></a></h1>
			
					<div class="entry-meta">
					
						<p><?php _e("Posted by", "scherzo"); ?> <?php the_author_posts_link(); ?> <?php _e("on", "scherzo"); ?> <time datetime="<?php the_time('c'); ?>" pubdate><?php the_time(get_option('date_format')); ?></time>. <?php if ('open' == $post->comment_status) { ?><a href="<?php the_permalink(); ?>/#comments"><?php comments_number(__('No comments', "scherzo"),__('One comment', "scherzo"), __('% comments',"scherzo")); ?></a>.<?php } ?></p>
					
					</div>
					
					<div class="entry-summary">
				
						<?php the_excerpt(); ?>
						
					</div>
					
				</article>
				
		<?php endwhile; ?>
		
			<div class="pagination">
							   
				<p class="next"><?php previous_posts_link(__('Newer search results &rarr;', "scherzo"), '0'); ?></p>
				<p class="previous"><?php next_posts_link(__('&larr; Older search results', "scherzo"), '0'); ?></p>
			   
			</div> <!-- end .pagination -->

	<?php else : ?>

		<p><?php _e("Unfortunately your search didn't return anything. Please try again.", "scherzo"); ?></p>

	<?php endif; ?>
	
</div> <!-- end content -->

<aside id="sidebar" role="complementary">

	<?php get_sidebar('universal'); ?>
	
</aside> <!-- end sidebar -->

<?php get_footer(); ?>