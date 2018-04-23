
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
window.Popper = require('popper.js').default;
require('./bootstrap');


window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import VueRouter from 'vue-router';
import { routes } from './routes';
Vue.use(VueRouter);

const router = new VueRouter({
    routes,
    mode: 'history', // set the URL without # , vue-router
    scrollBehavior(to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition;
        }
        if (to.hash) {
            return { selector: to.hash };
        }
        return { x: 0, y: 0 };
    }
});

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('createRecipe', require('./components/CreateRecipe.vue'));

const app = new Vue({
    el: '#app',
    router,
});
