<?php get_header(); ?>

<div role="main" id="content">

	<?php if (have_posts()) : ?>

		<?php /* If this is a category archive */ if (is_category()) { ?>
		
			<h1 class="entry-title"><?php _e("Posts filed under", "scherzo"); ?> &#8220;<?php single_cat_title(); ?>&#8221;</h1>
			
		<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		
			<h1 class="entry-title"><?php _e("Posts tagged", "scherzo"); ?> &#8220;<?php single_tag_title(); ?>&#8221;</h1>
		
		<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		
			<h1 class="entry-title"><?php _e("Posts written on", "scherzo"); ?> <?php the_time('F j, Y'); ?></h1>
			
		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		
			<h1 class="entry-title"><?php _e("Posts written in", "scherzo"); ?> <?php the_time('F, Y'); ?></h1>
			
		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		
			<h1 class="entry-title"><?php _e("Posts written in", "scherzo"); ?> <?php the_time('Y'); ?></h1>
			
		<?php /* If this is an author archive */ } elseif (is_author()) { ?>
		
			<h1 class="entry-title"><?php _e("Posts written by", "scherzo"); ?> <?php echo wp_title(''); ?></h1>
		
	<?php } ?>

	<?php while (have_posts()) : the_post(); ?>
	
		<a href="<?php the_permalink(); ?>">

			<article class="slot">
				
				<header class="slot-header">
			
					<h1 class="slot-title"><?php the_title(); ?></h1>
					
					<p class="secondary slot-meta"><time itemprop="datePublished" content="<?php the_time('c'); ?>" datetime="<?php the_time('c'); ?>"><?php the_time(get_option('date_format')); ?></time></p>
					
				</header>
				
				<div class="slot-excerpt">
				
					<?php the_excerpt(); ?>
					
				</div>
					
			</article>
			
		</a>
			
	<?php endwhile; ?>

	<?php else : ?>

		<h1 class="entry-title"><?php _e("No posts found", "scherzo"); ?></h1>

	<?php endif; ?>

		<div class="pagination clearfix">
						   
			<p class="next"><?php previous_posts_link(__('Newer posts from this archive &rarr;', "scherzo"), '0'); ?></p>
			<p class="previous"><?php next_posts_link(__('&larr; Older posts from this archive', "scherzo"), '0'); ?></p>
		   
		</div> <!-- end .pagination -->

	</div <!--end #content -->

<?php get_footer(); ?>
