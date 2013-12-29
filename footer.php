﻿			<footer class="site-footer">
					
				<ul>
			
					<li><a href="<?php bloginfo('url'); ?>"><span itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name"><?php bloginfo('name'); ?></span></span></a></li>
					<?php wp_nav_menu(array('theme_location' => 'navigation', 'container' => 'false', 'items_wrap' => '%3$s', 'depth' => '2')); ?>
					<?php if ( get_the_author_meta( 'twitter' ) ) { ?>
				
						<li><a href="http://twitter.com/<?php the_author_meta( 'twitter' ); ?>" title="Follow <?php the_author_meta( 'display_name' ); ?> on Twitter">Twitter</a></li>
					
					<?php } ?>
					<li><a href="<?php bloginfo('rss2_url'); ?>">RSS</a></li>
					<br><li><small>Klinik theme by <a href="http://leonpaternoster.com">Leon Paternoster</a></small></li>
				
				</ul>
				
			</footer>
			
		</div> <!-- end .wrapper -->
		
		<?php wp_footer(); ?>
	
	</body>
	
</html>