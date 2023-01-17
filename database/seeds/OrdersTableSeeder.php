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
        $status = ['pending', 'shipped', 'delivered', 'cancelled'];
        for ($i = 0; $i < 50; $i++) {
            $order = new Order();
            $order->user_id = $faker->randomElement($users)->id;
            $order->order_number = $faker->unique()->randomNumber(8);
            $order->status = $faker->randomElement($status);
            $order->total = $faker->randomFloat(2, 10, 1000);
            $order->order_date = Carbon::now();
            $order->save();
        }
    }
}
