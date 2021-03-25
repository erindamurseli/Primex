import Vuex from "vuex";
import Vue from "vue";
import user from '../store/user/index.js'

Vue.use(Vuex);

export default new Vuex.Store({
    namespaced: true,
    modules: {
        user
    }
})