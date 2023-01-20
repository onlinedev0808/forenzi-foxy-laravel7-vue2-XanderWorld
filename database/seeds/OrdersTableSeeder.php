<?php

use App\Models\Order;
use App\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Carbon\Carbon;

class OrdersTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        $users = User::all();
        $status = ['in attesa', 'spedito', 'consegnato', 'annullato'];
        for ($i = 0; $i < 50; $i++) {
            $order = new Order();
            $order->user_id = $faker->randomElement($users)->id;
            $order->order_number = $faker->unique()->randomNumber(8);
            $order->status = $faker->randomElement($status);

            $order->subtotal = $faker->randomFloat(2, 0, 1000);
            $order->shipping_cost = $faker->randomFloat(2, 0, 10);
            $order->conai = $faker->randomFloat(2, 0, 50);
            $order->iva = $faker->randomFloat(2, 22, 22);

            $order->total = $faker->randomFloat(2, 10, 1000);
            $order->order_date = Carbon::now();

            $order->save();
        }
    }
}
