<?php

namespace Database\Factories;

use App\Models\AccessoryCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Accessory>
 */
class AccessoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'accessory_category_id' => AccessoryCategory::all()->random()->id,
            'active' => $this->faker->boolean(),
        ];
    }
}
