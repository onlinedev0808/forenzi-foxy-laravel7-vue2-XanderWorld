<template>
    <div>
        <div class="d-flex">
            <div class="right">
                <div class="d-flex">
                    <div class="w-75">
                        <h2 class="fw-bold">{{ category.name }}</h2>
                        <h6 class="fw-bold">
                            {{ category.description }}
                        </h6>
                        <!-- <div class="stars">
                        <i v-for="n in 5" :key="n" class="far fa-star"></i>
                    </div> -->
                        <div class="d-flex align-items-center">
                            <span>da </span>
                            <h3 class="p-2">€ 2,08</h3>
                            <span>IVA esclusa</span>
                        </div>
                        <p>
                            {{ category.description }}
                        </p>
                    </div>
                    <div class="w-25 p-5">
                        <img
                            class="img-fluid"
                            :src="category.img"
                            alt=""
                        />
                    </div>
                </div>

                <!-- <div class="d-flex text-center fs-5">
                    <div class="orange w-60 p-2 m-1">
                        <i class="fas fa-info-circle"> </i
                        ><strong> SCONTO </strong><span>FOX</span
                        ><strong>TOP </strong>
                        <span>
                            > Seleziona per vedere il prezzo in anteprima
                        </span>
                    </div>
                    <div class="orange w-20 p-2 m-1">
                        <input type="checkbox" />
                        <strong> SCONTO 5%</strong> Totale ordine fino a €999
                    </div>
                    <div class="orange w-20 p-2 m-1">
                        <input type="checkbox" />
                        <strong>SCONTO 10%</strong> Totale ordine da €1.000
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            value: 100,
            category: {},
        };
    },
    methods: {
        increaseValue() {
            this.value += 10;
        },
        decreaseValue() {
            this.value -= 10;
        },
        getCategory() {
            axios
                .get(`/api/categories/${this.$route.params.id}`)
                .then((response) => {
                    this.category = response.data.results;
                    console.log(this.category);
                })
                .catch((error) => {
                    console.warn(error.message);
                });
        },
    },
    created() {
        this.getCategory();
    },
    mounted() {
        window.scrollTo(0, 0);
    },
};
</script>

<style lang="scss" scoped>
input[type="checkbox"] {
    border: 0;
    width: 20px;
    height: 20px;
}
// NAV BAR
nav {
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    padding: 1rem;
    margin: 1rem;
    border-bottom: 1px solid lightgray;

    a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
        font-size: 0.8rem;
        transition: all 0.2s;

        &:hover {
            color: #0076ff;
        }

        &.active {
            border-bottom: 5px solid #000;
        }
    }
}

// TABLE
table {
    width: -webkit-fill-available;
}

.alternating-rows tr:nth-child(odd) {
    background-color: rgba(211, 211, 211, 0.5);
}

.alternating-rows tr:nth-child(even) {
    background-color: white;
}

td {
    padding: 8px;
}

.td1 {
    font-weight: bold;
    width: 30%;
}

.td2 {
    color: orange;
    font-weight: bold;
}
</style>
