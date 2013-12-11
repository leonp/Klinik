<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

	<article itemscope itemtype="http://schema.org/Article" class="hentry entry" id="content" role="main">

		<h1 itemprop="name" class="entry-title"><?php the_title(); ?></h1>

		<div itemprop="articleBody" class="entry-content clearfix">
		
			<?php the_content(); ?>
				
		</div>
		
		<footer class="entry-footer clearfix">
		
			<p class="secondary"><time itemprop="datePublished" content="<?php the_time('c'); ?>" datetime="<?php the_time('c'); ?>"><?php the_time(get_option('date_format')); ?></time>. Filed under: <?php the_category(', '); ?>.</p>
			
			<section class="pagination">
							
				<p class="next"><?php next_post_link('Next post: %link &rarr;'); ?></p>
				<p class="previous"><?php previous_post_link('&larr; Previous post: %link'); ?></p>				
					
			</section> <!-- end .pagination -->
			
			<?php if ('open' == $post->comment_status) { ?>
			
				<section id="comments">
				
					<?php paginate_comments_links(); ?>
				
					<?php comments_template(); ?>
					
				</section>
				
			<?php } ?>
			
		</footer>
		
	</article>
	
<?php endwhile; ?>

<?php get_footer(); ?>