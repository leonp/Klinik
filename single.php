<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

	<article itemscope itemtype="http://schema.org/Article" class="hentry entry" id="content" role="main">
	
		<header class="entry-header">

			<h1 itemprop="name" class="entry-title"><?php the_title(); ?></h1>
		
			<ul class="secondary entry-meta link-list">
			
				<li><time itemprop="datePublished" content="<?php the_time('c'); ?>" datetime="<?php the_time('c'); ?>"><?php the_time(get_option('date_format')); ?></time></li>
				<li>Filed under: <span class="taxonomy"><?php the_category(', '); ?></span></li>
				<?php if ('open' == $post->comment_status) { ?><li><a href="#comments"><?php comments_number('Leave a comment','One comment','% comments'); ?></a></li><?php } ?>
				
			</ul>
			
		</header>

		<div itemprop="articleBody" class="entry-content floated-content clearfix">
		
			<?php the_content(); ?>
				
		</div>
		
		<footer class="entry-footer clearfix">
			
			<section class="pagination">
							
				<p class="next"><?php next_post_link('Next post: %link &rarr;'); ?></p>
				<p class="previous"><?php previous_post_link('&larr; Previous post: %link'); ?></p>				
					
			</section> <!-- end .pagination -->
			
			<?php if ('open' == $post->comment_status) { ?>
			
				<section id="comments" class="clearfix">
				
					<?php comments_template(); ?>
					
				</section>
				
			<?php } ?>
			
		</footer>
		
	</article>
	
<?php endwhile; ?>

<?php get_footer(); ?>