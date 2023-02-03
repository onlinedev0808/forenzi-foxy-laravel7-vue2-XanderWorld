<template>
    <div class="home">
        <div class="container">
            <div class="row py-5">
                <ShowBox />
                <!-- <h4 class="fw-bold py-2">Elenco formati disponibili</h4> -->
                <!-- <TableComponent /> -->
                <BannerNewsComponent />
            </div>
        </div>

        <ClassicLeft />
        <ClassicRight />
    </div>
</template>

<script>
import ShowBox from "../components/MainComponents/ShowBox.vue";
// import TableComponent from "../components/MainComponents/TableComponent.vue";
import BannerNewsComponent from "../components/MainComponents/BannerNewsComponent.vue";

export default {
    name: "UnOnda",
    components: {
        ShowBox,
        // TableComponent,
        BannerNewsComponent,
    },
};
</script>

<style></style>
