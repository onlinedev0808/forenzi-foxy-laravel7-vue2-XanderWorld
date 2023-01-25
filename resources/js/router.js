import VueRouter from "vue-router";
import Vue from "vue";
Vue.use(VueRouter);

import HomePage from "./pages/HomePage";
import PersonalizePage from "./pages/PersonalizePage";
import CartPage from "./pages/CartPage";
import CheckoutPage from "./pages/CheckoutPage";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/home",
            name: "home",
            component: HomePage,
        },
        {
            path: "/personalize",
            name: "personalize",
            component: PersonalizePage,
        },
        {
            path: "/cart",
            name: "cart",
            component: CartPage,
        },
        {
            path: "/checkout",
            name: "checkout",
            component: CheckoutPage,
        },
    ],
});
export default router;
