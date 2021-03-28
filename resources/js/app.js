/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Lang from 'lang.js';
import messages from '../assets/js/ll_messages';

const default_locale = window.default_locale;
const fallback_locale = window.fallback_locale;
Vue.prototype.trans = new Lang( {
    messages,
    locale: default_locale,
    fallback: fallback_locale
    });
    
import { Form, HasError, AlertError } from 'vform';
window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
//Including sweet alert
import swal from 'sweetalert2'
window.swal = swal;

const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});
window.toast = toast;

//#####################################admin componnents ##############################
//exhibitors components
Vue.component('exhibit-component', require('./components/ExhibitComponent.vue').default);
Vue.component('exhibitors-component', require('./components/ExhibitorsComponent.vue').default);
Vue.component('active-exhibitors-component', require('./components/ActiveExhibitorsComponent.vue').default);
Vue.component('inactive-exhibitors-component', require('./components/InactiveExhibitorsComponent.vue').default);
//sponsors components

Vue.component('sponsors-component', require('./components/SponsorsComponent.vue').default);
Vue.component('inactive-sponsors-component', require('./components/InactiveSponsorsComponent.vue').default);
Vue.component('active-sponsors-component', require('./components/ActiveSponsorsComponent.vue').default);
//messages component
Vue.component('messages-component', require('./components/MessagesComponent.vue').default);
//post component
Vue.component('post-component', require('./components/PostComponent.vue').default);
Vue.component('posts-component', require('./components/PostsComponent.vue').default);

//###################################### front components #############################3
Vue.component('sponsor-component', require('./components/SponsorComponent.vue').default);
Vue.component('message-component', require('./components/MessageComponent.vue').default);
Vue.component('registiration-component', require('./components/RegistrationComponent.vue').default);
Vue.component('digital-registiration-component', require('./components/DigitalRegistrationComponent.vue').default);

const app = new Vue({
    el: '#app',
});