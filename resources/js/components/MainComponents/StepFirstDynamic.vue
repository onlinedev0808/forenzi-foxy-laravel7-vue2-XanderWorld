<template>
    <div class="step">
        <div>
            <!-- First child element -->
            <div>
                <!-- Title goes here -->
                <div class="d-flex justify-content-start align-items-start">
                    <div class="w-10 bg-yellow px-3 py-2 mx-2">
                        STEP {{ step }}
                    </div>
                    <div class="w-90">
                        <span class="title-create">{{ title }}</span>
                        <div>
                            <!-- Left column -->
                            <div class="inputs">
                                <!-- Left side content goes here -->
                                <div
                                    class="d-flex align-items-center justify-content-start"
                                >
                                    <div v-if="letterOne" class="bg-yellow">
                                        {{ letterOne }}
                                    </div>
                                    <input
                                        v-if="letterOne"
                                        v-model="inputL"
                                        @input="emitInputValues"
                                        type="number"
                                        min="1"
                                        placeholder="inserisci il lato lungo"
                                    />
                                    <h2 v-if="txtOne" class="mx-2">
                                        {{ txtOne }}
                                    </h2>
                                </div>

                                <div
                                    class="d-flex align-items-center justify-content-start"
                                >
                                    <div v-if="letterTwo" class="bg-yellow">
                                        {{ letterTwo }}
                                    </div>
                                    <input
                                        v-model="inputP"
                                        @input="emitInputValues"
                                        v-if="letterTwo"
                                        type="number"
                                        min="1"
                                        placeholder="inserisci il lato corto"
                                    />
                                    <h2 v-if="txtTwo" class="mx-2">
                                        {{ txtTwo }}
                                    </h2>
                                </div>

                                <div
                                    class="d-flex align-items-center justify-content-start"
                                >
                                    <div v-if="letterThree" class="bg-yellow">
                                        {{ letterThree }}
                                    </div>
                                    <input
                                        v-model="inputH"
                                        @input="emitInputValues"
                                        v-if="letterThree"
                                        type="number"
                                        min="1"
                                        placeholder="inserisci l'altezza"
                                    />
                                    <h2 v-if="txtThree" class="mx-2">
                                        {{ txtThree }}
                                    </h2>
                                </div>
                            </div>
                            <!-- Right column -->
                            <div class="image">
                                <!-- Right side content goes here -->
                                <img
                                    v-if="img"
                                    alt="image"
                                    class="img-fluid"
                                    :src="img"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Second child element -->
        </div>
    </div>
</template>

<script>
export default {
    props: {
        step: String,
        title: String,
        letterOne: String,
        letterTwo: String,
        letterThree: String,
        txtOne: String,
        txtTwo: String,
        txtThree: String,
        txtBanner: String,
        img: String,
    },
    data() {
        return {
            inputL: "",
            inputH: "",
            inputP: "",
        };
    },
    methods: {
        emitInputValues() {
            this.$emit("inputValuesChanged", {
                inputL: this.inputL,
                inputH: this.inputH,
                inputP: this.inputP,
            });
        },
    },
};
</script>

<style lang="scss" scoped>
@import "../../../sass/global.scss";
.bg-yellow {
    background-color: $orange;
    min-width: fit-content;
}

h2 {
    font-size: 1.5rem;
}

.inputs {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.inputs .d-flex {
    align-items: center;
    justify-content: start;
}

.inputs .bg-yellow {
    background-color: $orange;
    color: white;
    display: flex;
    height: 60px;
    justify-content: center;
    align-items: center;
    width: 60px;
}

.inputs input {
    height: 60px;
    width: 30%;
    margin: 1rem 0px;
    font-size: 1.5rem;
    border: none;
    background-color: #f1f1f1;
}
.inputs input::placeholder {
    font-size: 0.5rem;
}

.image {
    display: flex;
    flex-direction: column;
}

.image img {
    width: 60%;
}

.step {
    margin-bottom: 5rem;
    display: flex;
    border: 1px solid lightgray;
    padding: 1rem;
    background-color: white;
    color: black;
}

.title-create {
    font-weight: bold;
    font-size: 1.5rem;
}
</style>
