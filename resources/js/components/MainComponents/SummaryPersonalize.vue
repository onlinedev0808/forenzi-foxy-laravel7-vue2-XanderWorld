<template>
    <div
        class="shopping-cart d-flex align-items-start col-xl-5 col-md-12 col-lg-5"
    >
        <div class="summary d-flex flex-column">
            <h3>RIEPILOGO</h3>
            <div class="summary-item">
                <span class="text">MISURE</span>
                <span class="price"
                    ><strong>{{ inputL }}</strong> L x
                    <strong>{{ inputP }}</strong> P x
                    <strong>{{ inputH }}</strong> H</span
                >
            </div>
            <div class="summary-item">
                <span class="text">QUANTITÀ</span>
                <span class="price"
                    ><strong>{{ inputQ }}</strong> PEZZI</span
                >
            </div>
            <div class="summary-item">
                <span class="text">COLORE SCATOLA</span>
                <span class="price">{{ selectedImage.value }}</span>
            </div>
            <div class="summary-item">
                <span class="text">TIPO DI CARTONE</span>
                <span class="price">{{ selectedImage.value }}</span>
            </div>
            <div class="summary-item">
                <span class="text">STAMPA</span>
                <span class="price">{{ radioValue }}</span>
            </div>

            <div class="summary-item">
                <span class="title-create py-3">INSERISCI I DATI</span>
                <span class="price">$945</span>
            </div>

            <div class="summary-item">
                <form>
                    <div class="row">
                        <div class="d-flex col-lg-12">
                            <div class="form-group col-6">
                                <label class="">NOME</label>
                                <div
                                    class="d-flex jusify-content-start align-items-center p-2"
                                >
                                    <input type="text" value="" />
                                </div>
                            </div>
                            <div class="form-group col-6">
                                <label class="">COGNOME</label>
                                <div
                                    class="d-flex jusify-content-start align-items-center p-2"
                                >
                                    <input type="text" value="" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-lg-12">
                        <label class="">RAGIONE SOCIALE</label>
                        <div
                            class="d-flex jusify-content-start align-items-center p-2"
                        >
                            <input type="text" value="" />
                        </div>
                    </div>

                    <div class="form-group col-lg-12">
                        <label class="">CITTÀ</label>
                        <div
                            class="d-flex jusify-content-start align-items-center p-2"
                        >
                            <input type="text" value="" />
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="">TELEFONO</label>
                            <div
                                class="d-flex jusify-content-start align-items-center p-2"
                            >
                                <input type="text" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="">MAIL</label>
                            <div
                                class="d-flex jusify-content-start align-items-center p-2"
                            >
                                <input type="text" value="" />
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
</template>

<script>
export default {
    components: {},
    props: [
        "inputH",
        "inputL",
        "inputP",
        "inputQ",
        "selectedImage",
        "radioValue",
    ],
    data() {
        return {};
    },

    computed: {},
};
</script>

<style lang="scss" scoped>
@import "../../../sass/global.scss";

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
