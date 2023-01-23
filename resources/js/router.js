import VueRouter from "vue-router";
import Vue from "vue";
Vue.use(VueRouter);

import AboutPage from "./pages/AboutPage";
import HomePage from "./pages/HomePage";
import ContactsPage from "./pages/ContactsPage";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: HomePage,
        },
        {
            path: "/about",
            name: "about",
            component: AboutPage,
        },
        {
            path: "/contacts",
            name: "contacts",
            component: ContactsPage,
        },
    ],
});
export default router;
