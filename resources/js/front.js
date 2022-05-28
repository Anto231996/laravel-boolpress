window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require('vue');

import VueRouter from 'vue-router'
import App from "./views/App";

window.Vue.use(VueRouter);

import Posts from "./pages/Posts";
import Contact from "./pages/Contact";

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/posts',
            name: 'posts',
            component: Posts
        },

        {
            path: '/contact-us',
            name: 'contact',
            component: Contact
        }
    ]
});

const app = new Vue({
    el: '#root',
    render: h => h(App),
    router
});