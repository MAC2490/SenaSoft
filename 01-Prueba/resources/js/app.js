require('./bootstrap');

import Vue from 'vue'

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('admin-estudiantes', require('./components/Estudiantes.vue').default)

const app = new Vue({
    el: '#app',
});
