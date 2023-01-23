<template>
    <main class="page">
        <div class="container-lg">
            <div class="row">
                <div class="wrapper">
                    <div class="h5 large fw-bold">DETTAGLI DI FATTURAZIONE</div>
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-10 offset-lg-0 offset-md-2 offset-sm-1">
                            <div class="mobile h5">Billing Address</div>
                            <div
                                class="py-5"
                                id="details"
                            >
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="">NOME</label>
                                                <div class="d-flex jusify-content-start align-items-center p-2">
                                                    <input
                                                        type="text"
                                                        value=""
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="">COGNOME</label>
                                                <div class="d-flex jusify-content-start align-items-center p-2">
                                                    <input
                                                        type="text"
                                                        value=""
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="">RAGIONE SOCIALE</label>
                                        <div class="d-flex jusify-content-start align-items-center p-2">
                                            <input
                                                type="text"
                                                value=""
                                            />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="">INDIRIZZO</label>
                                        <div class="d-flex jusify-content-start align-items-center p-2">
                                            <input
                                                type="text"
                                                value=""
                                            />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="">RAGIONE SOCIALE</label>
                                        <div class="d-flex jusify-content-start align-items-center p-2">
                                            <input
                                                type="text"
                                                value=""
                                            />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="">CAP</label>
                                                <div class="d-flex jusify-content-start align-items-center p-2">
                                                    <input
                                                        type="text"
                                                        value=""
                                                    />
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="">CITTÀ</label>
                                                <div class="d-flex jusify-content-start align-items-center p-2">
                                                    <input
                                                        type="text"
                                                        value=""
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="">PROVINCIA</label>
                                                <div class="d-flex jusify-content-start align-items-center p-2">
                                                    <input
                                                        type="text"
                                                        value=""
                                                    />
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="">STATO</label>
                                                <div class="d-flex jusify-content-start align-items-center p-2">
                                                    <input
                                                        type="text"
                                                        value=""
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="">TELEFONO</label>
                                                <div class="d-flex jusify-content-start align-items-center p-2">
                                                    <input
                                                        type="text"
                                                        value=""
                                                    />
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="">MAIL</label>
                                                <div class="d-flex jusify-content-start align-items-center p-2">
                                                    <input
                                                        type="text"
                                                        value=""
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="">PEC</label>
                                                <div class="d-flex jusify-content-start align-items-center p-2">
                                                    <input
                                                        type="text"
                                                        value=""
                                                    />
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="">CODICE SDI</label>
                                                <div class="d-flex jusify-content-start align-items-center p-2">
                                                    <input
                                                        type="text"
                                                        value=""
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="">NOTE ORDINE (opzionale)</label>
                                        <div class="d-flex jusify-content-start align-items-center p-2">
                                            <textarea
                                                cols="200"
                                                id=""
                                                name=""
                                                rows="5"
                                            ></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div
                            class="summary col-lg-4 col-md-8 col-sm-10 offset-lg-0 offset-md-2 offset-sm-1 pt-lg-0 pt-3">
                            <div
                                class="bg-white"
                                id="cart"
                            >
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="h6">RIEPILOGO ORDINE</div>
                                    <div class="h6"><a href="#">Back</a>
                                    </div>
                                </div>
                                <div class="d-flex jusitfy-content-between align-items-center pt-3 pb-2 border-bottom">
                                    <div class="item pr-2">
                                        <img
                                            alt=""
                                            height="80"
                                            src="../../../public/Links/cat-scatole-cartone-1-onda.jpg"
                                            width="80"
                                        />
                                        <div class="number">2</div>
                                    </div>

                                    <div class="d-flex flex-column px-3">
                                        <b class="">Scatole 2 onde</b>
                                        <strong>CODICE:
                                            <span>

                                            </span>
                                            <a
                                                class=" text-primary"
                                                href="#"
                                            >
                                                PT1014
                                            </a>
                                        </strong>
                                        <strong>DIMENSIONI:
                                            <span>

                                            </span>
                                            <a
                                                class=" text-primary"
                                                href="#"
                                            >
                                                <strong>CODICE:
                                                    <span>

                                                    </span>
                                                    <a
                                                        class=" text-primary"
                                                        href="#"
                                                    >
                                                        14 x 14 x 10
                                                    </a>
                                                </strong>
                                            </a>
                                        </strong>

                                    </div>
                                </div>
                                <div class="d-flex jusitfy-content-between align-items-center pt-3 pb-2 border-bottom">
                                    <div class="item pr-2">
                                        <img
                                            alt=""
                                            height="80"
                                            src="../../../public/Links/cat-scatole-cartone-1-onda.jpg"
                                            width="80"
                                        />
                                        <div class="number">2</div>
                                    </div>

                                    <div class="d-flex flex-column px-3">
                                        <b class="">Scatole 2 onde</b>
                                        <strong>CODICE:
                                            <span>

                                            </span>
                                            <a
                                                class=" text-primary"
                                                href="#"
                                            >
                                                PT1014
                                            </a>
                                        </strong>
                                        <strong>DIMENSIONI:
                                            <span>

                                            </span>
                                            <a
                                                class=" text-primary"
                                                href="#"
                                            >
                                                <strong>CODICE:
                                                    <span>

                                                    </span>
                                                    <a
                                                        class=" text-primary"
                                                        href="#"
                                                    >
                                                        14 x 14 x 10
                                                    </a>
                                                </strong>
                                            </a>
                                        </strong>

                                    </div>
                                </div>

                                <div class="py-5">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="display-5">SUBTOTALE</div>
                                        <div class="ml-auto font-weight-bold">
                                            $80.9</div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="display-5">FOXTOP - SCONTO
                                        </div>
                                        <div class="ml-auto font-weight-bold">
                                            $80.9</div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="display-5">ABBONAMENTO</div>
                                        <div class="ml-auto font-weight-bold">
                                            $80.9</div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="display-5">SPEDIZIONE
                                            GRATUITA</div>
                                        <div class="ml-auto font-weight-bold">
                                            $80.9</div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="display-5">CONTRIBUTO CONAI
                                        </div>
                                        <div class="ml-auto font-weight-bold">
                                            $80.9</div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="display-5">IVA</div>
                                        <div class="ml-auto font-weight-bold">
                                            $80.9</div>
                                    </div>
                                    <div
                                        class="total border-top d-flex justify-content-between align-items-center ml-2 font-weight-bold">
                                        <div>Total</div>
                                        <div class="px-2">$92.98</div>
                                    </div>

                                </div>
                                <div class="pay ">
                                    <h5 class="fw-bold">MODALITÀ DI PAGAMENTO</h5>
                                    <br />
                                    <h6 class="">BONIFICO BANCARIO</h6>
                                    <p>
                                        Effettua il pagamento tramite
                                        bonifico bancario. Usa l’ID
                                        dell’ordine come causale. Il tuo
                                        ordine non verrà spedito
                                        finché i fondi non risulteranno
                                        trasferiti nel nostro
                                        conto corrente.
                                    </p>
                                    <hr />
                                    <h6 class="">PAGAMENTO ALLA CONSEGNA</h6>
                                    <p>Pagamento in contanti al momento
                                        della consegna.</p>
                                    <hr />
                                    <div class="d-flex">
                                        <h6>PAYPAL E CARTE DI CREDITO</h6>
                                        <i class="fa-brands fa-cc-paypal"></i>
                                        <i class="fa-brands fa-cc-visa"></i>
                                        <i class="fa-brands fa-cc-apple-pay"></i>
                                        <i class="fa-brands fa-cc-mastercard"></i>
                                        <i class="fa-brands fa-cc-mastercard"></i>
                                    </div>

                                    <p>
                                        Paga con PayPal; puoi pagare con
                                        la tua carta di credito
                                        se non hai un account PayPal.
                                    </p>
                                    <hr />

                                    <p>
                                        I tuoi dati personali verranno
                                        utilizzati per elaborare il
                                        tuo ordine, supportare la tua
                                        esperienza in questo sito
                                        Web e per altri scopi descritti
                                        nella nostra
                                        <strong>privacy
                                            policy.</strong>
                                    </p>
                                    <hr />

                                    <input
                                        id="terms"
                                        name="terms"
                                        type="checkbox"
                                        value="agree"
                                    />
                                    Ho letto e accetto
                                    <strong>
                                        termini e condizioni
                                    </strong>
                                    del sito web
                                    <strong>*</strong>
                                    <div class=" col-md-6 my-4 d-flex justify-content-center w-100">
                                        <div class="btn text-uppercase ">
                                            PROCEDI CON L'ORDINE
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
    export default {};
