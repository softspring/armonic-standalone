// any CSS you import will output into a single css file (admin.css in this case)
import './styles/admin.scss';

// import bootstrap 5 js for CMS
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

// add cms and other bundle scripts
import '@softspring/cms-bundle/scripts/admin-cms';
import '@softspring/media-bundle/scripts/media-type';
import '@softspring/cms-module-collection/modules';
import '@softspring/polymorphic-form-type/scripts/polymorphic-form-type';

