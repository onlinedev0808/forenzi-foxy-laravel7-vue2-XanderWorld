import Vue from "vue";
import Vuex from "vuex";
import App from "./views/App";
import VueRouter from "vue-router";
import router from "./router.js";

require('./app');

Vue.config.productionTip = false;
Vue.use(VueRouter);
Vue.use(Vuex)

const store = new Vuex.Store({
  state: {
    isAuth: false,
    name: "REGISTRATI",
    productCount: 0,
    total: 0.00
  },
  mutations: {
    updateUser(state, user) {
      state.isAuth = user.isAuth;
      state.name = user.name;
    },
    updateCart(state, info) {
        state.productCount = info.productCount;
        state.total = info.total;
    }
  },
  actions: {

  },
  modules: {},
});

const app = new Vue({
    el: "#app",
    render: (h) => h(App),
    router,
    store
});
