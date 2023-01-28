<template>
	<section class="shopping-cart">
		<div class="container">
			<div class="block-heading">
				<h2 class="display-5 fw-bold">IL TUO CARRELLO</h2>
			</div>

			<div class="content">
				<div class="row">
					<div class="col-md-12 col-lg-8">
						<div class="items" v-for="item in order.products">
							<CartItem :detail="item"/>
							<!-- <div class="product">
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
														<a href="#">{{ item.name }}</a>
														<div class="product-info">
															<div>
																Dimensioni:
																<span class="value">{{ item.length }} x {{ item.height }} x {{ item.width }}</span>
															</div>
															<div>
																Codice:
																<span class="value">{{ item.code }}</span>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-4 quantity">
													<label class="fw-bold" for="quantity">
														Quantity:
													</label>
													<input class="form-control quantity-input" id='quantity' type="number" @change="test" v-model="item.quantity"/>
												</div>
												<div class="col-md-3 price">
													<label>${{ item.quantity * item.price }}</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div> -->
							<hr />
						</div>
						<!-- <div class="d-flex justify-content-between">
																		<form class="coupon d-flex">
																						<input
																										placeholder="Codice Coupon"
																										type="text"
																						/>
																						<button class="btn bg-yellow" type="submit">
																										APPLICA COUPON
																						</button>
																		</form>
																		<form class="coupon d-flex">
																						<button class="btn bg-yellow" type="submit">
																										AGGIORNA IL CARRELLO
																						</button>
																		</form>
														</div> -->
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="summary d-flex flex-column">
							<h3>TOTALE A CARRELLO</h3>
							<div class="summary-item">
								<span class="text">SUBTOTALE</span>
								<span class="price">${{ order.subtotal.toString() }}</span>
							</div>
							<!-- <div class="summary-item">
																						<span class="text">FOXTOP - SCONTO 5%</span>
																						<span class="price">$0</span>
																		</div> -->
							<!-- <div class="summary-item">
																						<span class="text"
																										>ABBONAMENTO FOXTOP - VALIDO 1 ANNO</span
																						>
																						<span class="price">$0</span>
																		</div> -->
							<div class="summary-item">
								<span class="text">SPEDIZIONE GRATUITA</span>
								<span class="price">${{ order.shipping_cost }}</span>
							</div>
							<div class="summary-item">
								<span class="text">CONTRIBUTO CONAI</span>
								<span class="price">${{ order.conai }}</span>
							</div>
							<div class="summary-item">
								<span class="text">IVA</span>
								<span class="price">${{ order.iva }}</span>
							</div>
							<div class="summary-item txt-orange d-flex align-items-center justify-content-between">
								<span class="text">TOTALE ORDINE</span>
								<span class="price">${{ order.total }}</span>
							</div>
							<hr />
							<a type="button" class="btn bg-yellow fw-bold btn-lg btn-block" href="/checkout">
								PROCEDI AL CHECKOUT
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</template>

<script>
import CartItem from './CartItem';

export default {
	components: {
        CartItem,
    },
	data() {
		return {
			products: [],
			price: 120,
            order: {},
            order_products: [],
		}
	},
	computed: {
		price() {
			return item.quantity * item.price
		}
	},
	methods: {
        getOrders() {
            axios.get('/api/orders/2')
            .then(response => {
                console.log("+++++", response.data.results);
                this.order = response.data.results;
                this.order_products = response.data.results.products;
            })
            .catch(error => {
                console.log(error.message);
            });
        },
		// getOrderProducts() {
		// 	axios.get('api/orders/2')
		// 	.then(res => {
				
		// 	});
		// },
		test() {
			this.$forceUpdate();
		},	

	},
  mounted() {
    // console.log(cookie);
    axios.get('/api/users')
    .then(res => {
      console.log(res);
    });
    this.getOrders();
  },
//   computed: {
// 	totalPrice() {
// 		return this.quantity * this.price;
// 	}
//   }
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
