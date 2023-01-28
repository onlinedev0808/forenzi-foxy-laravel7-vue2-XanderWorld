import VueRouter from "vue-router";
import Vue from "vue";
Vue.use(VueRouter);

import HomePage from "./pages/HomePage";
import PersonalizePage from "./pages/PersonalizePage";
import CartPage from "./pages/CartPage";
import CheckoutPage from "./pages/CheckoutPage";
import LoginPage from "./pages/LoginPage.vue";
import RegisterPage from "./pages/RegisterPage.vue";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/home",
            name: "home",
            component: HomePage,
        },
        {
            path: "/login",
            name: "login",
            component: LoginPage,
        },
        {
            path: "/register",
            name: "register",
            component: RegisterPage,
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
