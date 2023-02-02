<template>
    <section class="shopping-cart">
        <div class="container">
            <div class="block-heading">
                <h2 class="display-5 fw-bold">IL TUO CARRELLO</h2>
            </div>

            <div class="content">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="items" v-for="item in order.products">
                            <!-- <CartItem :detail="item"/> -->

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
                                                        <a href="#">{{
                                                            item.name
                                                        }}</a>
                                                        <div
                                                            class="product-info"
                                                        >
                                                            <div>
                                                                Dimensioni:
                                                                <span
                                                                    class="value"
                                                                    >{{
                                                                        item.length
                                                                    }}
                                                                    x
                                                                    {{
                                                                        item.height
                                                                    }}
                                                                    x
                                                                    {{
                                                                        item.width
                                                                    }}</span
                                                                >
                                                            </div>
                                                            <div>
                                                                Codice:
                                                                <span
                                                                    class="value"
                                                                    >{{
                                                                        item.code
                                                                    }}</span
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
                                                        :id="item.id"
                                                        type="number"
                                                        min="0"
                                                        @change="test(item)"
                                                        ref="totalQuantity"
                                                        v-model="
                                                            item.pivot.quantity
                                                        "
                                                    />
                                                </div>
                                                <div class="col-md-3 price">
                                                    <div
                                                        style="
                                                            white-space: nowrap;
                                                        "
                                                    >
                                                        <label for="id1"
                                                            >€</label
                                                        >
                                                        <input
                                                            type="text"
                                                            id="id1"
                                                            class="priceLabel"
                                                            ref="subTotalPrice"
                                                            style="
                                                                border: none;
                                                                box-shadow: none;
                                                                background-color: white;
                                                                pointer-events: none;
                                                            "
                                                            :value="
                                                                (
                                                                    item.pivot
                                                                        .quantity *
                                                                    item.price
                                                                ).toFixed(2)
                                                            "
                                                            readonly
                                                        />
                                                    </div>
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
                                <span class="price"
                                    >€ {{
                                        parseFloat(this.subtotal).toFixed(2)
                                    }}</span
                                >
                            </div>
                            <!-- <div class="summary-item">
																						<span class="text">FOXTOP - SCONTO 5%</span>
																						<span class="price">€0</span>
																		</div> -->
                            <!-- <div class="summary-item">
																						<span class="text"
																										>ABBONAMENTO FOXTOP - VALIDO 1 ANNO</span
																						>
																						<span class="price">€0</span>
																		</div> -->
                            <div class="summary-item">
                                <span class="text">SPEDIZIONE GRATUITA</span>
                                <span class="price"
                                    >€ {{
                                        parseFloat(this.shipping_cost).toFixed(
                                            2
                                        )
                                    }}</span
                                >
                            </div>
                            <div class="summary-item">
                                <span class="text">CONTRIBUTO CONAI</span>
                                <span class="price"
                                    >€ {{
                                        parseFloat(this.conai).toFixed(2)
                                    }}</span
                                >
                            </div>
                            <div class="summary-item">
                                <span class="text">IVA</span>
                                <span class="price"
                                    >€ {{
                                        parseFloat(this.iva).toFixed(2)
                                    }}</span
                                >
                            </div>
                            <div
                                class="summary-item txt-orange d-flex align-items-center justify-content-between"
                            >
                                <span class="text">TOTALE ORDINE</span>
                                <span class="price"
                                    >€ {{
                                        parseFloat(this.total).toFixed(2)
                                    }}</span
                                >
                            </div>
                            <hr />
                            <a
                                type="button"
                                class="btn bg-yellow fw-bold btn-lg btn-block"
                                @click="checkout()"
                            >
                                PROCEDI AL CHECKOUT
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import CartItem from "./CartItem";
import axios from "axios";

export default {
    components: {
        CartItem,
    },
    data() {
        return {
            products: [],
            order: {},
            order_products: [],
            computedPrice: 0,
            quantity: [],
            subtotal: 0,
            shipping_cost: 0,
            conai: 0,
            iva: 0,
            total: 0,
            params: [],
        };
    },
    methods: {
        getProducts() {
            axios
                .get("/api/products", {})
                .then((response) => {
                    console.log("products");
                    console.log(response.data.results);
                    this.products = response.data.results;
                })
                .catch((error) => {
                    console.warn(error.message);
                });
        },

        getOrders() {
            axios
                .put("/api/orders")
                .then((response) => {
                    this.order = response.data.results;
                    this.subtotal = parseFloat(this.order.subtotal);
                    // this.shipping_cost = parseFloat(this.order.shipping_cost);
                    this.conai = parseFloat(this.order.conai);
                    this.iva = parseFloat(this.order.iva);
                    this.total = parseFloat(this.order.total);
                })
                .catch((error) => {
                    console.log(error.message);
                });
        },
        test(item) {
            this.subtotal += item.pivot.quantity * parseFloat(item.price);

            this.subtotal = 0;
            this.iva = 0;
            this.$refs.subTotalPrice.map((sub) => {
                this.subtotal += parseFloat(sub.value);
            });

            this.$refs.totalQuantity.map((quantity) => {
                this.iva += quantity.value * 4.35;

                this.params.push({
                    id: quantity.id,
                    quantity: quantity.value,
                });
            });

            this.conai = ((this.subtotal * 22) / 100.0).toFixed(2);
            this.total = this.subtotal + this.conai + this.iva;
        },
        checkout() {
            axios.post("/api/orders/id", this.params).then((res) => {
                console.log(res);
                if (res.data.response) {
                    alert("Añadida al carrito"); // show alert
                    this.$router.replace({ path: "/checkout" });
                }
            });
        },
    },
    mounted() {
        axios.get("/api/users").then((res) => {
            console.log(res);
        });
        this.getOrders();
        this.getProducts();
    },
};
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
