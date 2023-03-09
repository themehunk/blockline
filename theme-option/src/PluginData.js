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
    let proDiv;
    let pSlug;
    let pInit;
    let pStatus;
    

    const renderData = data.map((item) => {

    const renderDataa = Object.keys(item).map((items) => {

      if(item[items].status_proinstall == 'install-now'){

        nameTxt = <h4>{item[items].name}</h4>
        proDiv = <a className="doc-link th-go-pro" href={item[items].link}> {__( 'Go Pro', 'blockline' )}</a>;
        pSlug  = item[items].slug;
        pInit  = `${item[items].slug}/${item[items].slug}.php`;
        pStatus = item[items].status_active;
    
        }else{
        
        nameTxt = <h4>{item[items].name}<span>{__( 'Pro', 'blockline' )}</span></h4>
        proDiv='';
        pSlug  = `${item[items].slug}-pro`;
        pInit  = `${item[items].slug}-pro/${item[items].slug}-pro.php`;
        pStatus = item[items].status_proactive;

        }

        return (
          <div className="th-option-row content-box">
             <div className="th-col">
              <img src={item[items].imgUrl}/>
            </div>
            <div className="th-col">
            <div className="title-plugin">
                {nameTxt}
                {proDiv}
            </div>
            <Button data-instl={item[items].status_install}  init={pInit} slug={pSlug} actstatus={pStatus} inststatus={item[items].status_install}>                
            </Button>
            </div>
          </div>
      );

      });

      return renderDataa;

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