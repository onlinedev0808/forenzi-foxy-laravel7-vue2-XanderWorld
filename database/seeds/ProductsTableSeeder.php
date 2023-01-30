<?php

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $categories = Category::all();
        $subcategories = Subcategory::all();

        $colors = ['bianca', 'avana'];
        $prints = ['personalizzata', 'neutra'];

        $purchasable_in_multi_of = [20, 50, 100, 200];

        for ($i = 0; $i < 15; $i++) {
            $newProduct = new Product();
            $newProduct->code = $faker->unique()->randomNumber(8);
            $newProduct->name = $faker->name;
            $newProduct->length = $faker->randomFloat(2, 10, 1000);
            $newProduct->height = $faker->randomFloat(2, 10, 1000);
            $newProduct->width = $faker->randomFloat(2, 10, 1000);
            $newProduct->color = $faker->randomElement($colors);
            $newProduct->print = $faker->randomElement($prints);
            $newProduct->description = $faker->paragraph;
            $newProduct->price = $faker->randomFloat(2, 10, 1000);
            $newProduct->quantity = $faker->randomNumber(3);
            $newProduct->img = $faker->imageUrl(640, 480);
            $newProduct->created_at = Carbon::now();
            $newProduct->updated_at = Carbon::now();
            $newProduct->mini_description = $faker->sentence;
            $newProduct->price_saled = $faker->randomFloat(2, 10, 1000);
            $newProduct->weight = $faker->randomFloat(2, 10, 1000);
            $newProduct->first_price = $faker->randomFloat(2, 10, 1000);
            $newProduct->second_price = $faker->randomFloat(2, 10, 1000);
            $newProduct->third_price = $faker->randomFloat(2, 10, 1000);
            $newProduct->fourth_price = $faker->randomFloat(2, 10, 1000);
            $newProduct->purchasable_in_multi_of = $faker->randomElement($purchasable_in_multi_of);
            $newProduct->category_id = $faker->randomElement($categories)->id;
            $newProduct->subcategory_id = $faker->randomElement($subcategories)->id;
            $newProduct->save();
        }
    }
}
