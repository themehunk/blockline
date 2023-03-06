import {Fragment} from '@wordpress/element';
import OptionHeader from './OptionHeader';
import OptionContent from './OptionContent';

const OptionPanel = () => {
  return (
    <Fragment>
      <OptionHeader />
      <OptionContent />
    </Fragment>
  );
};

export default OptionPanel;