<template>
    <div class="HeaderTop d-flex align-items-center">
        <div class="container-lg">
            <div class="row justify-content-between">
                <section class="col-3 d-flex align-items-center">
                    <div id="free" class="d-flex align-items-center">
                        <i class="fa fa-bus-alt"></i>
                        <div class="d-none d-lg-inline">
                            <p>SEI UN NUOVO CLIENTE?</p>
                            <strong>
                                <p>SPEDIZIONE GRATIS IN TUTTA ITALIA</p>
                            </strong>
                        </div>
                    </div>
                </section>
                <section class="col-3">
                    <div id="clock" class="d-flex align-items-center">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                        <div class="d-none d-lg-inline">
                            <p>SEI UN NUOVO CLIENTE?</p>
                            <strong>
                                <p>SPEDIZIONE GRATIS IN TUTTA ITALIA</p>
                            </strong>
                        </div>
                    </div>
                </section>
                <div class="col-2">
                    <!-- empty -->
                </div>
                <section class="col-2">
                    <a href="/login">
                        <div id="login" class="d-flex align-items-center">
                            <i class="fa fa-user-alt"></i>
                            <div class="d-none d-lg-inline">
                                <strong>
                                    <p>
                                        {{
                                            this.$store.state.isAuth
                                                ? "DISCONNETTITI"
                                                : "ACCEDI O"
                                        }}
                                    </p>
                                </strong>
                                <p>{{ this.$store.state.name }}</p>
                            </div>
                        </div>
                    </a>
                </section>
                <section class="col-2">
                    <a href="/cart">
                        <div id="carriage" class="d-flex align-items-center">
                            <router-link to="/cart"
                                ><i class="fas fa-shopping-cart"></i
                            ></router-link>
                            <div class="d-none d-lg-inline">
                                <strong>
                                    <p>CARRELLO</p>
                                </strong>
                                <p>
                                    {{ this.$store.state.total }} ??? /
                                    {{ this.$store.state.productCount }}
                                    PRODOTTI
                                </p>
                            </div>
                        </div>
                    </a>
                </section>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            isLogin: false,
            text: "REGISTRATI",
        };
    },
    methods: {
        getUserInfo() {
            axios
                .get("api/user", {})
                .then((response) => {
                    this.$store.commit("updateUser", {
                        isAuth: true,
                        name: response.data.name,
                    });
                })
                .catch((error) => {});
        },
        getCartInfo() {
            axios
                .put("api/orders", {})
                .then((response) => {
                    this.$store.commit("updateCart", {
                        productCount: response.data.results.products.length,
                        total: parseFloat(response.data.results.total),
                    });
                })
                .catch((error) => {});
        },
    },
    created() {
        this.getUserInfo();
        this.getCartInfo();
    },
};
</script>

<style lang="scss" scoped>
.HeaderTop {
    width: 100%;
    height: fit-content;
    background-color: rgb(245, 133, 47);
    color: white;

    section {
        cursor: pointer;
        transition: 1s;

        i {
            font-size: 20px;
            padding: 0 10px;
            margin: 1rem 0px;
        }

        p {
            margin: 0px;
            font-size: 0.5rem;
        }

        a {
            text-decoration: none;
            color: white;
        }
    }
}
</style>

errors: 1-Inserting lang=scss in the
<style></style>
@import './assets/style/variables.scss'; solutions: 1-This error occurs when you
try to use SCSS (Sass) in your project but do not have the necessary
dependencies installed. The solution is to install Bootstrap, which includes the
required dependencies for using SCSS in your project. npm install bootstrap
--save //terminal @import '~bootstrap/scss/bootstrap'; //app.vue
<style></style>
