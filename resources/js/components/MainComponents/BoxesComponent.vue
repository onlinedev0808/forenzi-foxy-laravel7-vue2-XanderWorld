<template>
    <section class="boxes d-flex flex-wrap justify-content-center">
        <div class="box">
            <div class="card-header">
                <img
                    class="img-fluid"
                    src="https://static.wixstatic.com/media/2cd43b_0fe4090271224c51a780c0cccb961b83~mv2_d_2132_2400_s_2.png/v1/fill/w_320,h_360,q_90/2cd43b_0fe4090271224c51a780c0cccb961b83~mv2_d_2132_2400_s_2.png"
                    :alt="product.name"
                />
            </div>

            <div class="card-body">
                <h5 class="card-title">{{ product.name }}</h5>
                <!-- <h6 class="text-muted small">{{ product.category.name }}</h6> -->

                <div class="price d-flex align-items-center">
                    <div v-if="product.price_saled" class="sale-banner">
                        Sale
                    </div>
                    <p v-if="product.price_saled" class="old-price">
                        {{ product.price }} €
                    </p>
                    <p v-if="!product.price_saled" class="price">
                        {{ product.price }} €
                    </p>
                    <p v-if="product.price_saled" class="current-price">
                        {{ product.price_saled }} €
                    </p>
                </div>
            </div>
            <div class="card-footer">
                <div class="add-to-cart d-flex col-12">
                    <div class="left">
                        <button @click="addToCart" class="yellow-button">
                            AGGIUNGI AL CARRELLO
                        </button>
                    </div>
                    <div class="right">
                        <button @click="decrementQuantity" id="minus-button">
                            -
                        </button>
                        <input
                            class="font-weight-bold"
                            v-model="quantity"
                            type="number"
                            readonly
                            id="quantity-input"
                        />
                        <button @click="incrementQuantity" id="plus-button">
                            +
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import axios from "axios";

export default {
    props: ["product"],
    data() {
        return {
            quantity: this.product.purchasable_in_multi_of || 1,
        };
    },
    methods: {
        addToCart() {
            // code to add item to cart, for example
            // using this.product and this.quantity to add the product to the cart

            if (!this.$store.state.isAuth) {
                //not login
                alert("Try to login");
                return;
            }
            axios
                .post("/api/orders", {
                    id: this.product.id,
                    quantity: this.quantity,
                })
                .then((response) => {
                    if (response.data.productCount) alert("Added to Cart");
                    this.$store.commit("updateCart", {
                        productCount: response.data.productCount,
                        total: response.data.result,
                    });
                })
                .catch((err) => {
                    //handle error
                });
        },
        incrementQuantity() {
            this.quantity += this.product.purchasable_in_multi_of || 1;
        },
        decrementQuantity() {
            if (this.quantity >= (this.product.purchasable_in_multi_of || 1)) {
                this.quantity -= this.product.purchasable_in_multi_of || 1;
                if (this.quantity < 0) this.quantity = 0;
            }
        },
    },
};
</script>

<style lang="scss" scoped>
.box {
    width: 250px;
    border: 1px solid white;
    overflow: hidden;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    transition: all 0.2s ease-in-out;

    &:hover {
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.15);
        transform: scale(1.05);
    }

    img {
        object-fit: contain;
    }

    .card-header {
        background-color: white;

        border-bottom: 0px;
    }

    .card-body {
        background-color: white;
        padding: 1rem;
        display: flex;
        flex-direction: column;
        align-items: center;

        .card-title {
            margin: 0;
            font-size: 1rem;
            font-weight: bold;
            line-height: 1.5;
        }

        .current-price {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .old-price {
            font-size: 0.8rem;
            font-weight: bold;
            color: lightgray;
            margin-right: 5px;
        }
        .price {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .add-to-cart {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        #add-to-cart-button {
            background-color: black;
            color: white;
            border: none;
            cursor: pointer;
        }

        #add-to-cart-button:hover {
            background-color: #3e8e41;
        }
    }
    .card-footer {
        background-color: white;
        padding: 0px;

        border-top: 0px;
        .left {
            width: fit-content;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .right {
            margin: 1rem 5px;

            display: flex;
            align-items: center;
            justify-content: center;
            input {
                text-align: center;
                max-width: 45px;
                height: fit-content;
            }

            input,
            button {
                border: 1px solid lightgrey;
                font-size: 0.7rem;
            }
            #minus-button,
            #plus-button {
                height: fit-content;
                background-color: white;

                text-align: center;
                font-weight: bold;
                cursor: pointer;
            }
            #minus-button:hover,
            #plus-button:hover {
                background-color: #fdbc48;
            }
        }
    }
}
</style>
