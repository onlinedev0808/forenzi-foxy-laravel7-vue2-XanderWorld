<template>
	<section class="shopping-cart">
		<div class="product">
			<div class="row">
				<div class="col-md-3">
					<img class="img-fluid mx-auto d-block image"
						src="../../../public/Links/cat-scatole-maniglie-aperte.jpg" />
				</div>
				<div class="col-md-8">
					<div class="info">
						<div class="row">
							<div class="col-md-5 product-name">
								<div class="product-name">
									<a href="#">{{ detail.name }}</a>
									<div class="product-info">
										<div>
											Dimensioni:
											<span class="value">{{ detail.length }} x {{ detail.height }} x {{ detail.width }}</span>
										</div>
										<div>
											Codice:
											<span class="value">{{ detail.code }}</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 quantity">
								<label class="fw-bold" for="quantity">
									Quantity:
								</label>
								<input class="form-control quantity-input" id='quantity' type="number" v-model="quantity"/>
							</div>
							<div class="col-md-3 price">
								<div style="white-space:nowrap">
									<label for="id1">$</label>
									<input type="text" id="id1" class="priceLabel" style="border: none; box-shadow: none; background-color: white; pointer-events: none;" :value="computedPrice" readonly />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</template>

<script>
export default {
	props: ["detail"],
	data() {
		return {
			quantity: 0,
			computedPrice: 0
		}
	},
	mounted() {
		this.quantity = this.detail.quantity
	},
	watch: {
		quantity() {
			this.computedPrice = this.detail.price * this.quantity
		}
	},
	methods: {
        getOrders() {
            axios.get('/api/orders/2')
            .then(response => {
                console.log(response.data.results);
                this.order = response.data.results;
                this.order_products = response.data.results.products;
            })
            .catch(error => {
                console.log(error.message);
            });
        },
		test() {
			console.log(this.computedPrice);
		}

	},
};
</script>

<style lang="scss" scoped>
@import "../../sass/global.scss";

.product img {
	width: fit-content;
}

.coupon {
	margin: 2rem;
}

.shopping-cart {
	padding-bottom: 50px;
}

.shopping-cart .block-heading {
	padding-top: 50px;
	margin-bottom: 40px;
	text-align: start;
}

.shopping-cart .block-heading p {
	text-align: center;
	max-width: 420px;
	margin: auto;
	opacity: 0.7;
}

.shopping-cart .dark .block-heading p {
	opacity: 0.8;
}

.shopping-cart .block-heading h1,
.shopping-cart .block-heading h2,
.shopping-cart .block-heading h3 {
	margin-bottom: 1.2rem;
}

.shopping-cart .items {
	margin: auto;
}

// .shopping-cart .items .product {
// }

.shopping-cart .items .product img {
	transform: scale(0.8);
}

.shopping-cart .items .product .info {
	padding-top: 0px;
	text-align: center;
}

.shopping-cart .items .product .info .product-name {
	font-weight: 600;
}

.shopping-cart .items .product .info .product-name .product-info {
	font-size: 10px;
	margin-top: 15px;
}

.shopping-cart .items .product .info .product-name .product-info .value {
	font-weight: 400;
}

.shopping-cart .items .product .info .quantity .quantity-input {
	margin: auto;
	width: 80px;
}

.shopping-cart .items .product .info .price {
	margin-top: 15px;
	font-weight: bold;
}

.shopping-cart .summary {
	border: 1px solid lightgray;
	background-color: white;
	height: 100%;
	padding: 30px;
}

.shopping-cart .summary h3 {
	text-align: start;
	font-size: 1rem;
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
	font-size: 0.6rem;
	font-weight: 600;
}

.shopping-cart .summary .price {
	float: right;
	font-size: 0.6rem;
}

.shopping-cart .summary button {
	margin-top: 20px;
}

@media (min-width: 768px) {
	.shopping-cart .items .product .info {
		padding-top: 25px;
		text-align: left;
	}

	.shopping-cart .items .product .info .price {
		font-weight: bold;
		top: 17px;
	}

	.shopping-cart .items .product .info .quantity {
		text-align: center;
	}

	.shopping-cart .items .product .info .quantity .quantity-input {
		padding: 4px 10px;
		text-align: center;
	}

	input {
		border: 1px solid lightgray;
		outline: none;
	}
}
</style>
