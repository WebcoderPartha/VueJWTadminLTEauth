
require('./bootstrap');

window.Vue = require('vue').default;

// Reload
window.Reload = new Vue();

// Import Vue Router
import VueRouter from "vue-router";
Vue.use(VueRouter);

// AUTHENTICATE USER CLASS IMPORT AREA
import User from './helpers/User';
window.User = User

// NOTY - NOTIFICATION IMPORT AREA
import Notification from "./helpers/Notification";
window.Notification = Notification;

// Import Routes
import {routes} from './routes/routes';


const router = new VueRouter({
    routes,
    mode: 'history'
});

// Global Components
import Navbar from "./components/Bar/Navbar";
import FooterBar from "./components/Bar/FooterBar";
import TopBar from "./components/Bar/TopBar";

const app = new Vue({
    el: '#app',
    router,
    components: {
        Navbar,
        FooterBar,
        TopBar
    }
});
