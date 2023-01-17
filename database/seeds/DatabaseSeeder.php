<?php

use App\Models\Subcategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
            [
                UsersTableSeeder::class,
                UserDetailsTableSeeder::class,

                RolesTableSeeder::class,

                RoleUserTableSeeder::class,

                CategoryTableSeeder::class,
                SubcategoryTableSeeder::class,

                ProductsTableSeeder::class,

                OrdersTableSeeder::class,
                PaymentsTableSeeder::class,

                OrderProductTableSeeder::class,
            ]
        );
    }
}
