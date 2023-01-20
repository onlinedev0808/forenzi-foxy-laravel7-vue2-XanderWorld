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
            // $numberOfProducts = rand(1, count($products));
            $numberOfProducts = rand(1, 5);

            // Get a random set of products
            $selectedProducts = $products->random($numberOfProducts);

            foreach ($selectedProducts as $selectedProduct) {
                
                $order->products()->attach($selectedProduct->id, [
                    'quantity' => rand(1, 10),
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }
    }
}
