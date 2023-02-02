<template>
    <section class="classic">
        <div class="container d-flex">
            <div class="classic-image col-4 d-flex justify-content-center">
                <img alt="" class="" src="../../../../public/Links/01.png" />
            </div>
            <div class="classic-image col-4 d-flex justify-content-center">
                <img
                    alt=""
                    class="img-fluid"
                    src="../../../../public/Links/02.png"
                />
            </div>
            <div
                class="classic-text col-4 d-flex flex-column justify-content-center align-items-start"
            >
                <h1 class="text-white fw-bold display-5">
                    Desideri una scatola su misura con colori e stampa
                    personalizzata?
                </h1>
                <p class="h4">
                    Configurala in pochi e semplici click, un nostro
                    responsabile ti ricontatterà per comunicarti la quotazione!
                </p>
                <button class="yellow-button" style="background-color: black">
                    CONFIGURA ORA
                </button>
            </div>
        </div>
    </section>
</template>

<script></script>

<style lang="scss" scoped>
.classic {
    background-color: #fdbc48;
    .classic-text {
        width: fit-content;
    }
    img {
        max-height: 380px;
        object-fit: cover;
    }
    p {
        font-size: 1rem;
    }
    h1 {
        color: rgb(246, 135, 46);
        font-weight: bold;
        font-size: 2.2rem;
    }
}
</style>
