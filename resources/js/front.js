import Vue from "vue";
import App from "./views/App";
import VueRouter from "vue-router";
import router from "./router.js";

window.Vue = require("vue");
Vue.use(VueRouter);


// Vue.component(
//     "example-component",
//     require("./components/ExampleComponent.vue").default
// );

const app = new Vue({
    el: "#app",
    render: (h) => h(App), //! mostriamo app all'avvio di vue
    router  
});
