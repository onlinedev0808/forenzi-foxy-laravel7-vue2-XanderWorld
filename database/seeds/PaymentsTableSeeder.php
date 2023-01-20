<?php

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $orders = Order::all();
        $methods = ['Bonifico', 'Contrassegno', 'PayPal'];
        $status = ['successo', 'fallito', 'in attesa'];
        foreach ($orders as $order) {
            $payment = new Payment();
            $payment->transaction_id = $faker->randomNumber(8);
            $payment->amount = $order->total;
            $payment->payment_method = $faker->randomElement($methods);
            $payment->payment_status = $faker->randomElement($status);
            $payment->order_id = $order->id;
            $payment->save();
        }
    }
}
