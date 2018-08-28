<?php


/**
 * create a header section.  If no values passed through, use current post title and excerpt
 * @param header_text
 * @param intro_text
 */
function spr_do_header( $header_text = '', $intro_text = '' ) {
	global $post;
	$header_text = !empty( $header_text ) ? $header_text : $post->post_title;
	$intro_text = !empty( $intro_text ) ? $intro_text : $post->post_excerpt;
	
	?>
	<section class="header bg-blue pb-4">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="header-title"><?= $header_text ?></h1>
					<hr class="header-hr">
					<?= $intro_text ? '<div class="header-intro pb-2 text-left">' . $intro_text . '</div>' : ''; ?>
				</div>
			</div>
		</div>
	</section>
<?php } 



/**
 * spr_do_top_bar
 */
function spr_do_top_bar() { ?>
	<section id="top-bar" class="py-2 px-lg-4 d-flex align-items-center">
		<div class="container-fluid">
			<div class="row">
			<!-- justify-content-md-end -->
				<div class="col-12 text-right">
					icons
				</div>
			</div>
		</div>		
	</section>
<?php }
