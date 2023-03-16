import {Fragment} from '@wordpress/element';
import { __ } from '@wordpress/i18n';


const FeeProContent = () => {
    return (
        <Fragment>
            <div className="freepro-content-wrp">
               <div className="freepro-content-box">
                <ul>
                <li className="freepro-tbl-heading">
                        <span>General Features</span>
                        <span>PRO</span>
                        <span>FREE</span>
                    </li>
                    <li>
                        <span>Easy Setup</span>
                        <span className="dashicons dashicons-yes"></span>
                        <span className="dashicons dashicons-yes"></span>
                    </li>
                    <li>
                        <span>Responsive Design</span>
                        <span className="dashicons dashicons-yes"></span>
                        <span className="dashicons dashicons-yes"></span>
                    </li>
                    <li>
                        <span>Speed Optimization</span>
                        <span className="dashicons dashicons-yes"></span>
                        <span className="dashicons dashicons-yes"></span>
                    </li>
                    <li>
                        <span>10+ Theme Color Styles</span>
                        <span className="dashicons dashicons-yes"></span>
                        <span className="dashicons dashicons-no-alt"></span>
                    </li>
                    <li>
                        <span>Multiple Advance Block Patterns</span>
                        <span className="dashicons dashicons-yes"></span>
                        <span className="dashicons dashicons-no-alt"></span>
                    </li>
                    <li>
                        <span>7 Header Pattern Layouts</span>
                        <span className="dashicons dashicons-yes"></span>
                        <span className="dashicons dashicons-no-alt"></span>
                    </li>
                    <li>
                        <span>9 Footer Pattern Layouts</span>
                        <span className="dashicons dashicons-yes"></span>
                        <span className="dashicons dashicons-no-alt"></span>
                    </li>
                    <li>
                        <span>Unlimited Blocks Plugin 19+ </span>
                        <span className="dashicons dashicons-yes"></span>
                        <span className="dashicons dashicons-yes"></span>
                    </li>
                </ul>
                </div> 
            </div>
        </Fragment>
    );
};

export default FeeProContent;