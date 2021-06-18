<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // $category = Category::create([
        //     'name' => 'Laptop',
        //     'desc' => "This portion consists of laptops only",
        // ]);

        Category::factory(5)->create();

        // Product::create([
        //     'name' => 'Dell Laptop',
        //     'desc' => "This is <span style='color: red'>description</span> for <strong>laptop</strong> Only",
        //     'price' => 300000.00,
        //     'old_price' => 310000.99,
        //     'image' => "https://picsum.photos/200/300",
        //     'category_id' => $category->id
        // ]);

        Product::factory(10)->create([
            'category_id' => random_int(0, 5),
        ]);
    }
}