</script>

<style
    lang="scss"
    scoped
>
    i {
        margin-left: .4rem;
        font-size: .8rem;
    }

    .pay {
        h6 {
            font-weight: bold;
        }
    }

    .circle {
        display: inline-block;
        width: 1em;
        height: 1em;
        border-radius: 0.5em;
        background-color: #007bff;
        color: white;
        text-align: center;
        cursor: pointer;
    }

    .square {
        display: inline-block;
        width: 1em;
        height: 1em;
        background-color: #6c757d;
        color: white;
        text-align: center;
        cursor: pointer;
    }

    #details {
        min-height: 300px;
    }

    input {
        border: none;
        outline: none;
        padding: .2rem;
        font-size: 1.5rem;
    }

    textarea {
        border: none;
        outline: none;
        font-size: 1.5rem;
    }

    .form-group .d-flex {
        border: 1px solid lightgrey;
        font-size: 0.8rem;
        margin: 0.5rem 0rem;
    }

    .form-group .d-flex input {
        width: 100%;
    }

    .form-group .d-flex:hover {
        color: #000;
        cursor: pointer;
        border: 1px solid #008000;
    }

    select {
        width: 100%;
        padding: 8px 5px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    input[type="checkbox"]+label {
        font-size: 0.85rem;
        font-weight: 600;
    }

    #address,
    #cart,
    #summary {
        padding: 20px 50px;
        font-size: 0.8rem;
    }

    #address .d-md-flex p.text-justify,
    #register p.text-muted {
        margin: 0;
    }

    #register {
        background-color: #d9ecf2;
    }

    #register a {
        text-decoration: none;
        color: #333;
    }

    #cart,
    #summary {
        max-width: 500px;
        border: 1px solid lightgrey;
    }

    .h6 {
        font-size: 1rem;
        font-weight: 700;
    }

    .h6 a {
        text-decoration: none;
        font-size: .6rem;
    }

    .item img {
        object-fit: cover;
        border-radius: 5px;
    }

    .item {
        position: relative;
    }

    .number {
        position: absolute;
        font-weight: 800;
        color: #fff;
        background-color: orange;
        padding-left: 7px;
        border-radius: 50%;
        border: 1px solid #fff;
        width: 25px;
        height: 25px;
        top: -5px;
        right: -5px;
    }

    .display-5 {
        font-size: 0.8rem;
        font-weight: bold;
    }

    #cart~p.text-muted {
        margin: 0;
        font-size: 0.9rem;
    }

    tr.text-muted td {
        border: none;
    }

    .fa-minus,
    .fa-plus {
        font-size: 0.7rem;
    }

    .table td {
        padding: 0.3rem;
    }

    .btn.text-uppercase {
        border: 1px solid #333;
        font-weight: 600;
        border-radius: 0px;
    }

    .btn.text-uppercase:hover {
        background-color: #333;
        color: #eee;
    }

    .btn.text-white {
        background-color: #66cdaa;
        border-radius: 0px;
    }

    .btn.text-white:hover {
        background-color: #3cb371;
    }

    .wrapper .row+div.text-muted {
        font-size: 0.9rem;
    }

    .mobile,
    #mobile {
        display: none;
    }

    .buttons {
        vertical-align: text-bottom;
    }

    #register {
        width: 50%;
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .progress .progress-bar {
            width: 33%;
        }

        #cart,
        #summary {
            max-width: 100%;
        }

        .wrapper div.h5.large,
        .wrapper .row+div.text-muted {
            display: none;
        }

        .mobile.h5,
        #mobile {
            display: block;
        }
    }

    @media (min-width: 576px) and (max-width: 767px) {
        .progress .progress-bar {
            width: 29%;
        }

        #cart,
        #summary {
            max-width: 100%;
        }

        .wrapper div.h5.large,
        .wrapper .row+div.text-muted {
            display: none;
        }

        .mobile.h5,
        #mobile {
            display: block;
        }

        .buttons {
            width: 100%;
        }
    }

    @media (max-width: 575px) {
        .progress .progress-bar {
            width: 38%;
        }

        #cart,
        #summary {
            max-width: 100%;
        }

        nav,
        .wrapper {
            padding: 10px 30px;
        }

        #register {
            width: 100%;
        }
    }

    @media (max-width: 424px) {
        body {
            width: fit-content;
        }
    }

    @media (max-width: 375px) {
        .progress .progress-bar {
            width: 35%;
        }

        body {
            width: fit-content;
        }
    }

    .total * {
        color: orange;
        font-size: 1rem;
        font-weight: bold;
    }
</style>
