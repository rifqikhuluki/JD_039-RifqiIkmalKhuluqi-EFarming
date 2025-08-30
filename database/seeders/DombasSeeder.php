<?php

namespace Database\Seeders;

use App\Models\dombas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DombasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        dombas::factory()->count(10)->create();
    }
}
