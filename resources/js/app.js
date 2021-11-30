/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue'
require('./bootstrap');

window.Vue = require('vue').default;

import App from './App.vue'; 
import VueAxios from 'axios';
import VueRouter from 'vue-router';
import { routes } from './routes';
import vuetify from './vuetify';

Vue.use(VueRouter, VueAxios, axios);
  
const router = new VueRouter({
    mode: 'history',
    routes: routes
});

const app = new Vue({
    el: '#app', 
     router: router,
     render: h => h(App),
     vuetify,
     store 
});
