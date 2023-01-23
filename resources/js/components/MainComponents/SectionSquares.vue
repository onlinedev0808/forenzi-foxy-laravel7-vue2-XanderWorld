<template>
        <section class="section-squares ">
                <div class="container-lg">
                        <div class="row text-center">
                                <h1 class="display-4 txt-orange">I vantaggi di FoxTop</h1>
                                <div class="squares d-flex justify-content-center flex-wrap">
                                        <div v-for="(square, id) in squares" :key="id"
                                                :class="square.bg" class="square bg-orange d-flex flex-column p-2">
                                                <span class="fw-bold display-3">-{{ square . perc }}</span>
                                                <span class=" title fw-bold">{{ square . title }}</span>
                                                <p class="">
                                                        {{ square . description }}
                                                </p>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
</template>

<script>
        export default {
                name: 'SectionSquares',
                data() {
                        return {
                                squares: [{
                                                perc: '5%',
                                                title: 'PRONTA CONSEGNA',
                                                description: 'This is the first square with a random image and a title.',
                                                bg: 'bg-orange',
                                        },
                                        {
                                                perc: '5%',
                                                title: 'PRONTA CONSEGNA',
                                                description: 'This is the second square with a random image and a title.',
                                                bg: 'bg-orange',
                                        },
                                        {
                                                perc: '5%',
                                                title: 'SU MISURA',
                                                description: 'This is the third square with a random image and a title.',
                                                bg: 'bg-yellow',
                                        },
                                        {
                                                perc: '5%',
                                                title: 'SU MISURA',
                                                description: 'This is the fourth square with a random image and a title.',
                                                bg: 'bg-yellow',
                                        },
                                        {
                                                perc: '5%',
                                                title: 'SPEDIZIONE GRATUITA',
                                                description: 'This is the fifth square with a random image and a title.',
                                                bg: 'bg-white',
                                        },
                                ],
                        }
                },
        }
</script>

<style lang="scss" scoped>
        .section-squares {
                background-color: rgb(241, 241, 241);

                padding: 5rem 0rem;

                .title {
                        
                        font-weight: bold;
                        font-size: 1.5rem;
                }

                .square {
                        width: 225px;
                        height: 225px;

                        display: flex;
                        align-items: center;
                        justify-content: center;

                        color: white;

                        text-align: center;

                        margin: 1rem;

                        h1 {
                                font-size: 5rem;
                        }
                }
        }
</style>
