<template>
    <section class="text-banner text-center d-block">
        <div>
            <h1>
                {{ title }}
            </h1>
        </div>

        <div class=" mx-5 px-5">
            <span class="text">
                {{ description }}
            </span>
        </div>

        <div>
            <p class="text fw-bold">
                {{ descriptionBold }}
            </p>
        </div>
    </section>
</template>

<script>
export default {
    props: {
        title: String,
        description: String,
        descriptionBold: String,
    },
    components: {},
    data() {
        return {};
    },
    created() {},
};
</script>

<style lang="scss" scoped>
.text-banner {
    padding: 2rem;
    .text {
        font-size: 1rem;
    }

    h1 {
        font-weight: bolder;
        font-size: 2rem;
    }
}
</style>
