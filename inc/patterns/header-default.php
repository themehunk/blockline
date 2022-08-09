<?php
/**
 * Grid Post With Sidebar block pattern
 */
return array(
    'title'      => __( 'Header Default', 'blockline' ),
    'categories' => array( 'header' ),
    'blockTypes' => array( 'core/header' ),
    'content'    => '<!-- wp:group {"layout":{"inherit":true}}  -->

<div class="wp-block-group">

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var(--wp--custom--spacing--small, 1.25rem)","top":"var(--wp--custom--spacing--small, 1.25rem)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} --> 
<div class="wp-block-group alignwide" style="padding-top:var(--wp--custom--spacing--small, 1.25rem);padding-bottom:var(--wp--custom--spacing--small, 1.25rem);">

    <!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","orientation":"vertical"}} -->

    <div class="wp-block-group">
    <!-- wp:site-title {"style":{"typography":{"fontStyle":"italic","fontWeight":"bold"}}} /-->
    <!-- wp:site-tagline /-->
    </div>
    <!-- /wp:group --> 

    <!-- wp:group {"className":"nav","layout":{"type":"flex","justifyContent":"space-between"}} -->   
     <div class="wp-block-group nav">
    <!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} --><!-- /wp:navigation -->
    </div>
    <!-- /wp:group -->    

</div>

<!-- /wp:group -->

</div>

<!-- /wp:group -->',
);