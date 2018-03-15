
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('../../../node_modules/chart.js');
require('../../../node_modules/jquery');
require('./bootstrap');
require('../plugins/chartjs/chart.bundle.min.js');
require('../plugins/jquery_visible/jquery.visible.min.js');
require('../plugins/jquery-mask/jquery.mask.min.js');
// require('../plugins/jvmaps');
require('../plugins/timelify/js/jquery.timelify.min.js');
require('../plugins/velocity/velocity.min.js');
// require('../plugins/velocity/velocity.ui.min.js');
// require('../plugins/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js');
require('./misc/holder.min.js');
require('./misc/ie10-viewport-bug-workaround.js');
window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});
