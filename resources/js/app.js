/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.Vuetify = require('vuetify')
require('vuetify/dist/vuetify.min.css')
import VuePhoneNumberInput from 'vue-phone-number-input';
import 'vue-phone-number-input/dist/vue-phone-number-input.css';


Vue.use(Vuetify)
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('field', require('./components/field.vue').default);
Vue.component('roof', require('./components/roof.vue').default);
Vue.component('first_block', require('./components/first_block.vue').default);
Vue.component('register_form', require('./components/register_form.vue').default);
Vue.component('register_login', require('./components/register_login.vue').default);
Vue.component('register_email', require('./components/register_email.vue').default);
Vue.component('register_phone', require('./components/register_phone.vue').default);
Vue.component('csrf', require('./components/csrf.vue').default);
Vue.component('roof_show_form', require('./components/roof_show_form.vue').default);
Vue.component('register_password', require('./components/register_password.vue').default);
Vue.component('register_confirm', require('./components/register_confirm.vue').default);
Vue.component('register_text', require('./components/register_text.vue').default);
Vue.component('register_video', require('./components/register_video.vue').default);
Vue.component('register_calendar', require('./components/register_calendar.vue').default);
Vue.component('register_video_input', require('./components/register_video_input.vue').default);
Vue.component('reasons', require('./components/reasons.vue').default);
Vue.component('advertising_video', require('./components/advertising_video.vue').default);
Vue.component('footer_all', require('./components/footer_all.vue').default);
Vue.component('modal_login', require('./components/modal_login.vue').default);
Vue.component('reviews', require('./components/reviews.vue').default);
Vue.component('modal_video', require('./components/modal_video.vue').default);
Vue.component('show_video', require('./components/show_video.vue').default);
Vue.component('show_client_letter', require('./components/show_client_letter.vue').default);
Vue.component('vue-phone-number-input', require('./components/vue_phone_number_input.vue').default);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
