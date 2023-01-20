<template>
    <div>
        <h1>{{ category.name }}</h1>
    </div>
</template>

<script>
export default {
    props: ["category"],
    components: {},
    data: function () {
        return {};
    },
    methods: {},
    created() {},
    mounted() {
        console.log("Component mounted.");
    },
};
</script>

<style lang="scss" scoped></style>
