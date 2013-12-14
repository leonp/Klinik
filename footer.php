			<footer class="site-footer">
					
				<ul>
			
					<li><a href="<?php bloginfo('url'); ?>"><span itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name"><?php bloginfo('name'); ?></span></span></a></li>
					<?php wp_nav_menu(array('theme_location' => 'navigation', 'container' => 'false', 'items_wrap' => '%3$s', 'depth' => '2')); ?>
					<?php if ( get_the_author_meta( 'twitter' ) ) { ?>
				
						<li><a href="http://twitter.com/<?php the_author_meta( 'twitter' ); ?>" title="Follow <?php the_author_meta( 'display_name' ); ?> on Twitter">Twitter</a></li>
					
					<?php } ?>
					<li><a href="<?php bloginfo('rss2_url'); ?>">RSS</a></li>
				
				</ul>
				
				<form role="search" method="get" class="basescreen" id="searchform" action="<?php bloginfo('url'); ?>">
							
					<label class="screen-reader-text accessibility" for="s">Search for:</label>
					
					<input type="search" value="" name="s" id="s">
					<input type="submit" id="searchsubmit" value="Search">
					
				</form>
				
			</footer>
			
		</div> <!-- end .wrapper -->
		
		<?php wp_footer(); ?>
	
	</body>
	
</html>