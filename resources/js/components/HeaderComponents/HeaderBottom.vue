<template>
    <div class="HeaderBottom py-4">
        <div class="HeaderSearch">
            <div class="container-lg">
                <div class="row d-flex">
                    <div class="col-12 col-md-3 logo">
                        <img
                            class="img-fluid p-4"
                            :src="asset('img/logo.png')"
                            alt="Logo"
                        />
                    </div>
                    <div
                        class="col-12 col-md-9 d-flex align-items-center justify-content-end"
                    >
                        <div class="inputs d-flex flex-sm-row">
                            <div class="input-group mb-3 mx-2">
                                <input
                                    style="width: 60px"
                                    type="text"
                                    class="form-control"
                                    placeholder="LATO LUNGO"
                                />
                                <input
                                    style="width: 60px"
                                    type="text"
                                    class="form-control"
                                    placeholder="LATO CORTO"
                                />
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="ALTEZZA"
                                />
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="CM"
                                />

                                <div class="input-group-append">
                                    <button
                                        class="btn btn-outline-secondary"
                                        type="button"
                                    >
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="input-group mb-3 mx-2 col*">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="CERCA PER PRODOTTO O RIFERIMENTO"
                                />

                                <div class="input-group-append">
                                    <button
                                        class="btn btn-outline-secondary"
                                        type="button"
                                    >
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { asset } from "vue-asset";
</script>

errors: 1-Inserting lang=scss in the
<style lang="scss">
input {
    border-radius: 0px;
    border: 1px solid white;
    background-color: rgb(241, 241, 241);
    border-radius: 0px;
    &:hover {
    }
}
input::placeholder {
    font-weight: bold;
    font-size: 0.8rem;
}
button {
    background-color: rgb(253, 188, 72);
    color: white;
    font-weight: bold;
    border: 0px;
    border-radius: 0px;
    padding: 0.8rem 1.2rem;

    &:hover {
        border-radius: 0px;
        transform: scale(0.9);
    }
}
</style>

solutions: 1-This error occurs when you try to use SCSS (Sass) in your project
but do not have the necessary dependencies installed. The solution is to install
Bootstrap, which includes the required dependencies for using SCSS in your
project. npm install bootstrap --save //terminal @import
'~bootstrap/scss/bootstrap'; //app.vue
<style></style>
