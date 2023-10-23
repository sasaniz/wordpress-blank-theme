<?php
/**
 * Title: Sidebar
 * Slug: medicare-fse/sidebar
 * Categories: medicare-fse
 */
?>

<!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:30%"><!-- wp:search {"label":"Search","showLabel":false,"width":1526,"widthUnit":"px","buttonText":"Search","backgroundColor":"primary"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Recent Post', 'medicare-fse' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:latest-posts {"displayAuthor":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75,"addLinkToFeaturedImage":true,"style":{"spacing":{"margin":{"bottom":"0"}}},"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:calendar {"fontSize":"medium"} /-->

<!-- wp:tag-cloud {"className":"is-style-outline"} /-->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Link With Us', 'medicare-fse' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:social-links {"size":"has-normal-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"is-style-default"} -->
<ul class="wp-block-social-links has-normal-icon-size is-style-default"><!-- wp:social-link {"url":"facebook.com","service":"facebook"} /-->

<!-- wp:social-link {"url":"github.com","service":"github"} /-->

<!-- wp:social-link {"url":"twitch.com","service":"twitch"} /-->

<!-- wp:social-link {"url":"youtube.com","service":"youtube"} /-->

<!-- wp:social-link {"url":"twitter.com","service":"twitter"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->