<template>
    <div class="step">
        <fieldset>
            <div class="d-flex align-items-start">
                <div class="w-10 bg-yellow px-3 py-2 mx-2">STEP 5</div>

                <div class="w-90">
                    <span class="title-create"
                        >NEUTRA O CON LA STAMPA PERSONALIZZATA?</span
                    >
                    <div class="mt-5 d-flex flex-column justify-content-center">
                        <div class="">
                            <input
                                v-bind:checked="radioValue === 'huey'"
                                id="NEUTRA"
                                name="drone"
                                type="radio"
                                value="NEUTRA"
                                @change="emitRadioValue"
                            />
                            <label for="huey">NEUTRA</label>
                        </div>

                        <div>
                            <input
                                v-bind:checked="radioValue === 'dewey'"
                                id="PERSONALIZZATA"
                                name="drone"
                                type="radio"
                                value="PERSONALIZZATA"
                                @change="emitRadioValue"
                            />
                            <label for="dewey">PERSONALIZZATA</label>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</template>

<script>
export default {
    data() {
        return {
            radioValue: "",
        };
    },
    methods: {
        emitRadioValue(event) {
            this.radioValue = event.target.value;
            this.$emit("printSelected", this.radioValue);
        },
    },
};
</script>

<style lang="scss" scoped>
label {
    font-size: 1rem;
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
    transform: scale(0.9);
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

.form-group input {
    width: 100%;
}

.image img {
    padding: 1rem;
}
</style>
