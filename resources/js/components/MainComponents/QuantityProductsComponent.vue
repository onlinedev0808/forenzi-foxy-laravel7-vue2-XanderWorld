<template>
    <div>
        <button @click="decrementQuantity" id="minus-button">-</button>
        <input
            class="font-weight-bold"
            v-model="quantity"
            type="number"
            readonly
            id="quantity-input"
        />
        <button @click="incrementQuantity" id="plus-button">+</button>
    </div>
</template>

<script></script>

<style lang="scss" scoped>
input {
    text-align: center;
    max-width: 45px;
    height: fit-content;
}

input,
button {
    border: 1px solid lightgrey;
    font-size: 0.7rem;
}
#minus-button,
#plus-button {
    height: fit-content;
    background-color: white;

    text-align: center;
    font-weight: bold;
    cursor: pointer;
}
#minus-button:hover,
#plus-button:hover {
    background-color: #fdbc48;
}
</style>
