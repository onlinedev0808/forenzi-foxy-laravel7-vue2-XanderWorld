<template>
    <section class="news-banner d-flex">
        <div class="new">
            <div class="w-35">
                <img
                    class="img-fluid"
                    src="../../../../public/Links/side-view-of-smiling-curly-woman-pointing-away.jpg"
                    alt=""
                />
            </div>
            <div class="w-65">
                <div style="font-weight: bold" class="new-text">
                    <h1>NOVITÀ!!</h1>
                    <span>
                        Scopri i nostri nuovi prodotti a catalogo e tutti in
                        pronta consegna e spedizione gratuita.
                    </span>
                </div>
            </div>
        </div>
        <div class="new" style="">
            <div class="new-img w-35">
                <img
                    class="img-fluid"
                    src="../../../../public/Links/maniglie-ai.png"
                    alt=""
                />
            </div>
            <div class="new-text w-65">
                <h4>Scatole con maniglie</h4>
                <p>Disponibili bianche e avana</p>
                <button class="yellow-button">SCOPRI IL PRODOTTO</button>
            </div>
        </div>
        <div class="new">
            <div class="new-img w-35">
                <img
                    class="img-fluid"
                    src="../../../../public/Links/maniglie-ai.png"
                    alt=""
                />
            </div>
            <div class="new-text w-65">
                <h4>Scatole colorate</h4>
                <p>Varie forme e colori</p>
                <button class="yellow-button">SCOPRI IL PRODOTTO</button>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    components: {},
    data() {
        return {};
    },
    created() {},
};
</script>

<style lang="scss" scoped>
.news-banner {
    .new {
        display: flex;
        align-items: center;

        padding: 4rem 0px;

        font-size: 0.8rem;

        height: 160px;
        width: 33.33%;
        background-color: #e5e5e5;
        margin: 50px 2px;

        img {
            height: 160px;
            object-fit: cover;
        }

        p{
            margin: 0px;
        }
        .new-text {
            padding: 10px;
            h1,
            h4 {
                color: rgb(246, 134, 48);
                font-weight: bold;
            }
        }
    }
}
</style>
