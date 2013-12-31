<?php

// Allow additional features (feed links)

add_theme_support('automatic-feed-links');
add_filter('widget_text', 'do_shortcode');


// Allow custom background

add_theme_support( 'custom-background' );

$args = array(
	'default-color'          => 'CFCFCF',
	'default-image'          => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);

add_theme_support( 'custom-background', $args );


// Add a custom header (default is of Mr Leon Paternoster)

$args = array(
	'flex-width'    => true,
	'width'         => 112,
	'flex-height'   => true,
	'height'        => 112,
	'default-image' => get_template_directory_uri() . '/images/portrait.jpg',
	'header-text' 	=> false
);

add_theme_support( 'custom-header', $args );


// Set up custom navigation menu

add_action('init', 'register_custom_menu');
 
function register_custom_menu() {

	register_nav_menus(
	
		array (
		
		  'navigation' => __( 'navigation' )
		  
		)		
		
	);
}
	

// Add a Twitter meta box

add_action( 'show_user_profile', 'klinik_extra_profile_fields' );
add_action( 'edit_user_profile', 'klinik_extra_profile_fields' );

function klinik_extra_profile_fields( $user ) { ?>

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

	// Copy and paste this line for additional fields. Make sure to change 'twitter' to the field ID.
	update_usermeta( $user_id, 'twitter', $_POST['twitter'] );
}


// Add stylesheets (Klinik, Pure tables and Open Sans) and scripts (responsive nav)

if ( !function_exists( 'klinik_scripts_styles' ) ) :

	function klinik_scripts_styles()

	{
		wp_enqueue_style( 'klinik-stylesheet', get_stylesheet_uri() );
		wp_enqueue_style( 'open-sans', 'http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700' );
		wp_enqueue_style( 'pure-css-tables', 'http://yui.yahooapis.com/pure/0.3.0/tables-min.css' );
		wp_enqueue_script( 'responsive-nav', get_template_directory_uri() . '/js/responsive-nav.min.js', array(), false, false );
	  
	}

	add_action('wp_enqueue_scripts', 'klinik_scripts_styles');

endif;

?>