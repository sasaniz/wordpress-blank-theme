<?php
/**
 * Title: Recent News
 * Slug: medicare-fse/recent-news
 * Categories: medicare-fse
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" id="recent-news" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"bottom":"0.2rem"},"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"1.6rem"}},"textColor":"primary"} -->
<p class="has-text-align-center has-primary-color has-text-color" style="margin-top:0;margin-bottom:0;padding-bottom:0.2rem;font-size:1.6rem"><?php echo esc_html__( 'Recent New', 'medicare-fse' ); ?>s</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"padding":{"bottom":"0"}}},"fontSize":"extra-large"} -->
<h2 class="wp-block-heading has-text-align-center has-extra-large-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-bottom:0"><?php echo esc_html__( 'Latest Updates and News', 'medicare-fse' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"bottom":"0","left":"10px","right":"10px"}}}} -->
<div class="wp-block-columns alignwide" style="padding-right:10px;padding-bottom:0;padding-left:10px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:query {"queryId":7,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"align":"wide","style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="border-style:none;border-width:0px"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"var:preset|spacing|40","top":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"},"color":{"background":"#f7f8fa"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group has-background" style="background-color:#f7f8fa;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.2"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"0"}}},"fontSize":"large"} /-->

<!-- wp:post-terms {"term":"category","style":{"spacing":{"margin":{"bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"small"} /-->

<!-- wp:post-excerpt {"moreText":"Read More","excerptLength":25,"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":"0"}},"fontSize":"small"} -->
<div class="wp-block-buttons has-custom-font-size has-small-font-size" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"0px"}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:0px"><?php echo esc_html__( 'View All', 'medicare-fse' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->