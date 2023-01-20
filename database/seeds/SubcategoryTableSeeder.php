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

        $subcategories = [
            'subcategory1', 'subcategory2', 'subcategory3', 'subcategory4', 'subcategory5', 'subcategory6', 'subcategory7', 'subcategory8', 'subcategory9', 'subcategory10',
            'subcategory11', 'subcategory12', 'subcategory13', 'subcategory14', 'subcategory15', 'subcategory16', 'subcategory17', 'subcategory18', 'subcategory19',
        ];

        foreach ($subcategories as $subcategory) {
            $newSubcategory = new Subcategory();
            $newSubcategory->name = $subcategory;
            $newSubcategory->description = $faker->paragraph;
            $newSubcategory->category_id = $faker->randomElement($categories)->id;
            $newSubcategory->save();
        }
    }
}
