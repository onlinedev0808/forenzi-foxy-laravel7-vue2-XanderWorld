<template>
        <section class="boxes d-flex flex-wrap justify-content-center">
                <div class="box" v-for="box in boxes" :key="box.title">
                        <div class="card-header">
                                <img class="img-fluid" src="../../../public/Links/scatole-di-cartone-2-onde.jpg"
                                        :alt="box.title" />
                        </div>

                        <div class="card-body">
                                <h5 class="card-title">{{ box . title }}</h5>
                                <div class="stars">
                                        <i v-for="n in box.stars" :key="n" class="fas fa-star"></i>
                                        <i v-for="n in 5 - box.stars" :key="n" class="far fa-star"></i>
                                </div>
                                <div class="price d-flex align-items-center">
                                        <div v-if="box.sale" class="sale-banner">Sale</div>
                                        <p v-if="box.sale" class="old-price">{{ box . oldPrice }} €</p>
                                        <p class="current-price">{{ box . currentPrice }} €</p>
                                </div>
                        </div>
                </div>
        </section>
</template>

<script>
        export default {
                data() {
                        return {
                                boxes: [{
                                                sale: true,
                                                image: "https://picsum.photos/200/300",
                                                title: "Prodotto 1",
                                                stars: 4,
                                                oldPrice: 50,
                                                currentPrice: 35,
                                        },
                                        {
                                                sale: false,
                                                image: "https://picsum.photos/200/300",
                                                title: "Prodotto 2",
                                                stars: 3,
                                                oldPrice: null,
                                                currentPrice: 40,
                                        },
                                        {
                                                sale: true,
                                                image: "https://picsum.photos/200/300",
                                                title: "Prodotto 3",
                                                stars: 5,
                                                oldPrice: 60,
                                                currentPrice: 45,
                                        },
                                        {
                                                sale: false,
                                                image: "https://picsum.photos/200/300",
                                                title: "Prodotto 4",
                                                stars: 3,
                                                oldPrice: null,
                                                currentPrice: 50,
                                        },
                                        {
                                                sale: true,
                                                image: "https://picsum.photos/200/300",
                                                title: "Prodotto 5",
                                                stars: 5,
                                                oldPrice: 70,
                                                currentPrice: 60,
                                        },
                                        {
                                                sale: false,
                                                image: "https://picsum.photos/200/300",
                                                title: "Prodotto 6",
                                                stars: 3,
                                                oldPrice: null,
                                                currentPrice: 40,
                                        },
                                        {
                                                sale: true,
                                                image: "https://picsum.photos/200/300",
                                                title: "Prodotto 7",
                                                stars: 4,
                                                oldPrice: 60,
                                                currentPrice: 45,
                                        },
                                        {
                                                sale: false,
                                                image: "https://picsum.photos/200/300",
                                                title: "Prodotto 8",
                                                stars: 3,
                                                oldPrice: null,
                                                currentPrice: 50,
                                        },
                                        {
                                                sale: true,
                                                image: "https://picsum.photos/200/300",
                                                title: "Prodotto 9",
                                                stars: 5,
                                                oldPrice: 70,
                                                currentPrice: 60,
                                        },
                                        {
                                                sale: false,
                                                image: "https://picsum.photos/200/300",
                                                title: "Prodotto 10",
                                                stars: 3,
                                                oldPrice: null,
                                                currentPrice: 40,
                                        },
                                        {
                                                sale: true,
                                                image: "https://picsum.photos/200/300",
                                                title: "Prodotto 11",
                                                stars: 4,
                                                oldPrice: 60,
                                                currentPrice: 45,
                                        },
                                ],
                        };
                },
        };
</script>

<style lang="scss" scoped></style>
