<template>
    <div class="HeaderBottom py-4">
        <div class="HeaderSearch">
            <div class="container-lg">
                <div class="row d-flex">
                    <div class="col-12 col-md-3 logo">
                        <router-link to="/">
                            <img
                                class="img-fluid mb-4"
                                src="../../../../public/img/logo.png"
                                alt="Logo"
                            />
                        </router-link>
                    </div>
                    <div
                        class="col-12 col-md-9 d-flex align-items-center justify-content-end"
                    >
                        <div class="inputs d-flex flex-sm-row">
                            <div class="input-group mb-3 mx-2">
                                <input
                                    style="width: 60px"
                                    type="number"
                                    class="form-control"
                                    placeholder="Lato Lungo"
                                    max="99"
                                />
                                <input
                                    style="width: 60px"
                                    type="number"
                                    class="form-control"
                                    placeholder="Lato Corto"
                                    max="99"
                                />
                                <input
                                    type="number"
                                    class="form-control"
                                    placeholder="Altezza"
                                    max="99"
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
                                    placeholder="Cerca per prodotto e riferimento"
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
export default {};
</script>

errors: 1-Inserting lang=scss in the
<style lang="scss" scoped>
.inputs .input-group {
    background-color: #f1f1f1;
}
input {
    border-radius: 0px;
    border: 1px solid white;
    border-radius: 0px;
    padding: 0px;
    box-shadow: 0px 0px 15px -2px rgba(0, 0, 0, 0.3);
    transition: all 1s;
    &:hover {
        // transform: translateY(-2px);
        // box-shadow: 0px 15px 25px -5px rgba(0, 0, 0, 0.5);
    }
}
input::placeholder {
    color: black;
    font-size: 0.7rem;
    padding: 0.4rem;
}
button.btn.btn-outline-secondary {
    background-color: rgb(253, 188, 72);
    color: black;
    font-weight: bold;
    border: 0px;

    &:hover {
        // border-radius: 0px;
        // transform: scale(0.9);
        // box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.4);
    }
}
.HeaderBottom {
    background-color: #ffffff;
    .HeaderSearch {
        .container-lg {
            .row {
                .logo {
                    img {
                        width: 100%;
                    }
                }
                .inputs {
                    .input-group {
                        input {
                            font-weight: bold;
                            min-width: 80px;
                            border: none;
                            background-color: transparent;
                            padding: 0.5rem;
                            font-size: 1rem;
                            transition: all 0.3s ease-in-out;
                            &:hover {
                                box-shadow: 0px 0px 15px -2px rgba(0, 0, 0, 0.3);
                            }
                        }
                        .input-group-append {
                            button {
                                background-color: #fdbc47;
                                color: white;
                                font-weight: bold;
                                border: none;
                                transition: all 0.3s ease-in-out;
                                &:hover {
                                    // transform: scale(0.9);
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
</style>

solutions: 1-This error occurs when you try to use SCSS (Sass) in your project
but do not have the necessary dependencies installed. The solution is to install
Bootstrap, which includes the required dependencies for using SCSS in your
project. npm install bootstrap --save //terminal @import
'~bootstrap/scss/bootstrap'; //app.vue
<style></style>
