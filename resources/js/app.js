/**
 * Load project dependencies and configure Vue
 */
import './bootstrap';
import Vue from 'vue';

// Import global styles (handled by Vite)
import '../css/app.scss';

/**
 * Auto-register Vue components
 * Vite alternative to require.context
 */
const componentFiles = import.meta.glob('./components/**/*.vue', { eager: true });

Object.entries(componentFiles).forEach(([path, module]) => {
  const componentName = path
    .split('/')
    .pop()
    .replace(/\.\w+$/, '');

  Vue.component(componentName, module.default);
});

/**
 * Manually register specific components if needed
 * (Alternative to the auto-registration above)
 */
// import ExampleComponent from './components/ExampleComponent.vue';
// Vue.component('example-component', ExampleComponent);

/**
 * Create Vue application instance
 */
new Vue({
  el: '#app',
  // Add render function or components here
});
