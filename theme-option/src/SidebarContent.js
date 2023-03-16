import {Fragment} from '@wordpress/element';
import { __ } from '@wordpress/i18n';

const SidebarContent = () => {
    return (
        <Fragment>
            <div className="sidebar-option-content-wrp">
               <div className="content-box">
                <h3> {wpapi.themeName}{ __( ' Premium Theme', 'blockline' )}</h3>
                <p>{__( 'You’re using the free version of the Blockline Theme with limited features and functionality. You can upgrade to Blockline Pro Theme for Advanced features, Custom Sections, and more useful options to customize your website easily.', 'blockline' )}</p>
                <a href="https://themehunk.com/templates/blockline-pro/" target="_blank" className="content-link button"> {__( 'Upgrade To Pro', 'blockline' )}</a>
               </div>
               <hr></hr>
               <div className="content-box">
                <h3> {__( 'Why Upgrade?', 'blockline' )}</h3>
                <p>{__( 'Upgrading to Blockline Premium you will unlock dozen of unique features that will take your website to the next level. See the Comparison table for more details.', 'blockline' )}</p>
                <a href="https://themehunk.com/templates/blockline-pro/" target="_blank" className="content-link button"> {__( 'Pro Demo', 'blockline' )}</a>
               </div>
               <hr></hr>
               <div className="content-box">
                <h3> {__( 'Leave us a review', 'blockline' )}</h3>
                <p>{__( 'We would love to hear your feedback.', 'blockline' )}</p>
                <a href="https://wordpress.org/support/theme/blockline/reviews/?filter=5" className="content-link"> {__( 'Submit review', 'blockline' )}</a>
               </div>
               <hr></hr>
               <div className="content-box">
                <h3> {__( 'Video Tutorials', 'blockline' )}</h3>
                <p>{__( 'Want a guide? We have video tutorials to walk you through getting started.', 'blockline' )}</p>
                <a href="https://www.youtube.com/watch?v=EbH5CRujnYQ" target="_blank" className="content-link"> {__( 'Watch Videos', 'blockline' )}</a>
               </div>
               <hr></hr>
               <div className="content-box">
                <h3> {__( 'Support', 'blockline' )}</h3>
                <p>{__( 'Have a question, we are happy to help! Get in touch with our support team.', 'blockline' )}</p>
                <a href="https://themehunk.com/contact-us/" target="_blank" className="content-link"> {__( 'Submit a Ticket', 'blockline' )}</a>
               </div>
            </div>
        </Fragment>
    );
};

export default SidebarContent;