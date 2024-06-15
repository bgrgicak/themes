<?php
/**
 * Title: simple-header-with-image
 * Slug: grammer/simple-header-with-image
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"6vh","bottom":"1.5vh"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="padding-top:6vh;padding-bottom:1.5vh"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-title {"textAlign":"center"} /-->

<!-- wp:paragraph -->
<p><?php echo __('@golaj', 'grammer');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0vh","bottom":"0vh"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:0vh;margin-bottom:0vh"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/7c73e-man-behind-the-camera-scaled-1.jpg","dimRatio":10,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":60,"minHeightUnit":"vh","contentPosition":"bottom left","align":"wide"} -->
<div class="wp-block-cover alignwide has-custom-content-position is-position-bottom-left" style="min-height:60vh"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background " alt="<?php echo __('', 'grammer');?>" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/7c73e-man-behind-the-camera-scaled-1.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"><?php echo __('', 'grammer');?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->