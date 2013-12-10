<?php

// allow additional features (feed links)

add_theme_support('automatic-feed-links');


// Set up custom menus

add_action('init', 'register_custom_menu');
 
function register_custom_menu() {

	// one nav menu, not 2 :-). Still use an array just in case we want more in later versions.

	register_nav_menus(
	
		array (
		
		  'navigation' => __( 'navigation' )
		  
		)		
		
	);
}
	

// add a Twitter meta box

add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

function my_show_extra_profile_fields( $user ) { ?>

	<table class="form-table">

		<tr>
		
			<th><label for="twitter">Twitter username</label></th>

			<td>
			
				<input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your Twitter username (without the @).</span>
				
			</td>
			
		</tr>

	</table>
	
<?php }

add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

function my_save_extra_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

	/* Copy and paste this line for additional fields. Make sure to change 'twitter' to the field ID. */
	update_usermeta( $user_id, 'twitter', $_POST['twitter'] );
}


// Add additional styles, inc Open Sans from Google Fonts

function scherzo_theme_styles()

{ 
  
  wp_register_style( 'source-sans-pro', 
    'http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,400italic', 
    array(), 
    '20130104', 
    'screen' );

  // enqueing:
  
  wp_enqueue_style( 'source-sans-pro' );
  
  wp_register_style( 'pure-css-tables', 
    'http://yui.yahooapis.com/pure/0.3.0/tables-min.css', 
    array(), 
    '20130104', 
    'screen' );

  // enqueing:
  
  wp_enqueue_style( 'pure-css-tables' );
  
}

add_action('wp_enqueue_scripts', 'scherzo_theme_styles');


// Add shortcodes to widgets
	
add_filter('widget_text', 'do_shortcode');

?>