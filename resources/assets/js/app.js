
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('../../../node_modules/waypoints/lib/jquery.waypoints.js');
require('../../../node_modules/@fancyapps/fancybox/dist/jquery.fancybox.js');
require('../../../node_modules/slider-pro/dist/js/jquery.sliderPro.min.js');
require('../../../node_modules/instafeed/instafeed.min.js');
require('../../../node_modules/masonry-layout/masonry.js');
require('../../../node_modules/imagesloaded/imagesloaded.pkgd.min.js');
require('./_main.js');

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
