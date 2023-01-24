<?php

use App\Models\Category;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories = ['1 ONDA', '2 ONDE', 'ECOLOGICHE', 'ECOMMERCE', 'NATALIZIE', 'CONFEZIONI', 'IMBALLAGGIO'];
        $colors = ['orange-box', 'yellow-box', 'gray-box'];
        $image = ['https://www.freepnglogos.com/uploads/box-png/box-new-used-gaylord-boxes-for-sale-reliable-industries-llc-22.png'];
        $logo = ['https://assets.msn.com/weathermapdata/1/static/svg/72/v6/card/SunnyDayV3.svg'];

        foreach ($categories as $category) {
            $newCategory = new Category();
            $newCategory->name = $category;
            $newCategory->description = $faker->sentence(10);
            $newCategory->color = $faker->randomElement($colors);
            $newCategory->img = $faker->randomElement($image);
            $newCategory->img2 = $faker->randomElement($logo);
            $newCategory->save();
        }
    }
}
