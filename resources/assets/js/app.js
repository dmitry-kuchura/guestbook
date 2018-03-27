import vuejs_paginate from "vuejs-paginate";
import Vue from "vue";
import axios from "axios";

window.axios = axios;

Vue.component('signatures', require('../components/Signatures.vue'));
Vue.component('signature-form', require('../components/SignatureForm.vue'));
Vue.component('paginate', vuejs_paginate);

const app = new Vue({
    el: '#app'
});
