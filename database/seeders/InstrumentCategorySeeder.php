<?php

namespace Database\Seeders;

use App\Models\InstrumentCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstrumentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InstrumentCategory::factory(50)->create();
    }
}
