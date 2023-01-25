import VueRouter from "vue-router";
import Vue from "vue";
Vue.use(VueRouter);

import AboutPage from "./pages/AboutPage";
import HomePage from "./pages/HomePage";
import ContactsPage from "./pages/ContactsPage";
import PersonalizePage from "./pages/PersonalizePage";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/home",
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
        {
            path: "/personalize",
            name: "personalize",
            component: PersonalizePage,
        },
    ],
});
export default router;
