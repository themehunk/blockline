import {Fragment} from '@wordpress/element';
import { __ } from '@wordpress/i18n';

const SidebarContent = () => {
    return (
        <Fragment>
            <div className="sidebar-option-content-wrp">
               <div className="content-box">
                <h3> {__( 'Big Store Premium Theme', 'blockline' )}</h3>
                <p>{__( 'If you like the free version of this theme, you will LOVE the full version of Big Store which includes numerous Advanced features, Custom Sections, Section Ordering and more useful options to customize your website.', 'blockline' )}</p>
                <a href="#" className="content-link button"> {__( 'Upgrade To Pro', 'blockline' )}</a>
               </div>
               <hr></hr>
               <div className="content-box">
                <h3> {__( 'Why Upgrade?', 'blockline' )}</h3>
                <p>{__( 'Upgrading to Big Store Premium you will unlock dozen of unique features that will take your website to the next level. See the Comparison table for more details.', 'blockline' )}</p>
                <a href="#" className="content-link button"> {__( 'Pro Demo', 'blockline' )}</a>
               </div>
               <hr></hr>
               <div className="content-box">
                <h3> {__( 'Leave us a review', 'blockline' )}</h3>
                <p>{__( 'We would love to hear your feedback.', 'blockline' )}</p>
                <a href="#" className="content-link"> {__( 'Submit review', 'blockline' )}</a>
               </div>
               <hr></hr>
               <div className="content-box">
                <h3> {__( 'Video Tutorials', 'blockline' )}</h3>
                <p>{__( 'Want a guide? We have video tutorials to walk you through getting started.', 'blockline' )}</p>
                <a href="#" className="content-link"> {__( 'Watch Videos', 'blockline' )}</a>
               </div>
               <hr></hr>
               <div className="content-box">
                <h3> {__( 'Support', 'blockline' )}</h3>
                <p>{__( 'Have a question, we are happy to help! Get in touch with our support team.', 'blockline' )}</p>
                <a href="#" className="content-link"> {__( 'Submit a Ticket', 'blockline' )}</a>
               </div>
            </div>
        </Fragment>
    );
};

export default SidebarContent;