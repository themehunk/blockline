import React, { useState, useEffect } from 'react';
import {Fragment} from '@wordpress/element';
import { __ } from '@wordpress/i18n';
import Parser from 'html-react-parser';

function PluginData() {
  
  const [data, setData] = useState(null);

  const homeUrl = wpapi.homeUrl;

  const ajaxUrl = wpapi.ajaxurl;

  const Url = `${homeUrl}/wp-json/wp/v1/blockline`;
  
  useEffect(() => {
    fetch(`${Url}`)
      .then(response => response.json())
      .then(data => {
        setData(data);
      });  

  }, []);

  if (!data) {
    return <div>Loading...</div>;
  }

  function Button(props, actsts,  actcls) {

    if(props.inststatus == 'installed' ){
     
      if(props.actstatus == true){

        actsts = 'Activated';
        actcls = 'button btn activated disabled';
  
      }else{
  
        actsts = 'Active Now';
        actcls = 'button btn active-now';
  
      }

    }else{
      
       actsts = 'Install Now';
       actcls = 'button btn install-now'

    }
    
   
    const [message, setMessage] = useState(actsts);
    const [updateCls, setupdateCls] = useState(actcls);

    const checkActive = async (e) => {

      setupdateCls('button btn updating-message');

      const data = { 

        init: e.target.dataset.init,
        slug: e.target.dataset.slug,
        instl: e.target.dataset.inststatus, 
        nonce: wpapi.wpnonce, 
        
      };

      const response = await fetch(`${ajaxUrl}?action=blockline_install_plugin`, {
        method: 'POST',
        body: new URLSearchParams(data)
      });

      const plgdata = await response.text();

      try {

      console.log(plgdata);

       setMessage('Activated');
       setupdateCls('button btn activated disabled');

      } catch (error) {

        console.error('Error parsing JSON:', error);

      }

   }
   
    return (
      <button 
      onClick={checkActive} 
      data-label={message}
      data-init={props.init}
      data-slug={props.slug}
      data-instl={props.instl}
      className={updateCls}
      data-actstatus={props.actstatus}
      data-inststatus={props.inststatus}
      >
      {message}
      </button>
    );

  }

  function PluginList(props){
    return (
          <div className="th-option-row content-box">
             <div className="th-col">
              <img src={props.imgL}/>
            </div>
            <div className="th-col">
            <div className="title-plugin">
            <h4>{props.name}</h4>
            <a className="plugin-detail thickbox open-plugin-details-modal" href={props.linkP}>{props.dtlText}</a>
            <a className="doc-link th-go-pro" href={props.proLink}>{props.proLinkT}</a>
            </div>
            <Button init={props.init} slug={props.slug} actstatus={props.actstatus} inststatus={props.inststatus}>                
            </Button>
            </div>
          </div>
        
    );
  }

  const detailText = __( 'Details & Version', 'blockline' );

  let thpc_activeFile=''; 
  let thpc_activeSlug='';
  let thpc_activeName='';
  let thpc_activeDetail='';
  let thpc_activeDetailLink='';
  let thpc_activeProLink='';
  let thpc_activeProText='';

  if(wpapi.thpc_status.thpc_pro_active == 'pro-activate'){
  
    thpc_activeFile = data.th_product_compare.pro_plugin.init;
    thpc_activeSlug = data.th_product_compare.pro_plugin.slug;
    thpc_activeName = `${data.th_product_compare.name}<span>pro</span>`;
    thpc_activeDetail= __( 'Documentation', 'blockline' );
    thpc_activeDetailLink=data.th_product_compare.pro_plugin.docs;

  }else{

    thpc_activeFile = data.th_product_compare.active_filename;
    thpc_activeSlug = data.th_product_compare.slug;
    thpc_activeName = data.th_product_compare.name;
    thpc_activeDetail= __( 'Details & Version', 'blockline' );
    thpc_activeDetailLink= data.th_product_compare.detail_link;
    thpc_activeProLink= data.th_product_compare.pro_plugin.prolink;
    thpc_activeProText= __( 'Go Pro', 'blockline' );

  }

  let thaps_activeFile=''; 
  let thaps_activeSlug='';
  let thaps_activeName='';
  let thaps_activeDetail='';
  let thaps_activeDetailLink='';
  let thaps_activeProLink='';
  let thaps_activeProText='';

  if(wpapi.thaps_status.thaps_pro_active == 'pro-activate'){
  
    thaps_activeFile = data.th_advance_product_search.pro_plugin.init;
    thaps_activeSlug = data.th_advance_product_search.pro_plugin.slug;
    thaps_activeName = `${data.th_advance_product_search.name}<span>pro</span>`;
    thaps_activeDetail= __( 'Documentation', 'blockline' );
    thaps_activeDetailLink=data.th_advance_product_search.pro_plugin.docs;

  }else{

    thaps_activeFile = data.th_advance_product_search.active_filename;
    thaps_activeSlug = data.th_advance_product_search.slug;
    thaps_activeName = data.th_advance_product_search.name;
    thaps_activeDetail= __( 'Details & Version', 'blockline' );
    thaps_activeDetailLink= data.th_advance_product_search.detail_link;
    thaps_activeProLink= data.th_advance_product_search.pro_plugin.prolink;
    thaps_activeProText= __( 'Go Pro', 'blockline' );

  }

  let thiowc_activeFile=''; 
  let thiowc_activeSlug='';
  let thiowc_activeName='';
  let thiowc_activeDetail='';
  let thiowc_activeDetailLink='';
  let thiowc_activeProLink='';
  let thiowc_activeProText='';

  if(wpapi.thiowc_status.thiowc_pro_active == 'pro-activate'){
  
    thiowc_activeFile = data.th_all_in_one_woo_cart.pro_plugin.init;
    thiowc_activeSlug = data.th_all_in_one_woo_cart.pro_plugin.slug;
    thiowc_activeName = `${data.th_all_in_one_woo_cart.name}<span>pro</span>`;
    thiowc_activeDetail= __( 'Documentation', 'blockline' );
    thiowc_activeDetailLink=data.th_all_in_one_woo_cart.pro_plugin.docs;

  }else{

    thiowc_activeFile = data.th_all_in_one_woo_cart.active_filename;
    thiowc_activeSlug = data.th_all_in_one_woo_cart.slug;
    thiowc_activeName = data.th_all_in_one_woo_cart.name;
    thiowc_activeDetail= __( 'Details & Version', 'blockline' );
    thiowc_activeDetailLink= data.th_all_in_one_woo_cart.detail_link;
    thiowc_activeProLink= data.th_all_in_one_woo_cart.pro_plugin.prolink;
    thiowc_activeProText= __( 'Go Pro', 'blockline' );

  }

  let thvs_activeFile=''; 
  let thvs_activeSlug='';
  let thvs_activeName='';
  let thvs_activeDetail='';
  let thvs_activeDetailLink='';
  let thvs_activeProLink='';
  let thvs_activeProText='';

  if(wpapi.thvs_status.thvs_pro_active == 'pro-activate'){
  
    thvs_activeFile = data.th_variation_swatches.pro_plugin.init;
    thvs_activeSlug = data.th_variation_swatches.pro_plugin.slug;
    thvs_activeName = `${data.th_variation_swatches.name}<span>pro</span>`;
    thvs_activeDetail= __( 'Documentation', 'blockline' );
    thvs_activeDetailLink=data.th_variation_swatches.pro_plugin.docs;

  }else{

    thvs_activeFile = data.th_variation_swatches.active_filename;
    thvs_activeSlug = data.th_variation_swatches.slug;
    thvs_activeName = data.th_variation_swatches.name;
    thvs_activeDetail= __( 'Details & Version', 'blockline' );
    thvs_activeDetailLink= data.th_variation_swatches.detail_link;
    thvs_activeProLink= data.th_variation_swatches.pro_plugin.prolink;
    thvs_activeProText= __( 'Go Pro', 'blockline' );

  }

  let thlf_activeFile=''; 
  let thlf_activeSlug='';
  let thlf_activeName='';
  let thlf_activeDetail='';
  let thlf_activeDetailLink='';
  let thlf_activeProLink='';
  let thlf_activeProText='';

  if(wpapi.thlf_status.thlf_pro_active == 'pro-activate'){
  
    thlf_activeFile = data.lead_form_builder.pro_plugin.init;
    thlf_activeSlug = data.lead_form_builder.pro_plugin.slug;
    thlf_activeName = `${data.lead_form_builder.name}<span>pro</span>`;
    thlf_activeDetail= __( 'Documentation', 'blockline' );
    thlf_activeDetailLink=data.lead_form_builder.pro_plugin.docs;

  }else{

    thlf_activeFile = data.lead_form_builder.active_filename;
    thlf_activeSlug = data.lead_form_builder.slug;
    thlf_activeName = data.lead_form_builder.name;
    thlf_activeDetail= __( 'Details & Version', 'blockline' );
    thlf_activeDetailLink= data.lead_form_builder.detail_link;
    thlf_activeProLink= data.lead_form_builder.pro_plugin.prolink;
    thlf_activeProText= __( 'Go Pro', 'blockline' );

  }

  let thwpbl_activeFile=''; 
  let thwpbl_activeSlug='';
  let thwpbl_activeName='';
  let thwpbl_activeDetail='';
  let thwpbl_activeDetailLink='';
  let thwpbl_activeProLink='';
  let thwpbl_activeProText='';

  if(wpapi.thwpbl_status.thwpbl_pro_active == 'pro-activate'){
  
    thwpbl_activeFile = data.wp_popup_builder.pro_plugin.init;
    thwpbl_activeSlug = data.wp_popup_builder.pro_plugin.slug;
    thwpbl_activeName = `${data.wp_popup_builder.name}<span>pro</span>`;
    thwpbl_activeDetail= __( 'Documentation', 'blockline' );
    thwpbl_activeDetailLink=data.wp_popup_builder.pro_plugin.docs;

  }else{

    thwpbl_activeFile = data.wp_popup_builder.active_filename;
    thwpbl_activeSlug = data.wp_popup_builder.slug;
    thwpbl_activeName = data.wp_popup_builder.name;
    thwpbl_activeDetail= __( 'Details & Version', 'blockline' );
    thwpbl_activeDetailLink= data.wp_popup_builder.detail_link;
    thwpbl_activeProLink= data.wp_popup_builder.pro_plugin.prolink;
    thwpbl_activeProText= __( 'Go Pro', 'blockline' );

  }

  return (
    <Fragment>
      <div className="recommended-option-wrap">
      <div className="th-option-2-col">
      <PluginList init={thaps_activeFile} slug={thaps_activeSlug} actstatus={wpapi.thaps_status.thaps_active} inststatus={wpapi.thaps_status.thaps_instl} name={Parser(thaps_activeName)} imgL={data.th_advance_product_search.imgUrl} linkP={thaps_activeDetailLink} dtlText={thaps_activeDetail} proLink={thaps_activeProLink} proLinkT={thaps_activeProText}></PluginList>
      <PluginList init={thpc_activeFile} slug={thpc_activeSlug} actstatus={wpapi.thpc_status.thpc_active} inststatus={wpapi.thpc_status.thpc_instl} name={Parser(thpc_activeName)} imgL={data.th_product_compare.imgUrl} linkP={thpc_activeDetailLink} dtlText={thpc_activeDetail} proLink={thpc_activeProLink} proLinkT={thpc_activeProText}></PluginList>
      <PluginList init={thiowc_activeFile} slug={thiowc_activeSlug} actstatus={wpapi.thiowc_status.thiowc_active} inststatus={wpapi.thiowc_status.thiowc_instl} name={Parser(thiowc_activeName)} imgL={data.th_all_in_one_woo_cart.imgUrl} linkP={thiowc_activeDetailLink} dtlText={thiowc_activeDetail} proLink={thiowc_activeProLink} proLinkT={thiowc_activeProText}></PluginList>
      <PluginList init={thvs_activeFile} slug={thvs_activeSlug} actstatus={wpapi.thvs_status.thvs_active} inststatus={wpapi.thvs_status.thvs_instl} name={Parser(thvs_activeName)} imgL={data.th_variation_swatches.imgUrl} linkP={thvs_activeDetailLink} dtlText={thvs_activeDetail} proLink={thvs_activeProLink} proLinkT={thvs_activeProText}></PluginList>
      <PluginList init={thlf_activeFile} slug={thlf_activeSlug} actstatus={wpapi.thlf_status.thlf_active} inststatus={wpapi.thlf_status.thlf_instl} name={Parser(thlf_activeName)} imgL={data.lead_form_builder.imgUrl} linkP={thlf_activeDetailLink} dtlText={thlf_activeDetail} proLink={thlf_activeProLink} proLinkT={thlf_activeProText}></PluginList>
      <PluginList init={thwpbl_activeFile} slug={thwpbl_activeSlug} actstatus={wpapi.thwpbl_status.thwpbl_active} inststatus={wpapi.thwpbl_status.thwpbl_instl} name={Parser(thwpbl_activeName)} imgL={data.wp_popup_builder.imgUrl} linkP={thwpbl_activeDetailLink} dtlText={thwpbl_activeDetail} proLink={thwpbl_activeProLink} proLinkT={thwpbl_activeProText}></PluginList>
      <PluginList init={data.unlimited_blocks.active_filename} slug={data.unlimited_blocks.slug} actstatus={wpapi.thwpbl_status.thwpbl_active} inststatus={wpapi.thwpbl_status.thwpbl_instl} name={data.unlimited_blocks.name} imgL={data.unlimited_blocks.imgUrl} linkP={data.unlimited_blocks.detail_link} dtlText={detailText}></PluginList>
      <PluginList init={data.woocommerce.active_filename} slug={data.woocommerce.slug} actstatus={wpapi.woo_status.woo_active} inststatus={wpapi.woo_status.woo_instl} name={data.woocommerce.name} imgL={data.woocommerce.imgUrl} linkP={data.woocommerce.detail_link} dtlText={detailText}></PluginList>
      <PluginList init={data.yith_woocommerce_wishlist.active_filename} slug={data.yith_woocommerce_wishlist.slug} actstatus={wpapi.yithwlst_status.yithwlst_active} inststatus={wpapi.yithwlst_status.yithwlst_instl} name={data.yith_woocommerce_wishlist.name} imgL={data.yith_woocommerce_wishlist.imgUrl} linkP={data.yith_woocommerce_wishlist.detail_link} dtlText={detailText}></PluginList>
      </div>
      </div>
    </Fragment>
  );
  
}

export default PluginData;