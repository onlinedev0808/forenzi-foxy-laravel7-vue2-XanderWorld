<template>
    <div>
        <HeaderTop />
        <HeaderBottom />
        <MainComponent />
        <FooterTop />
        <FooterBottom />
    </div>
</template>

<script>
import HeaderTop from "../components/HeaderComponents/HeaderTop.vue";
import HeaderBottom from "../components/HeaderComponents/HeaderBottom.vue";
import MainComponent from "../components/MainComponent.vue";
import FooterTop from "../components/FooterComponents/FooterTop.vue";
import FooterBottom from "../components/FooterComponents/FooterBottom.vue";
export default {
    name: "App",
    components: {
        HeaderTop,
        HeaderBottom,
        MainComponent,
        FooterTop,
        FooterBottom,
    },
};
</script>

<style lang="scss" scoped></style>
