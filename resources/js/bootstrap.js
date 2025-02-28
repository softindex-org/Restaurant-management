import _ from 'lodash';
window._ = _;

/**
 * Initialize jQuery and Bootstrap plugins
 * Now using ES modules but still exposing to window for compatibility
 */
import jQuery from 'jquery';
import Popper from 'popper.js';
import 'bootstrap';

window.$ = window.jQuery = jQuery;
window.Popper = Popper;

/**
 * Axios HTTP library configuration
 */
import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Laravel Echo configuration (uncomment if needed)
 */
// import Echo from 'laravel-echo';
// import Pusher from 'pusher-js';

// window.Pusher = Pusher;
// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
