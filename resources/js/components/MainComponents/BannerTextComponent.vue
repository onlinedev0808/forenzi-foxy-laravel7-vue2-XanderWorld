<template>
    <section class="text-banner text-center">
        <h1>
            {{ title }}
        </h1>
        <span class="text">
            {{ description }}
        </span>
        <p class="text fw-bold">
            {{ descriptionBold }}
        </p>
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
        font-size: 0.8rem;
    }

    h1 {
        font-weight: bolder;
        font-size: 2rem;
    }
}
</style>
