<?php 
add_action( 'rest_api_init', function () {
    register_rest_route( 'wp/v1/', 'blockline', array(
        'methods' => 'GET',
        'callback' => 'blockline_theme_option_endpoint_callback',
    ) );
} );

function blockline_theme_option_endpoint_callback() {

    $data = array(
    
        'th_all_in_one_woo_cart' => array(
           'name' => esc_html__( 'Th All In One Woo Cart', 'blockline' ),
           'imgUrl' => 'https://ps.w.org/th-all-in-one-woo-cart/assets/icon-128x128.png',
           'pro_link' => esc_url('https://themehunk.com/th-all-in-one-woo-cart/'),
           'active_filename' => 'th-all-in-one-woo-cart/th-all-in-one-woo-cart.php',
           'slug'=> 'th-all-in-one-woo-cart',
           'detail_link' => get_home_url().'/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=th-all-in-one-woo-cart&amp;TB_iframe=true&amp;width=772&amp;height=500',
           'pro_plugin' => array(
                               'slug'=>'th-all-in-one-woo-cart-pro',
                               'init'=>'th-all-in-one-woo-cart-pro/th-all-in-one-woo-cart-pro.php',
                               'admin_link'=>'th-all-in-one-woo-cart-pro',
                               'docs'=>esc_url('https://themehunk.com/docs/th-all-in-one-woo-cart/'),
                               'prolink'=>esc_url('https://themehunk.com/th-all-in-one-woo-cart/'),
                               )
           ),
           'th_advance_product_search' => array(
            'name' => esc_html__( 'Th Advance Product Search', 'blockline' ),
            'imgUrl' => 'https://ps.w.org/th-advance-product-search/assets/icon-128x128.gif',
            'pro_link' => esc_url('https://themehunk.com/advance-product-search/'),
            'active_filename' => 'th-advance-product-search/th-advance-product-search.php',
            'slug'=> 'th-advance-product-search',
            'detail_link' => get_home_url().'/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=th-advance-product-searchs&amp;TB_iframe=true&amp;width=772&amp;height=500',
            'pro_plugin' => array(
                       'slug'=>'th-advance-product-search-pro',
                       'init'=>'th-advance-product-search-pro/th-advance-product-search-pro.php',
                       'admin_link'=>'th-advance-product-search-pro',
                       'docs'=>esc_url('https://themehunk.com/docs/th-advance-product-search/'),
                       'prolink'=>esc_url('https://themehunk.com/th-advance-product-search/'),
                    )
        ),
        'th_product_compare' => array(
          'name' => esc_html__( 'TH Product Compare', 'blockline' ),
          'imgUrl' => 'https://ps.w.org/th-product-compare/assets/icon-128x128.gif',
          'pro_link' => esc_url('https://themehunk.com/th-product-compare/'),
          'active_filename' => 'th-product-compare/th-product-compare.php',
          'slug'=> 'th-product-compare',
          'detail_link' => get_home_url().'/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=th-product-compare&amp;TB_iframe=true&amp;width=772&amp;height=500',
          'pro_plugin' => array(
                     'slug'=>'th-product-compare-pro',
                     'init'=>'th-product-compare-pro/th-product-compare-pro.php',
                     'admin_link'=>'th-product-compare-pro',
                     'docs'=>esc_url('https://themehunk.com/docs/th-product-compare/'),
                     'prolink'=>esc_url('https://themehunk.com/th-product-compare/'),

                  )
      ),
      'th_variation_swatches' => array(
        'name' => esc_html__( 'Th Variation Swatches', 'blockline' ),
        'imgUrl' => 'https://ps.w.org/th-variation-swatches/assets/icon-128x128.gif',
        'pro_link' => esc_url('https://themehunk.com/th-variation-swatches/'),
        'active_filename' => 'th-variation-swatches/th-variation-swatches.php',
        'slug'=> 'th-variation-swatches',
        'detail_link' => get_home_url().'/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=th-variation-swatches&amp;TB_iframe=true&amp;width=772&amp;height=500',
        'pro_plugin' => array(
                  'slug'=>'th-variation-swatches',
                  'init'=>'th-variation-swatches-pro/th-variation-swatches-pro.php',
                   'admin_link'=>'th-variation-swatches',
                   'docs'=>esc_url('https://themehunk.com/docs/th-variation-swatches-plugin/'),
                   'prolink'=>esc_url('https://themehunk.com/th-variation-swatches/'),
                )
      ), 
      'lead_form_builder' => array(
        'name' => esc_html__( 'Lead Form Builder', 'blockline' ),
        'imgUrl' => 'https://ps.w.org/lead-form-builder/assets/icon-128x128.png',
        'pro_link' => esc_url('https://themehunk.com/product/lead-form-builder-pro/'),
        'active_filename' => 'lead-form-builder/lead-form-builder.php',
        'slug'=> 'lead-form-builder',
        'detail_link' => get_home_url().'/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=lead-form-builder&amp;TB_iframe=true&amp;width=772&amp;height=500',
        'pro_plugin' => array(
                 'slug'=>'lead-form-builder',
                  'init'=>'lead-form-builder/init.php',
                    'admin_link'=>'wplf-plugin-menu',
                    'docs'=>esc_url('https://themehunk.com/docs/lead-form-builder-pro/'),
                    'prolink'=>esc_url('https://themehunk.com/lead-form-builder/'),
                )
    ),
    'wp_popup_builder' => array(
        'name' => esc_html__( 'WP Popup Builder – Popup Forms & Newsletter', 'blockline' ),
        'imgUrl' => 'https://ps.w.org/wp-popup-builder/assets/icon-128x128.png',
        'pro_link' => esc_url('https://themehunk.com/wp-popup-builder-pro/'),
        'active_filename' => 'wp-popup-builder/wp-popup-builder.php',
        'slug'=> 'wp-popup-builder',
        'detail_link' => get_home_url().'/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=wp-popup-builder&amp;TB_iframe=true&amp;width=772&amp;height=500',
        'pro_plugin' => array(
                 'slug'=>'wp-popup-builder',
                  'init'=>'wp-popup-builder-pro/wp-popup-builder.php',
                  'admin_link'=>'wppb',
                  'docs'=>esc_url('https://themehunk.com/docs/wp-popup-builder-pro/'),
                  'prolink'=>esc_url('https://themehunk.com/wp-popup-builder/'),
                )
    ),
    'unlimited_blocks' => array(
      'name' => esc_html__( 'Unlimited blocks For Gutenberg', 'blockline' ),
      'imgUrl' => 'https://ps.w.org/unlimited-blocks/assets/icon-128x128.png',
      'pro_link' => '',
      'active_filename' => 'unlimited-blocks/unlimited-blocks.php',
      'slug'=> 'unlimited-blocks',
      'detail_link' => get_home_url().'/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=unlimited-blocks&amp;TB_iframe=true&amp;width=772&amp;height=500',
     
    ),
    'woocommerce' => array(
      'name' => esc_html__( 'Woocommerce', 'blockline' ),
      'imgUrl' => 'https://ps.w.org/woocommerce/assets/icon-128x128.png',
      'pro_link' => '',
      'active_filename' => 'woocommerce/woocommerce.php',
      'slug'=> 'woocommerce',
      'detail_link' => get_home_url().'/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=woocommerce&amp;TB_iframe=true&amp;width=772&amp;height=500',
     
    ),
    'yith_woocommerce_wishlist' => array(
      'name' => esc_html__( 'YITH WooCommerce Wishlist', 'blockline' ),
      'imgUrl' => 'https://ps.w.org/yith-woocommerce-wishlist/assets/icon-128x128.jpg',
      'pro_link' => '',
      'active_filename' => 'yith-woocommerce-wishlist/init.php',
      'slug'=> 'yith-woocommerce-wishlist',
      'detail_link' => get_home_url().'/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=yith-woocommerce-wishlist&amp;TB_iframe=true&amp;width=772&amp;height=500',
   ),

       
    );

    return rest_ensure_response($data);

}

