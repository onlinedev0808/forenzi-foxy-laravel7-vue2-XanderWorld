<template>
    <div>
        <div class="d-flex flex-column align-items-center p-2">
            <h2 class="text-center font-weight-bold my-2">
                Configura la tua scatola su misura in meno di un minuto!
            </h2>
            <hr class="w-5" />
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
                                    v-for="(element, index) in boxone"
                                    @inputValuesChanged="setInputValues"
                                    @inputQuantityChanged="setInputQuantity"
                                    class="step"
                                    :key="element.id"
                                    :step="element.step"
                                    :title="element.title"
                                    :letter-q="element.letterQ"
                                    :letter-one="element.letterOne"
                                    :letter-two="element.letterTwo"
                                    :letter-three="element.letterThree"
                                    :txt-q="element.txtQ"
                                    :txt-one="element.txtOne"
                                    :txt-two="element.txtTwo"
                                    :txt-three="element.txtThree"
                                    :txt-banner="element.txtBanner"
                                    :img="element.img"
                                />
                                <StepSecondDynamic
                                    v-for="(element, index) in boxtwo"
                                    @imageSelected="setSelectedImage"
                                    :key="element.id"
                                    :step="element.step"
                                    :title="element.title"
                                    :title-one="element.titleOne"
                                    :title-two="element.titleTwo"
                                    :txt-one="element.txtOne"
                                    :txt-two="element.txtTwo"
                                    :img-one="element.imgOne"
                                    :img-two="element.imgTwo"
                                />

                                <StepThirdDynamic
                                    @printSelected="setPrintValue"
                                    :radio-value="radioValue"
                                />
                            </div>
                            <SummaryPersonalize
                                :inputH="inputH"
                                :inputP="inputP"
                                :inputL="inputL"
                                :inputQ="inputQ"
                                :selectedImage="selectedImage"
                                :radioValue="radioValue"
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
            inputQ: "",
            radioValue: "",
            selectedImage: "",

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
                    title: "INSERISCI LA QUANTIT??",
                    letterQ: "Q",
                    letterOne: "",
                    letterTwo: "",
                    letterThree: "",
                    txtQ: "PEZZI",
                    txtOne: "",
                    txtTwo: "",
                    txtThree: "",
                    txtBanner:
                        "500 ?? la quantit?? minima che puoi richiedere per le misure che hai scelto",
                    img: "",
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
        };
    },
    methods: {
        setPrintValue(print) {
            this.radioValue = print;
            console.log(this.radioValue);
        },

        setInputValues(inputValues) {
            this.inputL = inputValues.inputL;
            this.inputH = inputValues.inputH;
            this.inputP = inputValues.inputP;
        },
        setInputQuantity(inputQuantity) {
            this.inputQ = inputQuantity.inputQ;
        },

        setSelectedImage(image) {
            this.selectedImage = image;
            console.log(this.selectedImage.value);
        },

        // setSelectedColor(color) {
        //     this.selectedColor = color;
        //     console.log(this.selectedColor);
        // },
        // setSelectedCategory(category) {
        //     this.selectedCategory = category;
        //     console.log(this.selectedCategory);
        // },
    },
};
</script>

<style lang="scss" scoped>
@import "../../sass/global.scss";

h2 {
    font-size: 2rem;
    font-weight: bold;
    text-shadow: 2px 8px 6px rgba(0, 0, 0, 0.2),
        0px -5px 35px rgba(255, 255, 255, 0.3);
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
