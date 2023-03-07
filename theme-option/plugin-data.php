<?php 

function blockline_plugin_pro_status_array($slug) {

  if(is_dir( WP_PLUGIN_DIR . '/'.$slug)){ 
    $data_array = array(
    'slug'=>$slug,
    'init'=>$slug.'/'.$slug.'.php',
    'pro_status_active' => is_plugin_active( $slug.'/'.$slug.'.php'),
    'docs'=>esc_url('https://themehunk.com/docs/'.$slug.'/'),
  );

  return $data_array;

  }else{
  
  return false;

  }

}

function blockline_plugin_lite_status($slug) {
 
return is_plugin_active( $slug.'/'.$slug.'.php');

}


function blockline_plugin_install_status($slug) {

  if(is_dir( WP_PLUGIN_DIR . '/'.$slug)){ 

    return 'installed';

  }else{

    return 'install-now';

  }

}

add_action( 'rest_api_init', function () {
    register_rest_route( 'wp/v1/', 'blockline', array(
        'methods' => 'GET',
        'callback' => 'blockline_theme_option_endpoint_callback',
    ) );
} );

function blockline_theme_option_endpoint_callback() {

    $data = array(
        'th_advance_product_search' => array(
        'name' => esc_html__( 'Th Advance Product Search', 'blockline' ),
        'imgUrl' => 'https://ps.w.org/th-advance-product-search/assets/icon-128x128.gif',
        'link' => esc_url('https://themehunk.com/advance-product-search/'),
        'active_filename' => 'th-advance-product-search/th-advance-product-search.php',
        'slug'=> 'th-advance-product-search',
        'detail_link' => get_home_url().'/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=th-advance-product-searchs&amp;TB_iframe=true&amp;width=772&amp;height=500',
        'status_active' => blockline_plugin_lite_status('th-advance-product-search'),
        'prolink'=> esc_url('https://themehunk.com/advance-product-search/'),
        'pro_plugin' => blockline_plugin_pro_status_array('th-advance-product-search-pro'),
        'status_install' => blockline_plugin_install_status('th-advance-product-search')
        ),

        'th_product_compare' => array(
          'name' => esc_html__( 'TH Product Compare', 'blur' ),
          'imgUrl' => 'https://ps.w.org/th-product-compare/assets/icon-128x128.gif',
          'link' => esc_url('https://themehunk.com/th-product-compare/'),
          'active_filename' => 'th-product-compare/th-product-compare.php',
          'slug'=> 'th-product-compare',
          'detail_link' => get_home_url().'/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=th-product-compare&amp;TB_iframe=true&amp;width=772&amp;height=500',
          'status_active' => blockline_plugin_lite_status('th-product-compare'),
          'prolink'=> esc_url('https://themehunk.com/th-product-compare/'),
          'pro_plugin' => blockline_plugin_pro_status_array('th-product-compare-pro'),
          'status_install' => blockline_plugin_install_status('th-advance-product-search')
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

