<?php
/**
 * Blog Section
 * 
 * slug: blog
 * title: Blog Section
 * categories: blockline
 */

return array(
    'title'      =>__( 'Blog Section', 'blockline' ),
    'categories' => array( 'blockline' ),
    'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--30)"><!-- wp:query {"queryId":15,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide","className":"thunk-blog-pattern","layout":{"type":"default"}} -->
    <div class="wp-block-query alignwide thunk-blog-pattern"><!-- wp:post-template -->
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0"}},"backgroundColor":"foreground","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
    <div class="wp-block-group has-foreground-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"align":"wide"} /-->
    
    <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|30","left":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)"><!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"bg-sec"} /-->
    
    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|30"}},"typography":{"lineHeight":"0.8"}},"textColor":"background","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
    <div class="wp-block-group has-background-color has-text-color" style="margin-top:var(--wp--preset--spacing--30);line-height:0.8"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"tiny"} -->
    <p class="has-text-align-center has-tiny-font-size" style="font-style:italic;font-weight:400">by</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:post-author {"textAlign":"center","showAvatar":false,"showBio":false,"byline":"","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"tiny"} /-->
    
    <!-- wp:post-date {"textAlign":"center","style":{"spacing":{"margin":{"left":"var:preset|spacing|30"}}},"fontSize":"tiny"} /--></div>
    <!-- /wp:group -->
    
    <!-- wp:post-excerpt {"textAlign":"center","moreText":"Read More","style":{"typography":{"lineHeight":"1.8"}},"textColor":"background"} /--></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->
    <!-- /wp:post-template --></div>
    <!-- /wp:query --></div>
    <!-- /wp:group -->',
);