<?php
/**
 * Hero Section
 * 
 * slug: hero
 * title: Hero Section
 * categories: blockline
 */

return array(
    'title'      =>__( 'Service Section', 'blockline' ),
    'categories' => array( 'blockline' ),
    'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"20px","bottom":"var:preset|spacing|80","left":"20px"},"blockGap":"var:preset|spacing|50","margin":{"top":"0","bottom":"0"}},"color":{"gradient":"radial-gradient(rgb(2,3,129) 0%,rgb(40,116,252) 100%)"}},"textColor":"background","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group has-background-color has-text-color has-background" style="background:radial-gradient(rgb(2,3,129) 0%,rgb(40,116,252) 100%);margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:20px;padding-bottom:var(--wp--preset--spacing--80);padding-left:20px"><!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"70px"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} -->
<h2 class="has-text-align-center has-background-color has-text-color has-link-color" style="font-size:70px;font-style:normal;font-weight:600">Blockline Theme</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"upper-heading"} -->
<p class="has-text-align-center has-upper-heading-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"4px"},"spacing":{"padding":{"top":"1rem","right":"2rem","bottom":"1rem","left":"2rem"}},"color":{"background":"#0736e3"}},"className":"is-style-fill","fontSize":"normal"} -->
<div class="wp-block-button has-custom-font-size is-style-fill has-normal-font-size"><a class="wp-block-button__link has-background wp-element-button" style="border-radius:4px;background-color:#0736e3;padding-top:1rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem">Contact us</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->',
);