import React, { useState, useEffect } from 'react';
import { __ } from '@wordpress/i18n';
import WelcomeContent from './WelcomeContent';
import HelpContent from './HelpContent';
import RecommendedContent from './RecommendedContent';
import FeeProContent from './FeeProContent';

const TabContent = (props) => {

    const [activeTab, setActiveTab] = useState('welcome');
    const handleTabClick = (tabName) => {
      setActiveTab(tabName);
    };
  return (
    <div className="blockline-options-tab">
    <div className="blockline-tabs">
        <button
          className={`tab welcome ${activeTab === 'welcome' ? 'active' : ''}`}
          onClick={() => handleTabClick('welcome')}
        >
         { __( 'Welcome', 'blockline' )}
          
        </button>
        <button
          className={`tab recommended ${activeTab === 'recommended' ? 'active' : ''}`}
          onClick={() => handleTabClick('recommended')}
        >
          { __( 'Recommended Plugin', 'blockline' )}
        </button>
       
        <button
          className={`tab freevspro ${activeTab === 'freevspro' ? 'active' : ''}`}
          onClick={() => handleTabClick('freevspro')}
        >
          { __( 'Free Vs Pro', 'blockline' )}
        </button>
        <button
          className={`tab help ${activeTab === 'help' ? 'active' : ''}`}
          onClick={() => handleTabClick('help')}
        >
          { __( 'Help', 'blockline' )}
        </button>
      </div>
      <div className="tab-content">
        {activeTab === 'welcome' && (
          <div className="welcome-tab">
             <WelcomeContent/>
          </div>
        )}
        {activeTab === 'recommended' && (
          <div className="recommended-tab">
            <RecommendedContent/>
          </div>
        )}
       
        {activeTab === 'freevspro' && (
          <div className="freevspro-tab">
            <FeeProContent/>
          </div>
        )}
        {activeTab === 'help' && (
          <div className="help-tab">
           <HelpContent/>
            
          </div>
        )}
      </div>
    </div>
  );
};

export default TabContent;