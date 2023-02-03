<template>
    <main class="page">
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-12">
                    <div class="h5 mx-4 large font-weight-bold">
                        <h1>CHECKOUT</h1>
                        <hr />
                        <span> DETTAGLI DI FATTURAZIONE </span>
                    </div>
                </div>
                <div class="col-12 d-flex flex-wrap">
                    <div class="col-6">
                        <div class="mobile h5">Billing Address</div>
                        <div class="py-5" id="details">
                            <v-form ref="entryForm">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <!-- <label class="">NOME</label> -->
                                            <div class="d-flex jusify-content-start align-items-center p-2">
                                                <v-text-field 
                                                    label="NOME" 
                                                    v-model="first_name" 
                                                    :error-messages="firstNameErrors"
                                                    required
                                                    @input="$v.first_name.$touch()"
                                                    @blur="$v.first_name.$touch()"
                                                ></v-text-field>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <!-- <label class="">COGNOME</label> -->
                                            <div class="d-flex jusify-content-start align-items-center p-2">
                                                <v-text-field 
                                                    label="COGNOME" 
                                                    v-model="last_name" 
                                                    :error-messages="lastNameErrors"
                                                    required
                                                    @input="$v.last_name.$touch()"
                                                    @blur="$v.last_name.$touch()"
                                                ></v-text-field>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- <label class="">RAGIONE SOCIALE</label> -->
                                    <div class="d-flex jusify-content-start align-items-center p-2" >
                                        <!-- COGNOME
                                        <input type="text" v-model="business_name" /> -->
                                        <v-text-field 
                                            label="RAGIONE SOCIALE" 
                                            v-model="business_name" 
                                            :error-messages="businessNameErrors"
                                            required
                                            @input="$v.business_name.$touch()"
                                            @blur="$v.business_name.$touch()"
                                        ></v-text-field>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- <label class="">INDIRIZZO</label> -->
                                    <div class="d-flex jusify-content-start align-items-center p-2">
                                        <!-- <input type="text" v-model="address" /> -->
                                        <v-text-field 
                                            label="INDIRIZZO" 
                                            v-model="address" 
                                            :error-messages="addressErrors"
                                            required
                                            @input="$v.address.$touch()"
                                            @blur="$v.address.$touch()"
                                        ></v-text-field>
                                    </div>
                                </div>

                                <!-- <div class="form-group">
                                    <label class="">RAGIONE SOCIALE</label>
                                    <div class="d-flex jusify-content-start align-items-center p-2">
                                        <input type="text" value="" />
                                    </div>
                                </div> -->

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <!-- <label class="">CAP</label> -->
                                            <div
                                                class="d-flex jusify-content-start align-items-center p-2"
                                            >
                                                <!-- <input type="text" v-model="cap" /> -->
                                                <v-text-field 
                                                    label="CAP" 
                                                    v-model="cap" 
                                                    :error-messages="capErrors"
                                                    required
                                                    @input="$v.cap.$touch()"
                                                    @blur="$v.cap.$touch()"
                                                ></v-text-field>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <!-- <label class="">CITTÀ</label> -->
                                            <div
                                                class="d-flex jusify-content-start align-items-center p-2"
                                            >
                                                <!-- <input type="text" v-model="city" /> -->
                                                <v-text-field 
                                                    label="CITTÀ" 
                                                    v-model="city" 
                                                    :error-messages="cityErrors"
                                                    required
                                                    @input="$v.city.$touch()"
                                                    @blur="$v.city.$touch()"
                                                ></v-text-field>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <!-- <label class="">PROVINCIA</label> -->
                                            <div
                                                class="d-flex jusify-content-start align-items-center p-2"
                                            >
                                                <!-- <input type="text" v-model="province" /> -->
                                                <v-text-field 
                                                    label="PROVINCIA" 
                                                    v-model="province" 
                                                    :error-messages="provinceErrors"
                                                    required
                                                    @input="$v.province.$touch()"
                                                    @blur="$v.province.$touch()"
                                                ></v-text-field>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <!-- <label class="">STATO</label> -->
                                            <div
                                                class="d-flex jusify-content-start align-items-center p-2"
                                            >
                                                <!-- <input type="text" v-model="state" /> -->
                                                <v-text-field 
                                                    label="STATO" 
                                                    v-model="state" 
                                                    :error-messages="stateErrors"
                                                    required
                                                    @input="$v.state.$touch()"
                                                    @blur="$v.state.$touch()"
                                                ></v-text-field>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <!-- <label class="">TELEFONO</label> -->
                                            <div
                                                class="d-flex jusify-content-start align-items-center p-2"
                                            >
                                                <!-- <input type="text" v-model="phone" /> -->
                                                <v-text-field 
                                                    label="TELEFONO" 
                                                    v-model="phone" 
                                                    :error-messages="phoneErrors"
                                                    required
                                                    @input="$v.phone.$touch()"
                                                    @blur="$v.phone.$touch()"
                                                ></v-text-field>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <!-- <label class="">MAIL</label> -->
                                            <div
                                                class="d-flex jusify-content-start align-items-center p-2"
                                            >
                                                <!-- <input type="text" value="" /> -->
                                                <v-text-field 
                                                    label="MAIL"
                                                    :value="mail"
                                                    readonly
                                                ></v-text-field>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <!-- <label class="">PEC</label> -->
                                            <div
                                                class="d-flex jusify-content-start align-items-center p-2"
                                            >
                                                <!-- <input type="text" v-model="pec" /> -->
                                                <v-text-field 
                                                    label="PEC" 
                                                    v-model="pec" 
                                                    :error-messages="pecErrors"
                                                    required
                                                    @input="$v.pec.$touch()"
                                                    @blur="$v.pec.$touch()"
                                                ></v-text-field>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <!-- <label class="">CODICE SDI</label> -->
                                            <div
                                                class="d-flex jusify-content-start align-items-center p-2"
                                            >
                                                <!-- <input type="text" v-model="code_sdi" /> -->
                                                <v-text-field 
                                                    label="CODICE SDI" 
                                                    v-model="code_sdi" 
                                                    :error-messages="codeSdiErrors"
                                                    required
                                                    @input="$v.code_sdi.$touch()"
                                                    @blur="$v.code_sdi.$touch()"
                                                ></v-text-field>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- <label class=""
                                        >NOTE ORDINE (opzionale)</label
                                    > -->
                                    <div
                                        class="d-flex jusify-content-start align-items-center p-2"
                                    >
                                        <!-- <v-textarea
                                            cols="200"
                                            id=""
                                            name=""
                                            rows="5"
                                            v-model="notes"
                                        ></v-textarea> -->
                                        <v-textarea
                                            label="NOTE ORDINE (opzionale)" 
                                            v-model="notes" 
                                            :error-messages="notesErrors"
                                            required
                                            @input="$v.notes.$touch()"
                                            @blur="$v.notes.$touch()"
                                        ></v-textarea>
                                    </div>
                                </div>
                            </v-form>
                        </div>
                    </div>
                    <div class="summary col-6">
                        <div class="bg-white" id="cart">
                            <div
                                class="d-flex justify-content-between align-items-center"
                            >
                                <div class="h6">RIEPILOGO ORDINE</div>
                                <div class="h6"><a href="/cart">Back</a></div>
                            </div>
                            <div v-for="item in order.products">
                                <div class="d-flex jusitfy-content-between align-items-center pt-3 pb-2 border-bottom">
                                    <div class="item pr-2">
                                        <img
                                            alt=""
                                            height="80"
                                            src="../../../public/Links/cat-scatole-cartone-1-onda.jpg"
                                            width="80"
                                        />
                                        <div class="number">{{ item.pivot.quantity }}</div>
                                    </div>

                                    <div class="d-flex flex-column px-3">
                                        <b class="">{{ item.name }}</b>
                                        <strong
                                            >CODICE:
                                            <span> </span>
                                            <a class="text-primary" href="#">
                                                {{ item.code }}
                                            </a>
                                        </strong>
                                        <strong
                                            >DIMENSIONI:
                                            <span> </span>
                                            <a class="text-primary" href="#">
                                                <strong
                                                    >CODICE:
                                                    <span> </span>
                                                    <a
                                                        class="text-primary"
                                                        href="#"
                                                    >
                                                    {{ item.length }} x {{ item.height }} x {{ item.width }}
                                                    </a>
                                                </strong>
                                            </a>
                                        </strong>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- <div
                                class="d-flex jusitfy-content-between align-items-center pt-3 pb-2 border-bottom"
                            >
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
                                    <strong
                                        >CODICE:
                                        <span> </span>
                                        <a class="text-primary" href="#">
                                            PT1014
                                        </a>
                                    </strong>
                                    <strong
                                        >DIMENSIONI:
                                        <span> </span>
                                        <a class="text-primary" href="#">
                                            <strong
                                                >CODICE:
                                                <span> </span>
                                                <a
                                                    class="text-primary"
                                                    href="#"
                                                >
                                                    14 x 14 x 10
                                                </a>
                                            </strong>
                                        </a>
                                    </strong>
                                </div>
                            </div> -->

                            <div class="py-5">
                                <div
                                    class="d-flex align-items-center justify-content-between"
                                >
                                    <div class="display-5">SUBTOTALE</div>
                                    <div class="ml-auto font-weight-bold">
                                        € {{ this.subtotal.toFixed(2) }}
                                    </div>
                                </div>
                                <!-- <div
                                    class="d-flex align-items-center justify-content-between"
                                >
                                    <div class="display-5">FOXTOP - SCONTO</div>
                                    <div class="ml-auto font-weight-bold">
                                        $80.9
                                    </div>
                                </div> -->
                                <!-- <div
                                    class="d-flex align-items-center justify-content-between"
                                >
                                    <div class="display-5">ABBONAMENTO</div>
                                    <div class="ml-auto font-weight-bold">
                                        $80.9
                                    </div>
                                </div> -->
                                <div
                                    class="d-flex align-items-center justify-content-between"
                                >
                                    <div class="display-5">
                                        SPEDIZIONE GRATUITA
                                    </div>
                                    <div class="ml-auto font-weight-bold">
                                        € {{ this.shipping_cost.toFixed(2) }}
                                    </div>
                                </div>
                                <div
                                    class="d-flex align-items-center justify-content-between"
                                >
                                    <div class="display-5">
                                        CONTRIBUTO CONAI
                                    </div>
                                    <div class="ml-auto font-weight-bold">
                                        € {{ this.conai.toFixed(2) }}
                                    </div>
                                </div>
                                <div
                                    class="d-flex align-items-center justify-content-between"
                                >
                                    <div class="display-5">IVA</div>
                                    <div class="ml-auto font-weight-bold">
                                        € {{ this.iva.toFixed(2) }}
                                    </div>
                                </div>
                                <div
                                    class="total border-top d-flex justify-content-between align-items-center ml-2 font-weight-bold"
                                >
                                    <div>Total</div>
                                    <div class="px-2">
                                        € {{ this.total.toFixed(2) }}
                                    </div>
                                </div>
                            </div>
                            <div class="pay">
                                <h5 class="fw-bold">MODALITÀ DI PAGAMENTO</h5>
                                <br />
                                <h6 class="">BONIFICO BANCARIO</h6>
                                <p>
                                    Effettua il pagamento tramite bonifico
                                    bancario. Usa l’ID dell’ordine come causale.
                                    Il tuo ordine non verrà spedito finché i
                                    fondi non risulteranno trasferiti nel nostro
                                    conto corrente.
                                </p>
                                <hr />
                                <h6 class="">PAGAMENTO ALLA CONSEGNA</h6>
                                <p>
                                    Pagamento in contanti al momento della
                                    consegna.
                                </p>
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
                                    Paga con PayPal; puoi pagare con la tua
                                    carta di credito se non hai un account
                                    PayPal.
                                </p>
                                <hr />

                                <p>
                                    I tuoi dati personali verranno utilizzati
                                    per elaborare il tuo ordine, supportare la
                                    tua esperienza in questo sito Web e per
                                    altri scopi descritti nella nostra
                                    <strong>privacy policy.</strong>
                                </p>
                                <hr />

                                <input
                                    id="terms"
                                    name="terms"
                                    type="checkbox"
                                    v-model="agree"
                                    ref="checkTerm"
                                />
                                Ho letto e accetto
                                <strong> termini e condizioni </strong>
                                del sito web
                                <strong>*</strong>
                                <div
                                    class="col-md-12 my-4 d-flex justify-content-center w-100"
                                >
                                    <button class="btn text-uppercase" @click="transmitt()" :disabled="!agree">
                                        PROCEDI CON L'ORDINE
                                    </button>
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

