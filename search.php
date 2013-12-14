<?php get_header(); ?>

	<div role="main" id="content">

		<?php if (have_posts()) : ?>

			<h1 class="entry-title">Your search for &#8220;<?php the_search_query(); ?>&#8221;</h1>

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
			
				<div class="pagination clearfix">
								   
					<p class="next"><?php previous_posts_link(__('Newer search results &rarr;', "scherzo"), '0'); ?></p>
					<p class="previous"><?php next_posts_link(__('&larr; Older search results', "scherzo"), '0'); ?></p>
				   
				</div> <!-- end .pagination -->

		<?php else : ?>

			<p>Unfortunately your search didn't return anything. Please try again.</p>

		<?php endif; ?>
		
	</div> <!-- end content -->

<?php get_footer(); ?>