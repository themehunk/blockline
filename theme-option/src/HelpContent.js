import {Fragment} from '@wordpress/element';
import { __ } from '@wordpress/i18n';

const HelpContent = () => {
    return (
        <Fragment>
            <div className="option-content-wrp">
               <div className="content-box">
                <h3> {__( 'Contact Support', 'blockline' )}</h3>
                <p>{__( 'If you need any help you can contact to our support team', 'blockline' )}</p>
                <a href="https://themehunk.com/contact-us/" target="_blank" className="content-link "> {__( 'Need help...', 'blockline' )}</a>
               </div>
               <div className="content-box">
                <h3> {__( 'Documentation', 'blockline' )}</h3>
                <p>{__( 'Our WordPress Theme is well documented, you can go with our documentation and learn to customize Big Store.', 'blockline' )}</p>
                
                <a href="https://themehunk.com/docs/" target="_blank" className="content-link "> {__( 'Go to Doc', 'blockline' )}</a>
               </div>
               <div className="content-box">
                <h3> {__( 'Create a child theme', 'blockline' )}</h3>
                <p>{__( 'Before modifying theme core files. You should create child theme to make those changes update proof. Please follow this link to create child theme.', 'blockline' )}</p>
                <a href="https://themehunk.com/child-theme/" target="_blank" className="content-link "> {__( 'Create Child Theme', 'blockline' )}</a>
               </div>
               <div className="content-box">
                <h3> {__( 'Join Group', 'blockline' )}</h3>
                <p>{__( 'Join the community of friendly ThemeHunk users. Get connected, share opinion, ask questions and help each other !', 'blockline' )}</p>
                <a href="https://linktr.ee/themehunk" target="_blank" className="content-link button"> {__( 'Join Our Social Group', 'blockline' )}</a>
               </div>
            </div>
        </Fragment>
    );
};

export default HelpContent;