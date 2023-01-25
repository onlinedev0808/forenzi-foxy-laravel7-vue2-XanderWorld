<template>
    <div>
        <HeaderTop />
        <HeaderBottom />

        <router-view></router-view>

        <FooterTop />
        <FooterBottom />
    </div>
</template>

<script>
import HeaderTop from "../components/HeaderComponents/HeaderTop.vue";
import HeaderBottom from "../components/HeaderComponents/HeaderBottom.vue";

import HomePage from "../pages/HomePage.vue";
import PersonalizePage from "../pages/PersonalizePage.vue";
import CartPage from "../pages/CartPage.vue";
import CheckoutPage from "../pages/CheckoutPage.vue";

import FooterTop from "../components/FooterComponents/FooterTop.vue";
import FooterBottom from "../components/FooterComponents/FooterBottom.vue";
export default {
    name: "App",
    components: {
        HeaderTop,
        HeaderBottom,

        HomePage,
        PersonalizePage,
        CartPage,
        CheckoutPage,

        FooterTop,
        FooterBottom,
    },
};
</script>

<style lang="scss">
@import "~bootstrap/scss/bootstrap";
@import "~@fortawesome/fontawesome-free/css/all.css";
body * {
    img {
        transition: 0.5s;
        &:hover {
            transform: translateY(-2px);
        }
    }
}
</style>
