<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of factory's corresponding model.
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
        $product_name = $this->faker->unique()->words($nb=4,$asText=true);
        $slug = Str::slug($product_name);
        return [
            'name' => $product_name,
            'slug' =>$slug,
            'short_description'=>$this->faker->text(),
            'description' => $this->faker->text(500),
            'regular_price' =>$this->faker->numberBetween(2500,25000),
            'sale_price' =>$this->faker->numberBetween(250.0,2500.0),
            'SKU' => 'DIGI'.$this->faker->unique()->numberBetween(100,500),
            'stock_status' => 'En Stock',
            'quantity' => $this->faker->numberBetween(10,100),
            'image' => 'fashion_' . $this->faker->unique()->numberBetween(1,10).'.jpg',
            'images' => 'fashion_' . $this->faker->numberBetween(1,10).'.jpg',
            'category_id' => $this->faker->numberBetween(1,9),
            'subcategory_id' => $this->faker->numberBetween(1,2)
        ];
    }
}
