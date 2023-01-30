<template>
    <div class="">
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
                    </div

                    <div></div>

                    <div>
                        <div class="row flex-wrap justify-content-center">
                            <div
                                class="steps col-xl-7 col-lg-* col-md-* col-sm-*"
                            >
                                <!-- Left side content goes here -->
                                <StepFirstDynamic
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

                            <div
                                class="shopping-cart d-flex align-items-start col-xl-5 col-md-12 col-lg-5"
                            >
                                <div class="summary d-flex flex-column">
                                    <h3>RIEPILOGO</h3>
                                    <div class="summary-item">
                                        <span class="text">MISURE</span>
                                        <span class="price"
                                            >20 L x 50 P x 40 H</span
                                        >
                                    </div>
                                    <div class="summary-item">
                                        <span class="text">QUANTITÀ</span>
                                        <span class="price">500 PEZZI</span>
                                    </div>
                                    <div class="summary-item">
                                        <span class="text">COLORE SCATOLA</span>
                                        <span class="price">AVANA</span>
                                    </div>
                                    <div class="summary-item">
                                        <span class="text"
                                            >TIPO DI CARTONE</span
                                        >
                                        <span class="price"
                                            >SCATOLA A 1 ONDA</span
                                        >
                                    </div>
                                    <div class="summary-item">
                                        <span class="text">STAMPA</span>
                                        <span class="price">NEUTRA</span>
                                    </div>

                                    <div class="summary-item">
                                        <span class="title-create py-3"
                                            >INSERISCI I DATI</span
                                        >
                                        <span class="price">$945</span>
                                    </div>

                                    <div class="summary-item">
                                        <form>
                                            <div class="row">
                                                <div class="d-flex col-lg-12">
                                                    <div class="form-group col-6">
                                                        <label class=""
                                                            >NOME</label
                                                        >
                                                        <div
                                                            class="d-flex jusify-content-start align-items-center p-2"
                                                        >
                                                            <input
                                                                type="text"
                                                                value=""
                                                            />
                                                        </div>
                                                    </div>
                                                     <div class="form-group col-6">
                                                        <label class=""
                                                            >COGNOME</label
                                                        >
                                                        <div
                                                            class="d-flex jusify-content-start align-items-center p-2"
                                                        >
                                                            <input
                                                                type="text"
                                                                value=""
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                           
                                            </div>

                                            <div class="form-group col-lg-12">
                                                <label class=""
                                                    >RAGIONE SOCIALE</label
                                                >
                                                <div
                                                    class="d-flex jusify-content-start align-items-center p-2"
                                                >
                                                    <input
                                                        type="text"
                                                        value=""
                                                    />
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-12">
                                                <label class="">CITTÀ</label>
                                                <div
                                                    class="d-flex jusify-content-start align-items-center p-2"
                                                >
                                                    <input
                                                        type="text"
                                                        value=""
                                                    />
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class=""
                                                        >TELEFONO</label
                                                    >
                                                    <div
                                                        class="d-flex jusify-content-start align-items-center p-2"
                                                    >
                                                        <input
                                                            type="text"
                                                            value=""
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="">MAIL</label>
                                                    <div
                                                        class="d-flex jusify-content-start align-items-center p-2"
                                                    >
                                                        <input
                                                            type="text"
                                                            value=""
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <button
                                        class="btn bg-yellow fw-bold btn-lg btn-block"
                                        type="button"
                                    >
                                        PROCEDI AL CHECKOUT
                                    </button>
                                </div>
                            </div>
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
export default {
    components: {
        StepFirstDynamic,
        StepSecondDynamic,
        StepThirdDynamic,
    },
    data() {
        return {
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
.shopping-cart .summary {
    border: 1px solid lightgray;
    background-color: white;
    padding: 30px;
    color: black;
    width: 100%;
}

.shopping-cart .summary h3 {
    text-align: start;
    font-size: 1.3em;
    font-weight: 600;
    padding-top: 20px;
    padding-bottom: 20px;
}

.shopping-cart .summary .summary-item:not(:last-of-type) {
    padding-bottom: 10px;
    padding-top: 10px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

.shopping-cart .summary .text {
    font-size: 1em;
    font-weight: 600;
}

.shopping-cart .summary .price {
    float: right;
}

.shopping-cart .summary button {
    margin-top: 20px;
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
