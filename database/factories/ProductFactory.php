<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'ProductID' => $this->faker->numberBetween(2,0),
            'BrandID' => $this->faker->numberBetween(2,0),
            'CategoryID' => $this->faker->numberBetween(2,0),
            'name' => $this->faker->username,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 10, 100),
            'category_id' => function () {
                // Ambil ID acak dari model Category yang sudah ada
                return Category::inRandomOrder()->first()->id;
            },
        ];
    }
}
