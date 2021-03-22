<?php

namespace Database\Seeders;

use App\Models\Pintura;
use Illuminate\Database\Seeder;

class PinturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pintura::factory()
            ->count(10)
            ->create();
    }
}
