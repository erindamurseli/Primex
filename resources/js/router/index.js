import VueRouter from 'vue-router'
import Vue from 'vue';


import Home from '../components/Home.vue';
import Login from '../components/Login.vue';

import Admin from '../components/Admin.vue';
import About from '../components/About.vue';
import Contact from '../components/Contact.vue';
import Content from '../components/Admin/Content.vue';
import AddContent from '../components/Admin/AddContent.vue';
import EditContent from '../components/Admin/EditContent.vue';
import AdminHome from '../components/Admin/AdminHome.vue';
import AdminAbout from '../components/Admin/AdminAbout.vue';
import AdminContact from '../components/Admin/AdminContact.vue';
import Card from '../components/Admin/Card.vue';
import EditAbout from '../components/Admin/EditAbout.vue';
import EditCard from '../components/Admin/EditCard.vue';
import EditContact from '../components/Admin/EditContact.vue';
import Cardd from '../components/Admin/Cardd.vue';
import EditCardd from '../components/Admin/EditCardd.vue';
import VShowSlide from 'v-show-slide'
Vue.use(VShowSlide)
Vue.use(VueRouter)


export default new VueRouter({
    mode: 'history',
    routes: [
 
     {
            path: '/login',
            component: Login,
            name: 'login'
        },
        // {
        //     path: '/test',
        //     component: About,
        //     name: 'test'
        // },
        // {
        //     path: '/about',
        //     component: About,
        //     name: 'about'
        // },
        {
            path: '/home',
            component: Home,
            name: 'home'
        },
        // {
        //     path: '/a1',
          
        //     name: 'a1'
        // },

      


        {
            path: '/admin',
            component: Admin,
            name: 'admin'
            
        },
        {
            path: '/content',
            name: 'content',
            component: Content,
            meta: {
                requiresAuth: true
            }
        },
        {
            path: '/editcontent/:id',
            name: 'editcontent',
            component: EditContent,

        },
        {
            path: '/cardd',
            name: 'cardd',
            component: Cardd,
            meta: {
                requiresAuth: true
            }
        },
        {
            path: '/editcardd/:id',
            name: 'editcardd',
            component: EditCardd,

        },
        {
            path: '/contact',
            name: 'contact',
            component: Contact,
            meta: {
                requiresAuth: true
            }
        },
        {
            path: '/editcontact/:id',
            name: 'editcontact',
            component: EditContact,

        },
        {
            path: '/card',
            name: 'card',
            component: Card,
            meta: {
                requiresAuth: true
            }
        },
        {
            path: '/editcard/:id',
            name: 'editcard',
            component: EditCard,
            meta: {
                requiresAuth: true
            }
        },
        {
            path: '/about',
            name: 'about',
            component: About,
            meta: {
                requiresAuth: true
            }
        },
        {
            path: '/editabout/:id',
            name: 'editabout',
            component: EditAbout,
            meta: {
                requiresAuth: true
            }
        },
        {
            path: '/addcontent',
            name: 'addcontent',
            component: AddContent,
            meta: {
                requiresAuth: true
            }
        },
        {
            path: '/adminhome',
            name: 'adminhome',
            component: AdminHome,
            meta: {
                requiresAuth: true
            }
        },
        {
            path: '/adminabout',
            name: 'adminabout',
            component: AdminAbout,
            meta: {
                requiresAuth: true
            }
        },
        {
            path: '/admincontact',
            name: 'adminhome',
            component: AdminContact,
            meta: {
                requiresAuth: true
            }
        },
    
    ]
});