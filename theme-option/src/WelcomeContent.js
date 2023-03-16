import {Fragment} from '@wordpress/element';
import { __ } from '@wordpress/i18n';

const WelcomeContent = () => {
    let url_customize = `${wpapi.homeUrl}/wp-admin/site-editor.php`;
    return (
        <Fragment>
            <div className="option-content-wrp">
               <div className="content-box-full">
                <h3> {__( 'Welcome to Blockline', 'blockline' )}</h3>
                <p>{__( 'Create beautiful website using Blockline Full Site Editing Theme. It allows you to customize your site, including individual blocks, as much as you’d like with different colors, typography, layouts, and more.', 'blockline' )}
                
                </p>
                <a href={url_customize} class="content-link button">Start Customizing Blockline</a>
               </div>
            </div>
        </Fragment>
    );
};

export default WelcomeContent;