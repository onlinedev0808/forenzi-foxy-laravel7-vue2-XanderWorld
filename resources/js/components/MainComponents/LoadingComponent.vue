<template>
    <div class="container">
        <div class="bar"></div>
    </div>
</template>

<script></script>

<style lang="scss" scoped>
.bar {
    background-color: #fce0de;
    min-width: 300px;
    min-height: 5px;
    border-radius: 5px;
    position: relative;
    overflow: hidden;
}
.bar::after {
    content: "";
    min-height: 5px;
    position: absolute;
    background: red;
    transform: translateX(-100%);
    animation: animate 3s infinite;
}
.bar::before {
    content: "";
    min-height: 5px;
    position: absolute;
    background: red;
    transform: translateX(-100%);
    animation: animate 3s ease-out infinite;
    animation-delay: 1s;
    z-index: 5;
}

.by {
    position: fixed;
    bottom: 10px;
    right: 10px;
    font-family: "roboto";
    font-size: 20px;
}
@keyframes animate {
    0% {
        transform: translateX(-100%);
        min-width: 10px;
    }
    100% {
        transform: translateX(300%);
        min-width: 400px;
    }
}
</style>
