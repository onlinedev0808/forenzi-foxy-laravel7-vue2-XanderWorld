<template>
    <div class="step">
        <div>
            <!-- Title goes here -->
            <div class="d-flex align-items-start">
                <div class="w-10 bg-yellow px-2 py-2 mx-2">STEP {{ step }}</div>
                <div class="w-90">
                    <span class="title-create">{{ title }}</span>

                    <div class="left-right col-12">
                        <div
                            class="left col-6"
                            @click="selectedImage = 'AVANA'"
                            :class="{ active: selectedImage === 'AVANA' }"
                        >
                            <div
                                class="box d-flex flex-column align-items-center"
                            >
                                <img
                                    class="img-fluid"
                                    alt="Image"
                                    :src="imgOne"
                                />
                                <i
                                    v-if="isActiveFirst"
                                    class="fa-sharp fa-solid fa-check"
                                >
                                </i>

                                <h4 class="titlebox">{{ titleOne }}</h4>
                                <span class="textbox">{{ txtOne }}</span>
                            </div>
                        </div>

                        <div
                            class="right col-6"
                            @click="selectedImage = 'BIANCA'"
                            :class="{ active: selectedImage === 'BIANCA' }"
                        >
                            <div
                                class="box d-flex flex-column align-items-center"
                            >
                                <img alt="Image" :src="imgTwo" />

                                <i
                                    v-if="isActiveSecond"
                                    class="fa-sharp fa-solid fa-check"
                                >
                                </i>

                                <h4 class="titlebox">{{ titleTwo }}</h4>
                                <span class="textbox">{{ txtTwo }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        step: String,
        title: String,
        titleOne: String,
        titleTwo: String,
        txtOne: String,
        txtTwo: String,
        imgOne: String,
        imgTwo: String,
    },
    data() {
        return {
            selectedImage: "",
        };
    },

    computed: {
        isActiveFirst() {
            return this.selectedImage === "AVANA";
        },
        isActiveSecond() {
            return this.selectedImage === "BIANCA";
        },
    },
};
</script>

<style lang="scss" scoped>
.titlebox {
    font-size: 0.8rem;
}
.textbox {
    font-size: 0.6rem;
}
.bg-yellow {
    min-width: fit-content;
}
h2 {
    font-size: 1.5rem;
}
.shopping-cart .summary {
    border: 1px solid lightgray;
    background-color: white;
    padding: 30px;
    color: black;
    width: 100%;
}

.shopping-cart .summary h3 {
    text-align: start;
    font-size: 1.3em;
    font-weight: 600;
    padding-top: 20px;
    padding-bottom: 20px;
}

.shopping-cart .summary .summary-item:not(:last-of-type) {
    padding-bottom: 10px;
    padding-top: 10px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

.shopping-cart .summary .text {
    font-size: 1em;
    font-weight: 600;
}

.shopping-cart .summary .price {
    float: right;
}

.shopping-cart .summary button {
    margin-top: 20px;
}
.active {
    transition: 1s;
    transform:scaleY(.9);
}

.box {
    position: relative;
    border: none;
}
i {
    position: absolute;
    font-size: 8rem;
    top: 80px;
    color: white;
    font-weight: bold;
}

.title-create {
    font-weight: bold;
    font-size: 1.5rem;
}

.step {
    margin-bottom: 5rem;
    display: flex;
    border: 1px solid lightgray;
    padding: 1rem;

    background-color: white;
    color: black;
}

label {
    font-size: 0.8rem;
}

input {
    width: 30%;
    margin: 1rem 0px;
    height: 30px;
    font-size: 1.5rem;
    border: none;
    background-color: #f1f1f1;
}

.form-group input {
    width: 100%;
}

.image img {
    padding: 1rem;
}
</style>
