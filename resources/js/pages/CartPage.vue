<template>
    <section class="shopping-cart">
        <div class="container">
            <div class="block-heading">
                <h2 class="display-5 fw-bold">IL TUO CARRELLO</h2>
            </div>

            <div class="content">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="items">
                            <div class="product">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img
                                            class="img-fluid mx-auto d-block image"
                                            src="../../../public/Links/cat-scatole-maniglie-aperte.jpg"
                                        />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="info">
                                            <div class="row">
                                                <div
                                                    class="col-md-5 product-name"
                                                >
                                                    <div class="product-name">
                                                        <a href="#"
                                                            >Scatole a 1 onda</a
                                                        >
                                                        <div
                                                            class="product-info"
                                                        >
                                                            <div>
                                                                Dimensioni:
                                                                <span
                                                                    class="value"
                                                                    >14 x 14 x
                                                                    10</span
                                                                >
                                                            </div>
                                                            <div>
                                                                Codice:
                                                                <span
                                                                    class="value"
                                                                    >PT014</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 quantity">
                                                    <label
                                                        class="fw-bold"
                                                        for="quantity"
                                                    >
                                                        Quantity:
                                                    </label>
                                                    <input
                                                        class="form-control quantity-input"
                                                        id="quantity"
                                                        type="number"
                                                        value="1"
                                                    />
                                                </div>
                                                <div class="col-md-3 price">
                                                    <span>$120</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr />
                        </div>

                        <!-- <div class="d-flex justify-content-between">
                            <form class="coupon d-flex">
                                <input
                                    placeholder="Codice Coupon"
                                    type="text"
                                />
                                <button class="btn bg-yellow" type="submit">
                                    APPLICA COUPON
                                </button>
                            </form>
                            <form class="coupon d-flex">
                                <button class="btn bg-yellow" type="submit">
                                    AGGIORNA IL CARRELLO
                                </button>
                            </form>
                        </div> -->
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="summary d-flex flex-column">
                            <h3>TOTALE A CARRELLO</h3>
                            <div class="summary-item">
                                <span class="text">SUBTOTALE</span>
                                <span class="price">$360</span>
                            </div>
                            <!-- <div class="summary-item">
                                <span class="text">FOXTOP - SCONTO 5%</span>
                                <span class="price">$0</span>
                            </div> -->
                            <!-- <div class="summary-item">
                                <span class="text"
                                    >ABBONAMENTO FOXTOP - VALIDO 1 ANNO</span
                                >
                                <span class="price">$0</span>
                            </div> -->
                            <div class="summary-item">
                                <span class="text">SPEDIZIONE GRATUITA</span>
                                <span class="price">$0</span>
                            </div>
                            <div class="summary-item">
                                <span class="text">CONTRIBUTO CONAI</span>
                                <span class="price">$0</span>
                            </div>
                            <div class="summary-item">
                                <span class="text">IVA</span>
                                <span class="price">$0</span>
                            </div>
                            <div
                                class="summary-item txt-orange d-flex align-items-center justify-content-between"
                            >
                                <span class="text">TOTALE ORDINE</span>
                                <span class="price">$945</span>
                            </div>
                            <hr />
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
    </section>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
@import "../../sass/global.scss";
.product img {
    width: fit-content;
}
.coupon {
    margin: 2rem;
}

.shopping-cart {
    padding-bottom: 50px;
}

.shopping-cart .block-heading {
    padding-top: 50px;
    margin-bottom: 40px;
    text-align: start;
}

.shopping-cart .block-heading p {
    text-align: center;
    max-width: 420px;
    margin: auto;
    opacity: 0.7;
}

.shopping-cart .dark .block-heading p {
    opacity: 0.8;
}

.shopping-cart .block-heading h1,
.shopping-cart .block-heading h2,
.shopping-cart .block-heading h3 {
    margin-bottom: 1.2rem;
}

.shopping-cart .items {
    margin: auto;
}

// .shopping-cart .items .product {
// }

.shopping-cart .items .product img {
    transform: scale(0.8);
}

.shopping-cart .items .product .info {
    padding-top: 0px;
    text-align: center;
}

.shopping-cart .items .product .info .product-name {
    font-weight: 600;
}

.shopping-cart .items .product .info .product-name .product-info {
    font-size: 10px;
    margin-top: 15px;
}

.shopping-cart .items .product .info .product-name .product-info .value {
    font-weight: 400;
}

.shopping-cart .items .product .info .quantity .quantity-input {
    margin: auto;
    width: 80px;
}

.shopping-cart .items .product .info .price {
    margin-top: 15px;
    font-weight: bold;
}

.shopping-cart .summary {
    border: 1px solid lightgray;
    background-color: white;
    height: 100%;
    padding: 30px;
}

.shopping-cart .summary h3 {
    text-align: start;
    font-size: 1rem;
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
    font-size: 0.6rem;
    font-weight: 600;
}

.shopping-cart .summary .price {
    float: right;
    font-size: 0.6rem;
}

.shopping-cart .summary button {
    margin-top: 20px;
}

@media (min-width: 768px) {
    .shopping-cart .items .product .info {
        padding-top: 25px;
        text-align: left;
    }

    .shopping-cart .items .product .info .price {
        font-weight: bold;
        top: 17px;
    }

    .shopping-cart .items .product .info .quantity {
        text-align: center;
    }

    .shopping-cart .items .product .info .quantity .quantity-input {
        padding: 4px 10px;
        text-align: center;
    }

    input {
        border: 1px solid lightgray;
        outline: none;
    }
}
</style>
