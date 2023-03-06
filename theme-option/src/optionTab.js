import React, { useState, useEffect } from 'react';

const ThemeOptions = () => {
  const [settings, setSettings] = useState({});
  const [activeTab, setActiveTab] = useState('General');
  const handleTabClick = (tabName) => {
    setActiveTab(tabName);
  };

  return (
    <div className="theme-options">
      <div className="tabs">
        <button
          className={`tab ${activeTab === 'General' ? 'active' : ''}`}
          onClick={() => handleTabClick('General')}
        >
          General
        </button>
        <button
          className={`tab ${activeTab === 'Advanced' ? 'active' : ''}`}
          onClick={() => handleTabClick('Advanced')}
        >
          Advanced
        </button>
      </div>
      <div className="tab-content">
        {activeTab === 'General' && (
          <div className="general-tab">
            <h2>General Options</h2>
            <label htmlFor="site-title">Site Title:</label>
            <input
              type="text"
              id="site-title"
              value={settings['site-title']}
              onChange={(e) => setSettings({ ...settings, 'site-title': e.target.value })}
            />
          </div>
        )}
        {activeTab === 'Advanced' && (
          <div className="advanced-tab">
            <h2>Advanced Options</h2>
            <label htmlFor="custom-css">Custom CSS:</label>
            <textarea
              id="custom-css"
              value={settings['custom-css']}
              onChange={(e) => setSettings({ ...settings, 'custom-css': e.target.value })}
            />
          </div>
        )}
      </div>
    </div>
  );
};

export default ThemeOptions;
