import VueRouter from "vue-router";
import Vue from "vue";
Vue.use(VueRouter);

import HomePage from "./pages/HomePage";
import PersonalizePage from "./pages/PersonalizePage";
import CartPage from "./pages/CartPage";
import CheckoutPage from "./pages/CheckoutPage";
import ShowVonePage from "./pages/ShowVonePage";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
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
        {
            path: "/showvone",
            name: "showvone",
            component: ShowVonePage,
        },
    ],
});
export default router;
