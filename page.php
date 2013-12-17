<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

	<article itemscope itemtype="http://schema.org/Article" class="hentry narrow-content entry" id="content" role="main">

		<h1 itemprop="name" class="entry-title"><?php the_title(); ?></h1>

		<div itemprop="articleBody" class="entry-content clearfix">
		
			<?php the_content(); ?>
				
		</div>
		
	</article>
	
<?php endwhile; ?>

<?php get_footer(); ?>
