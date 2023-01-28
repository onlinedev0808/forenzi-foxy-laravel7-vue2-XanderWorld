import Vue from "vue";
import App from "./views/App";
import VueRouter from "vue-router";
import router from "./router.js";

require('./app');

Vue.config.productionTip = false;
Vue.use(VueRouter);

const app = new Vue({
    el: "#app",
    render: (h) => h(App),
    router,
});
