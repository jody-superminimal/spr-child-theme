<?php 

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}



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
