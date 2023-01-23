<template>
    <section class="text-banner text-center">
        <h1 class="display-4">
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
    padding: 100px;
    font-size: 1rem;
    .text {
        font-size: .8rem;
    }

    h1 {
        font-weight: bold;
        font-size: 3rem;
    }
}
</style>
