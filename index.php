﻿<?php get_header(); ?>

<div role="main" id="content">

	<p class="primary"><?php bloginfo('description'); ?></p>

	<?php while (have_posts()) : the_post(); ?>

		<a class="slot-wrapper" href="<?php the_permalink(); ?>">
		
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
					   
			<p class="next"><strong><?php previous_posts_link('Newer posts &rarr;', '0'); ?></strong></p>
			<p class="previous"><strong><?php next_posts_link('&larr; Older posts', '0'); ?></strong></p>
	   
	</div> <!-- end .pagination -->
	
</div> <!-- end #content -->

<?php get_footer(); ?>