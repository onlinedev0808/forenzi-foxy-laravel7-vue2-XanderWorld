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
        $categories = ['category1', 'category2', 'category3', 'category4', 'category5', 'category6', 'category7'];
        $colors = ['orange-box', 'yellow-box', 'gray-box'];

        foreach ($categories as $category) {
            $newCategory = new Category();
            $newCategory->name = $category;
            $newCategory->description = $faker->sentence(10);
            $newCategory->color = $faker->randomElement($colors);
            $newCategory->img = $faker->imageUrl(800, 600, 'cats');
            $newCategory->img2 = $faker->imageUrl(800, 600, 'cats');
            $newCategory->save();
        }
    }
}
