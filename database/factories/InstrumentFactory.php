<?php

namespace Database\Factories;

use App\Models\Instrument;
use App\Models\InstrumentCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Instrument>
 */
class InstrumentFactory extends Factory
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
            'instrument_category_id' => InstrumentCategory::all()->random()->id,
            'active' => $this->faker->boolean(),
        ];
    }
}
