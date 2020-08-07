/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');
import DateFilter from './filters/date'

Vue.filter('dateTag', DateFilter);

Vue.component('product-card', require('./components/Productcard.vue').default);
Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/** facturas **/
Vue.component('facturas', require('./components/pedidos/Pedidos.vue').default);

const app = new Vue({
    el: '#app',
});
