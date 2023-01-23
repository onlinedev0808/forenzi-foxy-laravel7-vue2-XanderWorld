<template>
    <div class="home">
        <div class="container">
            <div class="row">
                <NavBoxesComponent
                    v-for="category in categories"
                    :key="category.id"
                    :category="category"
                />

                <JumboComponent />
                <BannerNewsComponent />
                <BannerTextComponent
                    v-for="(element, index) in txtbanners"
                    :key="index"
                    :title="element.title"
                    :description="element.description"
                    :descriptionBold="element.descriptionBold"
                />
                <BoxesComponent />
                <HolidayComponent />
            </div>
        </div>

        <ClassicLeft
            v-for="(element, index) in txtleft"
            :key="index"
            :title="element.title"
            :description="element.description"
            :subdescription="element.subdescription"
            :notes="element.notes"
            :button="element.button"
        />
        <ClassicRight />
    </div>
</template>

<script>
import axios from "axios";
import NavBoxesComponent from "../components/MainComponents/NavBoxesComponent.vue";

import BannerNewsComponent from "../components/MainComponents/BannerNewsComponent.vue";
import BannerTextComponent from "../components/MainComponents/BannerTextComponent.vue";
import ClassicLeft from "../components/MainComponents/ClassicLeft.vue";
import ClassicRight from "../components/MainComponents/ClassicRight.vue";

export default {
    name: "HomeComponent",
    components: {
        NavBoxesComponent,
        BannerNewsComponent,
        BannerTextComponent,
        ClassicLeft,
        ClassicRight,
    },
    data() {
        return {
            categories: [],
            currentPage: 1,
            lastPage: null,
            loading: false,
            txtbanners: [
                {
                    title: "FoxyBox - Scatole di tutti i tipi consegnate in tempi record",
                    description:
                        "Scegli tra le nostre linee di prodotti in pronta consegna oppure le scatole con misure personalizzate. Acquista ora in modo facile, veloce e sicuro!",
                    descriptionBold: "",
                },
            ],
            txtleft: [
                {
                    title: "Scegli FoxyBox, qualità dei prodotti, consegna rapida e assistenza dedicata",
                    description:
                        "Semplifica il tuo rifornimento di scatole, sono tutte in pronta consegna e le acquisti in pochi e semplici click!",
                    subdescription: "In più, la spedizione è sempre gratuita!",
                    button: "",
                },
            ],
        };
    },
    methods: {
        getCategories(pageCategories = 1) {
            axios
                .get("/api/categories", {
                    page: pageCategories,
                })
                .then((response) => {
                    console.log("categories");
                    console.log(response.data.results.data);
                    this.categories = response.data.results.data;
                    this.currentPage = response.data.results.currentPage;
                    this.lastPage = response.data.results.lastPage;
                })
                .catch((error) => {
                    console.warn(error.message);
                });
        },
    },
    created() {
        this.getCategories();
    },
};
</script>

<style lang="scss" scoped></style>
