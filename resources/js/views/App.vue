<template>
    <div>
        <HeaderTop />
        <HeaderBottom />
        <HomePage />
        <FooterTop />
        <FooterBottom />
    </div>
</template>

<script>
import HeaderTop from "../components/HeaderComponents/HeaderTop.vue";
import HeaderBottom from "../components/HeaderComponents/HeaderBottom.vue";
import HomePage from "../pages/HomePage.vue";
import FooterTop from "../components/FooterComponents/FooterTop.vue";
import FooterBottom from "../components/FooterComponents/FooterBottom.vue";
export default {
    name: "App",
    components: {
        HeaderTop,
        HeaderBottom,
        HomePage,
        FooterTop,
        FooterBottom,
    },
};
</script>

<style lang="scss">
@import "~bootstrap/scss/bootstrap";
@import "~@fortawesome/fontawesome-free/css/all.css";
body * {
   
}
</style>
