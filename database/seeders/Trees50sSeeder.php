<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tree;
use App\Models\Trees50;

class Trees50sSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $trees = Tree::all();

        foreach ($trees as $tree) {
            if ($tree->diameter_dbh_cm > 50 && $tree->species_groups <= 5 && $tree->species_groups != 4) {
                Trees50::create([
                    'TreeNum' => $tree->TreeNum,
                    'status' => 'CUT',
                ]);
            } else {
                Trees50::create([
                    'TreeNum' => $tree->TreeNum,
                    'status' => 'KEEP',
                ]);
            }

            // Trees50::create([
            //     'TreeNum' => $tree->TreeNum,
            //     // 'status' => $tree->status,
            //     // 'PROD' => $tree->PROD,
            //     // 'cut_angle' => $tree->cut_angle,
            //     // 'DMG_stem' => $tree->DMG_stem,
            //     // 'DMG_crown' => $tree->DMG_crown,
            //     // 'D30' => $tree->D30,
            //     // 'V30' => $tree->V30,
            // ]);
        }

    }
}