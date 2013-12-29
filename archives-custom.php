<?php
/*
Template Name: Archive listing page
*/
?>

<?php get_header(); ?>

<div role="main" id="content">

<?php while (have_posts()) : the_post(); ?>

	<article itemscope itemtype="http://schema.org/Article" class="hentry narrow-content entry" role="main">

		<h1 itemprop="name" class="entry-title"><?php the_title(); ?></h1>

		<div itemprop="articleBody" class="entry-content clearfix">
		
			<?php the_content(); ?>
	
			<ul class="archive-list">
			
			<?php
			
				// List all categories
				
				wp_list_categories( 'show_option_all=1&show_count=1&&title_li=' );
				
			?>
				
			</ul>
			
<?php endwhile; ?>

			<h2>Every post</h2>

			<ul class="archive-list">

			<?php 

			// Additional all posts query
			
			$the_query = new WP_Query( 'showposts=-1' ); ?>

			<?php if ( $the_query->have_posts() ) : ?>

				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			  
				<?php endwhile; ?>

			  <?php wp_reset_postdata(); ?>

			<?php else:  ?>
			
				<p>Hmm. No posts, apparently.</p>
			  
			<?php endif; ?>

			</ul>
				
		</div>
		
	</article>

</div <!--end #content -->

<?php get_footer(); ?>
