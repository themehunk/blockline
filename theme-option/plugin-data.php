<?php 

  if (!function_exists('is_plugin_active')) {
  include_once(ABSPATH . 'wp-admin/includes/plugin.php');
  }

  function blockline_pro_free_check($key, $free_init, $pro_init){

  $status = array();

  $free_initi = $key.'/'.$free_init.'.php';

  $pro_initi  = $pro_init.'.php';

  if(file_exists( WP_PLUGIN_DIR . '/'.$pro_initi)){

    $status['status'] = 'pro-installed';

    $status['free'] = 'false';

    $status['init'] = $pro_initi;

    if(is_plugin_active($pro_initi)){ 

      $status['pro'] = 'true' ;
    
      }else{
      
      $status['pro'] = 'false';

      }

  }else{

      $status['status'] = 'false';

      $status['pro'] = 'false';

      $status['init'] = $free_initi;

      if(file_exists( WP_PLUGIN_DIR . '/'.$free_initi)){

        $status['status'] = 'free-installed';
         
        if(is_plugin_active($free_initi)){ 
    
          $status['free'] = 'true' ;
        
          }else{
          
          $status['free'] = 'false';
    
          }
    
    
      }else{
    
          $status['status'] = 'install-now';
    
          $status['free'] = 'false';
    
      }

  }

  return $status;

}

add_action( 'rest_api_init', function () {
    register_rest_route( 'wp/v1/', 'blockline', array(
        'methods' => 'GET',
        'callback' => 'blockline_theme_option_endpoint_callback',
    ) );
} );

function blockline_theme_option_endpoint_callback() {


   $request_json = get_template_directory() . '/theme-option/data.json';

    $data = wp_json_file_decode($request_json);
    $response_data = array();

    foreach ($data as $key => $value) {

      $plugin_status = blockline_pro_free_check($key, $value->init, $value->proInit);

      $response_data[] = array(
            $key => array(
            'name'   => $value->name,
            'imgUrl' => $value->imgUrl,
            'link'   => $value->link,
            'slug'   => $key,
            'init'   => $plugin_status['init'],
            'free'   => $plugin_status['free'],
            'pro'    => $plugin_status['pro'],
            'status' => $plugin_status['status'],
            )
          );

      }

      return $response_data;

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