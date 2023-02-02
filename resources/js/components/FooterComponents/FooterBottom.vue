<template>
    <div class="FooterBottom">
        <div
            class="container-lg d-flex align-items-center justify-content-between"
        >
            <div class="d-flex align-items-center">
                <p class="policy">
                    ©2022 PAPYRA SRL - P.IVA 01502350430 - PRIVACY & COOKIES
                    POLICY - MADE WITH <span class="text-danger"> ♥ </span> BY
                    TERENZICONCEPT
                </p>
            </div>
            <div>
                <i class="fa-brands fa-cc-mastercard"></i>
                <i class="fa-brands fa-cc-visa"></i>
                <i class="fa-brands fa-cc-paypal"></i>
                <i class="fa-brands fa-cc-apple-pay"></i>
                <i class="fa-brands fa-cc-amazon-pay"></i>
            </div>
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
.FooterBottom {
    width: 100vw;
    background-color: black;
    color: white;

    i {
        font-size: 1.5rem;
        margin: 0px 10px;
    }
    .policy {
        display: contents;
        font-size: 0.6rem;
    }
}
</style>
