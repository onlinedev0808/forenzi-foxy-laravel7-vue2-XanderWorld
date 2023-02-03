<template>
    <div class="home">
        <div class="container">
            <div class="row">
                <ShowBox2 />
                <!-- <h4 class="fw-bold py-2">Elenco formati disponibili</h4> -->
            </div>
        </div>
        <!-- <ClassicRight /> -->
        <div class="container">
            <div class="row">
                <BannerNewsComponent />
            </div>
        </div>
    </div>
</template>

<script>
import ShowBox2 from "../components/MainComponents/ShowBox2.vue";
import BannerNewsComponent from "../components/MainComponents/BannerNewsComponent.vue";
import ClassicRight from "../components/MainComponents/ClassicRight.vue";

export default {
    name: "UnOnda",
    components: {
        ShowBox2,
        BannerNewsComponent,
        ClassicRight,
    },
};
</script>

<style lang="scss" scoped></style>
