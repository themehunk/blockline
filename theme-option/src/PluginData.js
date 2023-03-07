import React, { useState, useEffect } from 'react';
import { __ } from '@wordpress/i18n';

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

  function Button(props, actsts, actcls) {

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

    const { data } = props;
    
    let nameTxt;
    let detailText;
    let proDiv;
    let pSlug;
    let pInit;
    let pStatus;
    

    const renderData = Object.keys(data).map((item) => {

    if(data[item].pro_plugin == false){
    nameTxt = <h4>{data[item].name}</h4>
    detailText = <a className="plugin-detail thickbox open-plugin-details-modal" href={data[item].detail_link}>{__( 'Details & Version', 'blockline' )}</a>;  
    proDiv = <a className="doc-link th-go-pro" href={data[item].prolink}> {__( 'Go Pro', 'blockline' )}</a>;
    pSlug  = data[item].slug;
    pInit  = data[item].active_filename;
    pStatus = data[item].status_active;
    }else{
    nameTxt = <h4>{data[item].name}<span>{__( 'Pro', 'blockline' )}</span></h4>
    detailText = <a className="plugin-detail thickbox open-plugin-details-modal" href={data[item].pro_plugin.docs}>{__( 'Documentation', 'blockline' )}</a>;    
    proDiv='';
    pSlug = data[item].pro_plugin.slug;
    pInit  = data[item].pro_plugin.init;
    pStatus = data[item].pro_plugin.pro_status_active;
    }

      return (
          <div className="th-option-row content-box">
             <div className="th-col">
              <img src={data[item].imgUrl}/>
            </div>
            <div className="th-col">
            <div className="title-plugin">
                {nameTxt}
                {detailText}
                {proDiv}
            </div>
            <Button data-instl={data[item].status_install}  init={pInit} slug={pSlug} actstatus={pStatus} inststatus={data[item].status_install}>                
            </Button>
            </div>
          </div>
      );

    });
  
    return renderData;

  }

  return (
 
      <div className="recommended-option-wrap">
      <div className="th-option-2-col">
      <PluginList data={data}></PluginList>
      </div>
      </div>

  );

}

export default PluginData;