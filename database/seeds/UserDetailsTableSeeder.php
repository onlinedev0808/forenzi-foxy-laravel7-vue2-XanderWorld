<?php

use App\Models\userDetail;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;

class UserDetailsTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        //! prendo tutti gli utenti
        $users = User::all();

        $levels = ['admin', 'vip-member',  'registered'];

        //! per ogni utente inserisco un dettaglio utente
        foreach ($users as $user) {
            $userDetail = new userDetail();
            $userDetail->user_id = $user->id;

            $userDetail->surname = $faker->lastName();
            $userDetail->business_name = $faker->domainName();
            $userDetail->notes = $faker->paragraph();

            $userDetail->address = $faker->address();
            $userDetail->phone = $faker->phoneNumber();
            $userDetail->city = $faker->city();
            $userDetail->cap = $faker->postcode();
            $userDetail->province = $faker->state();
            $userDetail->state = $faker->country();
            $userDetail->pec = $faker->email();
            $userDetail->code_sdi = $faker->randomNumber(8);

            if ($user->email === 'alexander.mymails@gmail.com') {
                $userDetail->admin = 'super admin';
            } else {
                $userDetail->admin = $faker->randomElement($levels);
            }

            $userDetail->save();
        }
    }
}
