import VueRouter from 'vue-router'
import Vue from 'vue';

// import AboutUs from '../components/AboutUs.vue';
import Home from '../components/Home.vue';
import Login from '../components/Login.vue';

import Admin from '../components/Admin.vue';
import About from '../components/About.vue';
// import Contact from '../components/Contact.vue';
// import Login from '../components/Login.vue';

Vue.use(VueRouter)


export default new VueRouter({
    mode: 'history',
    routes: [
 
     {
            path: '/login',
            component: Login,
            name: 'login'
        },
        {
            path: '/about',
            component: About,
            name: 'about'
        },
        {
            path: '/home',
            component: Home,
            name: 'home'
        },
        {
            path: '/admin',
            component: Admin,
            name: 'admin'
        },
    ]
});