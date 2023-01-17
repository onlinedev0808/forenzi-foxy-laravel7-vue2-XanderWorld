<?php

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Seeder;

class OrderProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get all orders and products
        $orders = Order::all();
        $products = Product::all();

        foreach ($orders as $order) {
            // Get a random number of products for the order
            $numberOfProducts = rand(1, count($products));

            // Get a random set of products
            $selectedProducts = $products->random($numberOfProducts);

            foreach ($selectedProducts as $selectedProduct) {
                // Attach the products to the order and save the pivot table data
                $order->products()->attach($selectedProduct->id, [
                    'quantity' => rand(1, 100),
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }
    }
}
