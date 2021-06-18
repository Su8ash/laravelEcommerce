<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->unique()->word(),
            'desc' => $this->faker->sentence(),
            // 'image' => "https://picsum.photos/200/300",
            'price' => $this->faker->randomDigit() * 5.8,
            'old_price' => $this->faker->randomDigit() * 4.9,
            'category_id' => 1,
        ];
    }
}