function blockline_install_plugin() {

if ( ! current_user_can( 'administrator' ) ) {

    wp_die( - 1, 403 );
    
}

check_ajax_referer( 'ajaxnonce', 'nonce' );

$init = $_POST["init"];
$slug = $_POST["slug"];
$instl = $_POST["instl"];

$plugin_init = (isset($init)) ? esc_attr($init) : '';


if (! is_plugin_active($plugin_init) && $instl == 'install-now') {

  $status = array(
		'install' => 'plugin',
		'slug'    => sanitize_key( wp_unslash( $slug ) ),
	);

  if ( ! current_user_can( 'install_plugins' ) ) {
		$status['errorMessage'] = __( 'Sorry, you are not allowed to install plugins on this site.' );
		wp_send_json_error( $status );
	}

  $api = plugins_api(
		'plugin_information',
		array(
			'slug'   => sanitize_key( wp_unslash( $slug ) ),
			'fields' => array(
				'sections' => false,
			),
		)
	);

  if ( is_wp_error( $api ) ) {

		$status['errorMessage'] = $api->get_error_message();
		wp_send_json_error( $status );

	}

  $status['pluginName'] = $api->name;
  $skin     = new WP_Ajax_Upgrader_Skin();
	$upgrader = new Plugin_Upgrader( $skin );
  $result   = $upgrader->install( $api->download_link );

  $install_status = install_plugin_install_status( $api );

	$pagenow        = isset( $_POST['pagenow'] ) ? sanitize_key( $_POST['pagenow'] ) : '';

	// If installation request is coming from import page, do not return network activation link.

	$plugins_url = ( 'import' === $pagenow ) ? admin_url( 'plugins.php' ) : network_admin_url( 'plugins.php' );

	if ( current_user_can( 'activate_plugin', $install_status['file'] ) && is_plugin_inactive( $install_status['file'] ) ) {
		$status['activateUrl'] = add_query_arg(
			array(
				'_wpnonce' => wp_create_nonce( 'activate-plugin_' . $install_status['file'] ),
				'action'   => 'activate',
				'plugin'   => $install_status['file'],
			),
			$plugins_url
		);

	}
  
  if ( is_multisite() && current_user_can( 'manage_network_plugins' ) && 'import' !== $pagenow ) {
		$status['activateUrl'] = add_query_arg( array( 'networkwide' => 1 ), $status['activateUrl'] );
	}
  
$activate = activate_plugin($plugin_init);

if (is_wp_error($activate)) {
    wp_send_json_error(
      array(
        'success' => false,
        'message' => $activate->get_error_message(),
      )
    );
  }

  wp_send_json_success(
    array(
      'success' => true,
      'message' => __('Plugin Successfully Activated', 'blockline'),
    )
  );

}elseif(! is_plugin_active($plugin_init)){

  $activate = activate_plugin($plugin_init);

  if (is_wp_error($activate)) {
      wp_send_json_error(
        array(
          'success' => false,
          'message' => $activate->get_error_message(),
        )
      );
    }
  
    wp_send_json_success(
      array(
        'success' => true,
        'message' => __('Plugin Successfully Activated', 'blockline'),
      )
    );

}

die();

}

add_action('wp_ajax_blockline_install_plugin', 'blockline_install_plugin');
add_action('wp_ajax_nopriv_blockline_install_plugin', 'blockline_install_plugin');

include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

