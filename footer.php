			<footer class="site-footer">
					
				<ul>
			
					<li><a href="<?php bloginfo('url'); ?>"><span itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name">Leon Paternoster</span></span></a></li>
					<?php wp_nav_menu(array('theme_location' => 'navigation', 'container' => 'false', 'items_wrap' => '%3$s', 'depth' => '2')); ?>
					<li><a href="http://twitter.com/leonpaternoster">Twitter</a></li>
					<li><a href="<?php bloginfo('rss2_url'); ?>">RSS</a></li>
				
				</ul>
				
			</footer>
			
		</div> <!-- end .wrapper -->
		
		<?php wp_footer(); ?>
	
	</body>
	
</html>