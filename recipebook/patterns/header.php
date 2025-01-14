<?php
/**
 * Title: header
 * Slug: recipebook/header
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"categories":["hidden"]},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"secondary","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-secondary-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"align":"wide","style":{"spacing":{"blockGap":{"left":"0"},"margin":{"bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center is-not-stacked-on-mobile" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","verticalAlignment":"stretch"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":32,"shouldSyncIcon":true,"style":{"color":[]}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-title /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"0"}}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"0"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%"><!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h1 class="wp-block-heading has-base-color has-text-color has-link-color"><?php echo __('In Pursuit<br>of Flavor', 'recipebook');?></h1>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-text-color has-link-color has-small-font-size"><?php echo __('Register and share your mealtime techniques with <strong>RecipeBook</strong>. Be ready to learn, teach, and delight people.', 'recipebook');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/cookbook_img-1.png" alt="<?php echo __('', 'recipebook');?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/cookbook_img-2.png" alt="<?php echo __('', 'recipebook');?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/cookbook_img-3.png" alt="<?php echo __('', 'recipebook');?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/cookbook_img-4.png" alt="<?php echo __('', 'recipebook');?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->