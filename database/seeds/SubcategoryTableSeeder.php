<?php

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class SubcategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories = Category::all();
        for ($i = 0; $i < 30; $i++) {
            $subcategory = new Subcategory();
            $subcategory->name = $faker->unique()->word;
            $subcategory->description = $faker->paragraph;
            $subcategory->category_id = $faker->randomElement($categories)->id;
            $subcategory->save();
        }
    }
}
