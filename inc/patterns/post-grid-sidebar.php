<?php
/**
 * Grid Post With Sidebar block pattern
 */
return array(
    'title'      => __( 'Grid Post With Sidebar', 'blockline' ),
    'categories' => array( 'query' ),
    'blockTypes' => array( 'core/query' ),
    'content'    => '<!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"nowrap","setCascadingProperties":true}} -->
<div class="wp-block-group alignfull">

<!-- wp:column {"verticalAlignment":"top","width":"66.66%","style":{"spacing":{"padding":{"bottom":"6rem"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-bottom:6rem;flex-basis:66.66%"> 

<!-- wp:query {"queryId":0,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->

<div class="wp-block-query alignwide">
<!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group" style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:post-title {"isLink":true,"textColor":"foreground"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"isLink":true,"style":{"typography":{"fontStyle":"italic","fontWeight":"400","fontSize":"14px"}}} /-->
    
</div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /-->

</div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem"}}}} -->
<div class="wp-block-group" style="padding-top:1rem"><!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
<!-- wp:query-pagination-numbers /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-next /-->
</div>
<!-- /wp:group -->
<!-- /wp:query-pagination -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"top","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%;">
    <!-- wp:heading {"level":4,"fontSize":"medium"} -->
                    <h4>' . esc_html__( 'Tag', 'blockline' ) . '</h4>
                    <!-- /wp:heading -->

                    <!-- wp:tag-cloud {"taxonomy":"category","showTagCounts":true} /-->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:group -->',
);