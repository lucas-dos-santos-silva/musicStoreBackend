<?php

namespace Database\Seeders;

use App\Models\AccessoryCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccessoryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AccessoryCategory::factory(50)->create();
    }
}
