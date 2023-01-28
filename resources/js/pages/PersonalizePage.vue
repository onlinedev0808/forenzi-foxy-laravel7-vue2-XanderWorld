<template>
    <div>
        <div class="d-flex flex-column align-items-center p-2">
            <h1 class="display-5 text-center font-weight-bold my-5">
                CONFIGURA LA TUA SCATOLA SU MISURA IN MENO DI UN MINUTO!
            </h1>
            <hr class="w-10" />
        </div>
        <div class="bg-gray">
            <div class="container-lg">
                <div class="row">
                    <div>
                        <div
                            class="create-images d-flex flex-wrap justify-content-center"
                        >
                            <img
                                v-for="(image, index) in images"
                                :key="index"
                                class="img-fluid col-12 col-md-4 col-lg-3"
                                :alt="image.title"
                                :src="image.src"
                            />
                        </div>
                    </div>

                    <div>
                        <div class="row flex-wrap justify-content-center">
                            <div
                                class="steps col-xl-7 col-lg-* col-md-* col-sm-*"
                            >
                                <!-- Left side content goes here -->
                                <StepFirstDynamic
                                    @inputValuesChanged="setInputValues"
                                    class="step"
                                    v-for="(element, index) in boxone"
                                    :key="index"
                                    :step="element.step"
                                    :title="element.title"
                                    :letter-one="element.letterOne"
                                    :letter-two="element.letterTwo"
                                    :letter-three="element.letterThree"
                                    :txt-one="element.txtOne"
                                    :txt-two="element.txtTwo"
                                    :txt-three="element.txtThree"
                                    :txt-banner="element.txtBanner"
                                    :img="element.img"
                                />
                                <StepSecondDynamic
                                    v-for="(element, index) in boxtwo"
                                    :key="index"
                                    :step="element.step"
                                    :title="element.title"
                                    :title-one="element.titleOne"
                                    :title-two="element.titleTwo"
                                    :txt-one="element.txtOne"
                                    :txt-two="element.txtTwo"
                                    :img-one="element.imgOne"
                                    :img-two="element.imgTwo"
                                />
                                <StepThirdDynamic />
                            </div>
                            <SummaryPersonalize
                                :inputH="inputH"
                                :inputP="inputP"
                                :inputL="inputL"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import StepFirstDynamic from "../components/MainComponents/StepFirstDynamic.vue";
import StepSecondDynamic from "../components/MainComponents/StepSecondDynamic.vue";
import StepThirdDynamic from "../components/MainComponents/StepThirdDynamic.vue";
import SummaryPersonalize from "../components/MainComponents/SummaryPersonalize.vue";
export default {
    components: {
        StepFirstDynamic,
        StepSecondDynamic,
        StepThirdDynamic,
        SummaryPersonalize,
    },
    data() {
        return {
            inputH: "",
            inputP: "",
            inputL: "",

            boxone: [
                {
                    step: "1",
                    title: "INSERISCI LE MISURE DELLA SCATOLA",
                    letterOne: "L",
                    letterTwo: "P",
                    letterThree: "H",
                    txtOne: "CM",
                    txtTwo: "CM",
                    txtThree: "CM",
                    txtBanner: "",
                    img: require("../../../public/Links/cat-scatole-cartone-2-onde.jpg"),
                },
                {
                    step: "2",
                    title: "INSERISCI LA QUANTITÀ",
                    letterOne: "Q",
                    letterTwo: "",
                    letterThree: "",
                    txtOne: "PEZZI",
                    txtTwo: "",
                    txtThree: "",
                    txtBanner:
                        "500 è la quantità minima che puoi richiedere per le misure che hai scelto",
                    img: require("../../../public/Links/cat-scatole-cartone-2-onde.jpg"),
                },
            ],
            boxtwo: [
                {
                    step: "3",
                    title: "SCEGLI IL COLORE DELLA SCATOLA",
                    titleOne: "AVANA",
                    titleTwo: "BIANCA",
                    txtOne: "",
                    txtTwo: "",
                    imgOne: require("../../../public/Links/category-scatole-americane-bianche.jpg"),
                    imgTwo: require("../../../public/Links/category-scatole-americane-bianche.jpg"),
                },
                {
                    step: "4",
                    title: "SCEGLI IL TIPO DI CARTONE",
                    titleOne: "SCATOLA A 1 ONDA",
                    titleTwo: "SCATOLE A 2 ONDE",
                    txtOne: "consigliata fino a 10kg",
                    txtTwo: "consigliata fino a 10k",
                    imgOne: require("../../../public/Links/cat-scatole-cartone-2-onde.jpg"),
                    imgTwo: require("../../../public/Links/cat-scatole-cartone-2-onde.jpg"),
                },
            ],
            images: [
                {
                    title: "Cat in a cardboard box",
                    src: require("../../../public/Links/rm442-09-05-g-mockup.png"),
                },
                {
                    title: "Dog playing fetch",
                    src: require("../../../public/Links/02.png"),
                },
                {
                    title: "Bird perched on a branch",
                    src: require("../../../public/Links/28_April_04.png"),
                },
                {
                    title: "Fish swimming in a tank",
                    src: require("../../../public/Links/04.png"),
                },
            ],
            selectedImage: "",
        };
    },
    methods: {
        setInputValues(inputValues) {
            this.inputL = inputValues.inputL;
            this.inputH = inputValues.inputH;
            this.inputP = inputValues.inputP;
        },
    },
    computed: {
        isActiveFirst() {
            return this.selectedImage === "AVANA";
        },
        isActiveSecond() {
            return this.selectedImage === "BIANCA";
        },
    },
};
</script>

<style lang="scss" scoped>
@import "../../sass/global.scss";

h2 {
    font-size: 1.5rem;
}

.active {
    transition: 1s;
    transform: scale(0.9);
}

.box {
    position: relative;
    border: none;
}
i {
    position: absolute;
    font-size: 8rem;
    top: 80px;
    color: white;
    font-weight: bold;
}

.title-create {
    font-weight: bold;
    font-size: 1.5rem;
}

.step {
    margin-bottom: 5rem;
    display: flex;
    border: 1px solid lightgray;
    padding: 1rem;

    background-color: white;
    color: black;
}

label {
    font-size: 1rem;
}

input {
    width: 30%;
    margin: 1rem 0px;
    height: 30px;
    font-size: 1.5rem;
    border: none;
    background-color: #f1f1f1;
}

.form-group input {
    width: 100%;
}

.image img {
    padding: 1rem;
}
</style>
