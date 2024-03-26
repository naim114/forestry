<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SpeciesGroup;

class SpeciesGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SpeciesGroup::create([
            'name' => 'Mersawa',
        ]);

        SpeciesGroup::create([
            'name' => 'Keruing',
        ]);

        SpeciesGroup::create([
            'name' => 'Dip Commercial',
        ]);

        SpeciesGroup::create([
            'name' => 'Dip NonCommercial',
        ]);

        SpeciesGroup::create([
            'name' => 'NonDip Commercial',
        ]);

        SpeciesGroup::create([
            'name' => 'NonDip NonCommercial',
        ]);

        SpeciesGroup::create([
            'name' => 'Others',
        ]);
    }
}