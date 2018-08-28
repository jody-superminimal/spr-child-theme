<?php 

// MUST BE 20 TO MAKE SURE WE LOAD PARENT STYLES FIRST
add_action( 'wp_enqueue_scripts', 'spr_child_scripts', 20 );
function spr_child_scripts() {
//	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
	

	wp_enqueue_style('spr-child-fontello-icons', get_stylesheet_directory_uri() . "/assets/fontello/css/fontello.css");

	// Custom styles
    wp_enqueue_style( 'custom-styles', get_stylesheet_directory_uri().'/custom.min.css' );
}

/**
 * Custom template tags for this theme.
 */
require get_stylesheet_directory() . '/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_stylesheet_directory() . '/template-functions.php';



/**
 * add custom image sizes
 */

// soft crop, any height
// add_image_size( 'hero', 1000, 10000);
// add_image_size( 'hero_retina', 2000, 10000);

// hard crop, any height
// add_image_size( 'profile', 500, 400, true);
// add_image_size( 'profile_retina', 1000, 800, true);

function spr_ga() { ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=XX-XXXXXXXX-X"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'XX-XXXXXXXXX-X');
	</script>
<?php }

//add_action('wp_footer', 'spr_ga');
