window.Vue = require("vue");
import App from "./views/App";

// Vue.component(
//     "example-component",
//     require("./components/ExampleComponent.vue").default
// );

const app = new Vue({
    el: "#app",
    render: (h) => h(App), //! mostriamo app all'avvio di vue
});
