<?php 

class Blockline_theme_option{

    /**
     * Menu page title
     *
     * @since 1.0
     * @var array $menu_page_title
     */
    static public $menu_page_title = 'blockline';

    /**
     * Current Slug
     *
     * @since 1.0
     * @var array $current_slug
     */
    static public $current_slug = 'general';

    function __construct(){

    add_action('admin_enqueue_scripts', array($this, 'blockline_enqueue_scripts'));
    add_action('admin_menu', array($this, 'blockline_register_settings_menu'),99);
      
    }

    function blockline_register_settings_menu() {

    $menu_title = sprintf( esc_html__( '%s Options', 'blockline' ), apply_filters( 'thsm_page_title', __( 'Blockline', 'blockline' ) ) );

    add_theme_page(esc_html__('Blockline', 'blockline'), $menu_title, 'edit_theme_options', 'blockline_thunk_started', array($this, 'blockline_settings_page'));   
   
  }
   
   function blockline_enqueue_scripts() {
    
    if(is_plugin_active('th-all-in-one-woo-cart/th-all-in-one-woo-cart.php') && !is_plugin_active('th-all-in-one-woo-cart-pro/th-all-in-one-woo-cart-pro.php')){
      $thiowc_active = false; 
    }elseif(!is_plugin_active('th-all-in-one-woo-cart/th-all-in-one-woo-cart.php') && is_plugin_active('th-all-in-one-woo-cart-pro/th-all-in-one-woo-cart-pro.php')){
      $thiowc_active = true; 
    }elseif(is_plugin_active('th-all-in-one-woo-cart/th-all-in-one-woo-cart.php')){
      $thiowc_active = true; 
    }elseif(is_plugin_active('th-all-in-one-woo-cart-pro/th-all-in-one-woo-cart-pro.php')){
      $thiowc_active = true; 
    }else{
      $thiowc_active = false;
    }

    if(is_plugin_active('th-advance-product-search/th-advance-product-search.php') && !is_plugin_active('th-advance-product-search-pro/th-advance-product-search-pro.php')){
      $thaps_active = false; 
    }elseif(!is_plugin_active('th-advance-product-search/th-advance-product-search.php') && is_plugin_active('th-advance-product-search-pro/th-advance-product-search-pro.php')){
      $thaps_active = true; 
    }elseif(is_plugin_active('th-advance-product-search/th-advance-product-search.php')){
      $thaps_active = true; 
    }elseif(is_plugin_active('th-advance-product-search-pro/th-advance-product-search-pro.php')){
      $thaps_active = true; 
    }else{
      $thaps_active = false;
    }

    if(is_plugin_active('th-product-compare/th-product-compare.php') && !is_plugin_active('th-product-compare-pro/th-product-compare-pro.php')){
      $thpc_active = false; 
    }elseif(!is_plugin_active('th-product-compare/th-product-compare.php') && is_plugin_active('th-product-compare-pro/th-product-compare-pro.php')){
      $thpc_active = true; 
    }elseif(is_plugin_active('th-product-compare/th-product-compare.php')){
      $thpc_active = true; 
    }elseif(is_plugin_active('th-product-compare-pro/th-product-compare-pro.php')){
      $thpc_active = true; 
    }else{
      $thpc_active = false;
    }

    if(is_plugin_active('th-variation-swatches/th-variation-swatches.php') && !is_plugin_active('th-variation-swatches-pro/th-variation-swatches-pro.php')){
      $thvs_active = false; 
    }elseif(!is_plugin_active('th-variation-swatches/th-variation-swatches.php') && is_plugin_active('th-variation-swatches-pro/th-variation-swatches-pro.php')){
      $thvs_active = true; 
    }elseif(is_plugin_active('th-variation-swatches/th-variation-swatches.php')){
      $thvs_active = true; 
    }elseif(is_plugin_active('th-variation-swatches-pro/th-variation-swatches-pro.php')){
      $thvs_active = true; 
    }else{
      $thvs_active = false;
    }

    if(is_plugin_active('lead-form-builder/lead-form-builder.php') && !is_plugin_active('lead-form-builder-pro/lead-form-builder-pro.php')){
      $thlf_active = false; 
    }elseif(!is_plugin_active('lead-form-builder/lead-form-builder.php') && is_plugin_active('lead-form-builder-pro/lead-form-builder-pro.php')){
      $thlf_active = true; 
    }elseif(is_plugin_active('lead-form-builder/lead-form-builder.php')){
      $thlf_active = true; 
    }elseif(is_plugin_active('lead-form-builder-pro/lead-form-builder-pro.php')){
      $thlf_active = true; 
    }else{
      $thlf_active = false;
    }


    if(is_plugin_active('wp-popup-builder/wp-popup-builder.php') && !is_plugin_active('wp-popup-builder-pro/wp-popup-builder-pro.php')){
      $thwpbl_active = false; 
    }elseif(!is_plugin_active('wp-popup-builder/wp-popup-builder.php') && is_plugin_active('wp-popup-builder-pro/wp-popup-builder-pro.php')){
      $thwpbl_active = true; 
    }elseif(is_plugin_active('wp-popup-builder/wp-popup-builder.php')){
      $thwpbl_active = true; 
    }elseif(is_plugin_active('wp-popup-builder-pro/wp-popup-builder-pro.php')){
      $thwpbl_active = true; 
    }else{
      $thwpbl_active = false;
    }

  
    if(is_plugin_active('unlimited_blocks/unlimited_blocks.php')){
      $thulb_active = true; 
    }else{
      $thulb_active = false;
    }
    if(is_plugin_active('woocommerce/woocommerce.php')){
      $woo_active = true; 
    }else{
      $woo_active = false;
    }
    if(is_plugin_active('yith-woocommerce-wishlist/init.php')){
      $yithwlst_active = true; 
    }else{
      $yithwlst_active = false;
    }

    if(is_dir( WP_PLUGIN_DIR . '/th-all-in-one-woo-cart' ) || is_dir( WP_PLUGIN_DIR . '/th-all-in-one-woo-cart-pro' )){
      $thiowc_instl = 'installed'; 
    }else{
      $thiowc_instl = 'install-now';
    }

    if(is_dir( WP_PLUGIN_DIR . '/th-advance-product-search' ) || is_dir( WP_PLUGIN_DIR . '/th-advance-product-search-pro' )){
      $thaps_instl = 'installed'; 
    }else{
      $thaps_instl = 'install-now';
    }

    if(is_dir( WP_PLUGIN_DIR . '/th-product-compare' ) || is_dir( WP_PLUGIN_DIR . '/th-product-compare-pro' )){
      $thpc_instl = 'installed'; 
    }else{
      $thpc_instl = 'install-now';
    }

    if(is_dir( WP_PLUGIN_DIR . '/th-variation-swatches' ) || is_dir( WP_PLUGIN_DIR . '/th-variation-swatches-pro' )){
      $thvs_instl = 'installed'; 
    }else{
      $thvs_instl = 'install-now';
    }

    if(is_dir( WP_PLUGIN_DIR . '/lead-form-builder' ) || is_dir( WP_PLUGIN_DIR . '/lead-form-builder-pro' )){
      $thlf_instl = 'installed'; 
    }else{
      $thlf_instl = 'install-now';
    }

    if(is_dir( WP_PLUGIN_DIR . '/wp-popup-builder' )|| is_dir( WP_PLUGIN_DIR . '/wp-popup-builder-pro' )){
      $thwpbl_instl = 'installed'; 
    }else{
      $thwpbl_instl = 'install-now';
    }

    if(is_dir( WP_PLUGIN_DIR . '/unlimited_blocks' )){
      $thulb_instl = 'installed'; 
    }else{
      $thulb_instl = 'install-now';
    }
    if(is_dir( WP_PLUGIN_DIR . '/woocommerce' )){
      $woo_instl = 'installed'; 
    }else{
      $woo_instl = 'install-now';
    }
    if(is_dir( WP_PLUGIN_DIR . '/yith-woocommerce-wishlist' )){
      $yithwlst_instl = 'installed'; 
    }else{
      $yithwlst_instl = 'install-now';
    }


    // for pro plugin

    if(is_dir( WP_PLUGIN_DIR . '/th-product-compare-pro' )){

      if(!is_plugin_active('th-product-compare/th-product-compare.php') || !is_plugin_active('th-product-compare-pro/th-product-compare-pro.php')){
        
        $thpc_proActivate = 'pro-activate';

      }elseif(is_plugin_active('th-product-compare/th-product-compare.php') || !is_plugin_active('th-product-compare-pro/th-product-compare-pro.php')){
        
        $thpc_proActivate = 'pro-activate';

      }

    }else{
        
        $thpc_proActivate = '';

      }

      if(is_dir( WP_PLUGIN_DIR . '/th-advance-product-search-pro' )){

        if(!is_plugin_active('th-advance-product-search/th-advance-product-search.php') || !is_plugin_active('th-advance-product-search-pro/th-advance-product-search-pro.php')){
          
          $thaps_proActivate = 'pro-activate';
  
        }elseif(is_plugin_active('th-advance-product-search/th-advance-product-search.php') || !is_plugin_active('th-advance-product-search-pro/th-advance-product-search-pro.php')){
          
          $thaps_proActivate = 'pro-activate';
  
        }
  
      }else{
          
          $thaps_proActivate = '';
  
        }

        if(is_dir( WP_PLUGIN_DIR . '/th-all-in-one-woo-cart-pro' )){

          if(!is_plugin_active('th-all-in-one-woo-cart/th-all-in-one-woo-cart.php') || !is_plugin_active('th-all-in-one-woo-cart-pro/th-all-in-one-woo-cart-pro.php')){
            
            $thiowc_proActivate = 'pro-activate';
    
          }elseif(is_plugin_active('th-all-in-one-woo-cart/th-all-in-one-woo-cart.php') || !is_plugin_active('th-all-in-one-woo-cart-pro/th-all-in-one-woo-cart-pro.php')){
            
            $thiowc_proActivate = 'pro-activate';
    
          }
    
        }else{
            
            $thiowc_proActivate = '';
    
          }

          if(is_dir( WP_PLUGIN_DIR . '/th-variation-swatches-pro' )){

            if(!is_plugin_active('th-variation-swatches/th-variation-swatches.php') || !is_plugin_active('th-variation-swatches-pro/th-variation-swatches-pro.php')){
              
              $thvs_proActivate = 'pro-activate';
      
            }elseif(is_plugin_active('th-variation-swatches/th-variation-swatches.php') || !is_plugin_active('th-variation-swatches-pro/th-variation-swatches-pro.php')){
              
              $thvs_proActivate = 'pro-activate';
      
            }
      
          }else{
              
              $thvs_proActivate = '';
      
            }

            if(is_dir( WP_PLUGIN_DIR . '/lead-form-builder-pro' )){

              if(!is_plugin_active('lead-form-builder/lead-form-builder.php') || !is_plugin_active('lead-form-builder-pro/lead-form-builder-pro.php')){
                
                $thlf_proActivate = 'pro-activate';
        
              }elseif(is_plugin_active('lead-form-builder/lead-form-builder.php') || !is_plugin_active('lead-form-builder-pro/lead-form-builder-pro.php')){
                
                $thlf_proActivate = 'pro-activate';
        
              }
        
            }else{
                
                $thlf_proActivate = '';
        
              }

              if(is_dir( WP_PLUGIN_DIR . '/wp-popup-builder-pro' )){

                if(!is_plugin_active('wp-popup-builder/wp-popup-builder.php') || !is_plugin_active('wp-popup-builder-pro/wp-popup-builder-pro.php')){
                  
                  $thwpbl_proActivate = 'pro-activate';
          
                }elseif(is_plugin_active('wp-popup-builder/wp-popup-builder.php') || !is_plugin_active('wp-popup-builder-pro/wp-popup-builder-pro.php')){
                  
                  $thwpbl_proActivate = 'pro-activate';
          
                }
          
              }else{
                  
                  $thwpbl_proActivate = '';
          
                }

    
    wp_enqueue_style( 'blockline-settings-css', get_template_directory_uri() . '/theme-option/build/style-index.css', array(), '1.0.0', false );

    wp_enqueue_script( 'blockline-settings-js', get_template_directory_uri() . '/theme-option/build/index.js', array( 'wp-element', 'wp-i18n' ), '1.0', true );

    wp_localize_script(
        'blockline-settings-js',
        'wpapi',
        array(
          'homeUrl' => get_home_url(),
          'ajaxurl' => admin_url( 'admin-ajax.php' ),
          'wpnonce' => wp_create_nonce( "ajaxnonce" ),
          'blocklineUri' => trailingslashit(get_template_directory_uri()),
          'themeName' => wp_get_theme()->get( 'Name' ),
          'themeVersion' =>  wp_get_theme()->get( 'Version' ),
          'thiowc_status' => array(
             'thiowc_instl' => $thiowc_instl,
             'thiowc_active' => $thiowc_active,
             'thiowc_pro_active' => $thiowc_proActivate,
           ),
           'thaps_status' => array(
            'thaps_instl' => $thaps_instl,
            'thaps_active' => $thaps_active,
            'thaps_pro_active' => $thaps_proActivate,
          ),
          'thpc_status' => array(
            'thpc_instl' => $thpc_instl,
            'thpc_active' => $thpc_active,
            'thpc_pro_active' => $thpc_proActivate,
          ),
          'thvs_status' => array(
            'thvs_instl' => $thvs_instl,
            'thvs_active' => $thvs_active,
            'thvs_pro_active' => $thvs_proActivate,
          ),
          'thlf_status' => array(
            'thlf_instl' => $thlf_instl,
            'thlf_active' => $thlf_active,
            'thlf_pro_active' => $thlf_proActivate,
          ),
          'thwpbl_status' => array(
            'thwpbl_instl' => $thwpbl_instl,
            'thwpbl_active' => $thwpbl_active,
            'thwpbl_pro_active' => $thwpbl_proActivate,
          ),
          'thulb_status' => array(
            'thulb_instl' => $thulb_instl,
            'thulb_active' => $thulb_active,
          ),
          'woo_status' => array(
            'woo_instl' => $woo_instl,
            'woo_active' => $woo_active,
          ),
          'yithwlst_status' => array(
            'yithwlst_instl' => $yithwlst_instl,
            'yithwlst_active' => $yithwlst_active,
          ),
        )
    );
   }

   function blockline_settings_page() {
    ?>
        <div id="blockline-theme-setting-page" class="blockline-theme-setting-page">
        </div>
    <?php

   }
  
}

$obj = new Blockline_theme_option();

//theme option panel
require get_template_directory() . '/theme-option/plugin-data.php';