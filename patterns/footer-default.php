<?php
/**
 * Footer Default
 * 
 * slug: footer-default
 * title: Footer Default
 * categories: blockline
 */

return array(
    'title'      =>__( 'Footer Default', 'blockline' ),
    'categories' => array( 'blockline' ),
    'content'    => '<!-- wp:group {"tagName":"main","align":"wide","backgroundColor":"bg-sec","layout":{"type":"constrained"}} -->
    <main class="wp-block-group alignwide has-bg-sec-background-color has-background"><!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
    <div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:heading -->
    <h2>About US</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph -->
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:heading -->
    <h2>Contact US</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph -->
    <p><span class="dashicons dashicons-email-alt"></span><span style="font-size: revert; color: var(--wp--preset--color--accent); font-family: var(--wp--preset--font-family--poppins);"> info@company.com</span></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph -->
    <p><span class="dashicons dashicons-phone"></span>  +123 456 789</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph -->
    <p><span class="dashicons dashicons-admin-home"></span>  2080 Peaceful Lane, Chicago,IL, USA</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:heading -->
    <h2>Latest Post</h2>
    <!-- /wp:heading -->
    
    <!-- wp:latest-posts /--></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></main>
    <!-- /wp:group -->
    
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">Proudly powered by  <a href="'.esc_url('https://themehunk.com/').'" data-type="URL" data-id="https://themehunk.com/" target="_blank" rel="noreferrer noopener">Themehunk</a></p>
    <!-- /wp:paragraph -->',
);