import { required, minLength, maxLength, email, between } from 'vuelidate/lib/validators'
export default {
    data() {
		return {
			products: [],
            order: {},
            order_products: [],
			computedPrice: 0,
			quantity: 0,
			subtotal: 0,
			shipping_cost: 0,
			conai: 0,
			iva: 0,
			total: 0,

            first_name: '',
            last_name: '',
            surname: '',
            business_name: '',
            notes: '',
            address: '',
            phone: '',
            city: '',
            cap: '',
            province: '',
            state: '',
            pec: '',
            code_sdi: '',
            mail:'',
            agree:'',

            first_name_error: ['error'],
            last_name_error: ['error'],
            business_name_error: ['error'],
            address_error: ['error'],
            cap_error: ['error'],
            city_error: ['error'],
            province_error: ['error'],
            state_error: ['error'],
            phone_error: ['error'],
            pec_error: ['error'],
            code_sdi_error: ['error'],
            notes_error: ['error'],
		}
	},

    validations: {
        first_name: { required, maxLength: maxLength(10) },
        last_name: { required, maxLength: maxLength(10) },
        business_name: { required, maxLength: maxLength(15) },
        address: { required },
        cap: { required },
        city: { required },
        province: { required },
        state: { required },
        phone: { required },
        // mail: { required },
        pec: { required },
        code_sdi: { required },
        notes: { required },
    },

    computed: {
        firstNameErrors () {
            const errors = [];
            this.first_name_error = [];
            if (!this.$v.first_name.$dirty) {this.first_name_error.push('error');return errors;}
            !this.$v.first_name.maxLength && errors.push('Must be at most 10 characters long') && this.first_name_error.push('error')
            !this.$v.first_name.required && errors.push('First Name is required.') && this.first_name_error.push('error')
            return errors;
        },

        lastNameErrors () {
            const errors = [];
            this.last_name_error = [];
            if (!this.$v.last_name.$dirty) {this.last_name_error.push('error');return errors;}
            !this.$v.last_name.maxLength && errors.push('Must be at most 10 characters long') && this.last_name_error.push('error')
            !this.$v.last_name.required && errors.push('Last Name is required.') && this.last_name_error.push('error')
            return errors
        },

        businessNameErrors () {
            const errors = []
            this.business_name_error = []
            if (!this.$v.business_name.$dirty) {this.business_name_error.push('error');return errors;}
            !this.$v.business_name.maxLength && errors.push('Must be at most 10 characters long') && this.business_name_error.push('error')
            !this.$v.business_name.required && errors.push('Business Name is required.') && this.business_name_error.push('error')
            return errors
        },

        addressErrors () {
            const errors = []
            this.address_error = []
            if (!this.$v.address.$dirty) {this.address_error.push('error');return errors;}
            !this.$v.address.required && errors.push('ADDRESS is required.') && this.address_error.push('error')
            return errors
        },

        capErrors () {
            const errors = []
            this.cap_error = []
            if (!this.$v.cap.$dirty) {this.cap_error.push('error');return errors;}
            !this.$v.cap.required && errors.push('POSTAL CODE is required.') && this.cap_error.push('error')
            return errors
        },

        cityErrors () {
            const errors = []
            this.city_error = []
            if (!this.$v.city.$dirty) {this.city_error.push('error');return errors;}
            !this.$v.city.required && errors.push('CITY is required.') && this.city_error.push('error')
            return errors
        },

        provinceErrors () {
            const errors = []
            this.province_error = []
            if (!this.$v.province.$dirty) {this.province_error.push('error');return errors;}
            !this.$v.province.required && errors.push('PROVINCE is required.') && this.province_error.push('error')
            return errors
        },

        stateErrors () {
            const errors = []
            this.state_error = []
            if (!this.$v.state.$dirty) {this.state_error.push('error');return errors;}
            !this.$v.state.required && errors.push('STATE is required.') && this.state_error.push('error')
            return errors
        },

        phoneErrors () {
            const errors = []
            this.phone_error = []
            if (!this.$v.phone.$dirty) {this.phone_error.push('error');return errors;}
            !this.$v.phone.required && errors.push('TELEPHONE is required.') && this.phone_error.push('error')
            return errors
        },

        // mailErrors () {
        //     const errors = []
        //     this.mail_error = []
        //     if (!this.$v.mail.$dirty) {this.mail_error.push('error');return errors;}
        //     !this.$v.mail.required && errors.push('MAIL is required.') && this.mail_error.push('error')
        //     return errors
        // },

        pecErrors () {
            const errors = []
            this.pec_error = []
            if (!this.$v.pec.$dirty) {this.pec_error.push('error');return errors;}
            !this.$v.pec.required && errors.push('PEC is required.') && this.pec_error.push('error')
            return errors
        },

        codeSdiErrors () {
            const errors = []
            this.code_sdi_error = []
            if (!this.$v.code_sdi.$dirty) {this.code_sdi_error.push('error');return errors;}
            !this.$v.code_sdi.required && errors.push('SDI CODE is required.') && this.code_sdi_error.push('error')
            return errors
        },

        notesErrors () {
            const errors = []
            this.notes_error = []
            if (!this.$v.notes.$dirty) {this.notes_error.push('error');return errors;}
            !this.$v.notes.required && errors.push('NOTES is required.') && this.notes_error.push('error')
            return errors
        },
    },
    methods: {
        getUserInfo() {
            axios
                .get("api/user", {})
                .then((response) => {
                    this.mail = response.data.email;
                })
                .catch((error) => {});
        },

        getOrders() {
            axios.put('/api/orders', {})
            .then(response => {
                this.order = response.data.results;
				this.subtotal = parseFloat(this.order.subtotal);
				this.shipping_cost = parseFloat(this.order.shipping_cost);
				this.conai = parseFloat(this.order.conai);
				this.iva = parseFloat(this.order.iva);
				this.total = parseFloat(this.order.total);
            })
            .catch(error => {
                console.log(error.message);
            });
        },
        
        transmitt() {
            this.$v.$touch();
            if (
                this.first_name_error.length == 0 && 
                this.last_name_error.length == 0 &&
                this.business_name_error.length == 0 &&
                this.address_error.length == 0 &&
                this.cap_error.length == 0 &&
                this.city_error.length == 0 &&
                this.cap_error.length == 0 &&
                this.province_error.length == 0 &&
                this.state_error.length == 0 &&
                this.pec_error.length == 0 &&
                this.code_sdi_error.length == 0 &&
                this.notes_error.length == 0 &&
                this.$refs.checkTerm.checked
            )
            axios.post(`/api/orders/transmit/id`, {
                user_detail: {
                    surname: this.last_name,
                    business_name: this.business_name,
                    notes: this.notes,
                    address: this.address,
                    phone: this.phone,
                    city: this.city,
                    cap: this.cap,
                    province: this.province,
                    state: this.state,
                    pec: this.pec,
                    code_sdi: this.code_sdi,
                },
                payment: {
                    amount: this.total,
                },
            })
            .then(res => {
                if (res) {
                    alert("Success transmitted!");
                    this.$router.replace({ path: '/confirm/'});
                } 
                else {
                    alert("Failed!");
                }
            });
        },
    },

    mounted() {
        this.getUserInfo();
        this.getOrders();
    },
};
</script>

<style lang="scss" scoped>
i {
    margin-left: 0.4rem;
    font-size: 0.8rem;
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
    padding: 0.2rem;
    font-size: 1.5rem;
}

textarea {
    border: none;
    outline: none;
    font-size: 1.5rem;
}

.form-group .d-flex {
    font-size: 0.8rem;
    margin: 0.5rem 0rem;
}

.form-group .d-flex input {
    width: 100%;
}

.form-group .d-flex:hover {
    color: #000;
    cursor: pointer;
}

select {
    width: 100%;
    padding: 8px 5px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

input[type="checkbox"] + label {
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
    font-size: 0.6rem;
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

#cart ~ p.text-muted {
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

.btn:disabled {
    cursor: not-allowed;
}

.wrapper .row + div.text-muted {
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
    .wrapper .row + div.text-muted {
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
    .wrapper .row + div.text-muted {
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
