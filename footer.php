				</div> <!-- end .wrapper -->
				
				<footer class="site-footer">
						
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
			
		</div> <!-- end .inner -->
		
		<script>
		
			var navigation = responsiveNav("#reveal", { // Selector: The ID of the wrapper
			animate: false, // Boolean: Use CSS3 transitions, true or false
			transition: 0, // Integer: Speed of the transition, in milliseconds
			label: "Menu", // String: Label for the navigation toggle
			insert: "before", // String: Insert the toggle before or after the navigation
			customToggle: "", // Selector: Specify the ID of a custom toggle
			openPos: "relative", // String: Position of the opened nav, relative or static
			jsClass: "js", // String: 'JS enabled' class which is added to <html> el
			init: function(){}, // Function: Init callback
			open: function(){}, // Function: Open callback
			close: function(){} // Function: Close callback
			});
			
		</script>
		
		<?php wp_footer(); ?>
	
	</body>
	
</html>