<template>
    <section class="classic d-flex">
        <div class="container">
            <div
                class="row d-flex flex-wrap justify-content-between align-items-center"
            >
                <div class="classic-text w-50">
                    <h1 class="">{{ title }}</h1>
                    <p class="">
                        {{ description }}
                    </p>
                    <p class="font-weight-bold">
                        {{ subdescription }}
                    </p>
                    <p class="">
                        {{ notes }}
                    </p>
                    <button
                        v-show="button"
                        class="yellow-button"
                        style="background-color: black"
                    >
                        {{ button }}
                    </button>
                </div>
                <div class="classic-image w-25 d-flex align-items-center">
                    <img
                        class="img-fluid"
                        src="https://pngimg.com/uploads/box/box_PNG140.png"
                        alt=""
                    />
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    props: {
        title: String,
        description: String,
        subdescription: String,
        notes: String,
        button: String,
    },
    components: {},
    data() {
        return {};
    },
    created() {},
};
</script>

<style lang="scss" scoped>
.classic {
    .classic-text {
        width: fit-content;
    }
    p {
        font-size: 1rem;
    }
    h1 {
        color: rgb(246, 135, 46);
        font-weight: bold;
        font-size: 2rem;
    }
}
</style>
