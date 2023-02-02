<template>
    <div>
        <div class="d-flex">
            <div class="left w-50">
                <img
                    class="img-fluid"
                    src="https://www.pngmart.com/files/7/Box-PNG-Free-Download.png"
                    alt=""
                />
            </div>
            <div class="right w-50">
                <div>
                    <h2 class="fw-bold">{{ product.name }}</h2>
                    <span class="price font-weight-bold"
                        ><strong>{{ product.length }} L x</strong>
                        <strong>{{ product.width }} P x</strong>
                        <strong>{{ product.height }} H</strong>
                    </span>
                    <!-- <div class="stars">
                        <i v-for="n in 5" :key="n" class="far fa-star"></i>
                    </div> -->
                    <div class="d-flex align-items-center">
                        <h1>€ {{ product.price }}</h1>
                        <span class="fw-bold px-2">prezzo cad.</span>
                    </div>
                    <p>
                        Aliqui ium faccum consequi vent, aut que volorum quiatur
                        mo beriam res consedi con pa abore venis audandunt ma
                        ata eum autati quodian dandust et volorem ulparum non
                        restiur ionsequid quidi consequam quatiatene sitem fugit
                        eveliciis dolori vit delistotati simus.e
                    </p>
                    <div
                        class="d-flex flex-column py-2"
                        style="border-bottom: 1px solid lightgray"
                    >
                        <div class="d-flex">
                            <span>CODICE:</span>
                            <strong class="fw-bold">{{ product.code }}</strong>
                        </div>

                        <div class="d-flex">
                            <span>CATEGORIA:</span>
                            <strong
                                ><span class="fw-bold">{{
                                    product.category.name
                                }}</span></strong
                            >
                        </div>
                    </div>
                    <div class="d-flex">
                        <div style="display: flex; justify-content: flex-end">
                            <div class="d-flex align-items-center">
                                <button @click="decreaseValue()">-</button>
                                <input
                                    type="text"
                                    :readonly="isReadOnly"
                                    id="input"
                                    v-model="value"
                                />
                                <button @click="increaseValue()">+</button>
                            </div>
                        </div>
                        <div class="yellow-button mx-5">
                            AGGIUNGI AL CARRELLO
                        </div>
                    </div>
                    <!-- <div class="orange w-100 p-2 m-1">
                        <i class="fas fa-info-circle"></i>
                        <strong>SCONTO</strong>
                        <span>FOX</span>
                        <strong>TOP</strong>
                        <span
                            >> Seleziona per vedere il prezzo in anteprima</span
                        >
                    </div> -->
                    <!-- <div class="orange w-100 p-2 m-1">
                        <input type="checkbox" />
                        <strong>SCONTO 5%</strong>
                        Totale ordine fino a €999
                        <input type="checkbox" />
                        <strong>SCONTO 10%</strong>
                        Totale ordine da €1.000
                    </div> -->
                </div>

                <table class="alternating-rows">
                    <tr>
                        <td class="td1">QUANTITÀ</td>
                        <td>DA 1+</td>
                        <td>DA 100+</td>
                        <td>DA 300+</td>
                        <td>DA 500+</td>
                        <td>DA 1000+</td>
                    </tr>
                    <tr>
                        <td class="td1">PREZZO UNITARIO</td>
                        <td class="td2">€ {{ product.price }}</td>
                        <td class="td2">€ {{ product.first_price }}</td>
                        <td class="td2">€ {{ product.second_price }}</td>
                        <td class="td2">€ {{ product.third_price }}</td>
                        <td class="td2">€ {{ product.fourth_price }}</td>
                    </tr>
                </table>
                <h5 class="fw-bold py-2">
                    PREZZO TOTALE CON IVA E CONAI:
                    <span style="color: orange"
                        >€ {{ totalPrice.toFixed(2) }}</span
                    >
                </h5>
            </div>
        </div>

        <nav>
            <a href="#" class="active">CARATTERISTICHE</a>
            <!-- <a href="#">SCATOLA CONSEGNA</a>
            <a href="#">SPEDIZIONE</a> -->
        </nav>
        <table class="alternating-rows my-5">
            <tr>
                <td class="td1">Tipologia:</td>
                <td class="td2">{{ product.category.name }}</td>
            </tr>
            <tr>
                <td class="td1">Cartone:</td>
                <td class="td2">{{ product.color }}</td>
            </tr>
            <tr>
                <td class="td1">Misure (cm):</td>
                <td class="td2">
                    {{ product.length }} L x {{ product.width }} P x
                    {{ product.height }} H
                </td>
            </tr>
            <tr>
                <td class="td1">Stampa esterna:</td>
                <td class="td2">{{ product.print }}</td>
            </tr>
            <tr>
                <td class="td1">Peso scatola:</td>
                <td class="td2">{{ product.weight }} kg</td>
            </tr>
        </table>
    </div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            value: 100,
            isReadOnly: true,
            product: {},
            priceDynamic: "",
        };
    },
    methods: {
        increaseValue() {
            this.value += 10;
        },
        decreaseValue() {
            this.value -= 10;
        },
        getProduct() {
            axios
                .get(`/api/products/${this.$route.params.id}`)
                .then((response) => {
                    this.product = response.data.results;
                    console.log(this.product);
                })
                .catch((error) => {
                    console.warn(error.message);
                });
        },
    },
    computed: {
        totalPrice() {
            if (this.value >= 1) {
                this.priceDynamic = this.product.price;
            }
            if (this.value >= 100) {
                this.priceDynamic = this.product.first_price;
            }
            if (this.value >= 300) {
                this.priceDynamic = this.product.second_price;
            }
            if (this.value >= 500) {
                this.priceDynamic = this.product.third_price;
            }
            if (this.value >= 1000) {
                this.priceDynamic = this.product.fourth_price;
            }

            return this.priceDynamic * this.value * 1.22;
        },
    },
    created() {
        this.getProduct();
    },
    mounted() {
        window.scrollTo(0, 0);
    },
};
</script>

<style lang="scss" scoped>
input {
    width: 50px;
    text-align: center;
    border: none;
}

// NAV BAR
nav {
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    padding: 1rem;
    margin: 1rem;
    border-bottom: 1px solid lightgray;

    a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
        font-size: 0.8rem;
        transition: all 0.2s;

        &:hover {
            color: #0076ff;
        }

        &.active {
            border-bottom: 5px solid #000;
        }
    }
}

// TABLE
table {
    width: -webkit-fill-available;
}

.alternating-rows tr:nth-child(odd) {
    background-color: rgba(211, 211, 211, 0.5);
}

.alternating-rows tr:nth-child(even) {
    background-color: rgba(211, 211, 211, 0.2);
}

td {
    padding: 0px;
}

.td1 {
    font-weight: bold;
    width: 30%;
}

.td2 {
    color: orange;
    font-weight: bold;
}
</style>
