<?php
/**
 * Ribbon Section
 * 
 * slug: ribbon
 * title: Ribbon Section
 * categories: blockline
 */

return array(
    'title'      =>__( 'Ribbon Section', 'blockline' ),
    'categories' => array( 'blockline' ),
    'content'    => '<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"80px","right":"20px","bottom":"80px","left":"20px"},"margin":{"top":"0","bottom":"0"}},"color":{"gradient":"linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 51%)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background:linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 51%);margin-top:0;margin-bottom:0;padding-top:80px;padding-right:20px;padding-bottom:80px;padding-left:20px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"background","fontSize":"large"} -->
<h2 class="has-text-align-center has-background-color has-text-color has-large-font-size" style="font-style:normal;font-weight:600">“Pleasure in the job puts perfection in the work.”</h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"4px"},"spacing":{"padding":{"top":"1rem","right":"2rem","bottom":"1rem","left":"2rem"}},"color":{"background":"#0736e3"}},"className":"is-style-fill","fontSize":"normal"} -->
<div class="wp-block-button has-custom-font-size is-style-fill has-normal-font-size"><a class="wp-block-button__link has-background wp-element-button" style="border-radius:4px;background-color:#0736e3;padding-top:1rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem">Explore it</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->',
);