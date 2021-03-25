import Vue from 'vue'
import App from './components/App.vue';
import router from '../js/router/index';
import store from '../js/store/index';

 



 const app = new Vue({
    el: '#app',
    router,
    store,
    components: {
        App
    },
});
