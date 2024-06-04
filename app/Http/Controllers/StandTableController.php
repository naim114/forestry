<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StandTableController extends Controller
{
    public function volume()
    {
        $trees = DB::table('trees')
            ->select(
                'species_groups',
                DB::raw("
                    CASE
                        WHEN diameter_dbh_cm BETWEEN 5 AND 14.999 THEN '5-15'
                        WHEN diameter_dbh_cm BETWEEN 15 AND 29.999 THEN '15-30'
                        WHEN diameter_dbh_cm BETWEEN 30 AND 44.999 THEN '30-45'
                        WHEN diameter_dbh_cm BETWEEN 45 AND 59.999 THEN '45-60'
                        ELSE '60+'
                    END AS diameter_range"
                ),
                DB::raw('ROUND(SUM(volume_m3)/100, 4) AS avg_volume_perha'),
                DB::raw('ROUND(COUNT(*)/100, 4) AS tree_count_perha')
            )
            ->groupBy('species_groups', 'diameter_range')
            ->orderBy('species_groups', 'ASC')
            ->orderBy('diameter_class')
            ->get();

        return view('dashboard.stand.volume', compact('trees'));
    }

    public function production0()
    {
        $sp_group = 7; // Number of species groups
        $d_group = 5;  // Number of diameter ranges

        $speciesGroups = [];

        for ($i = 1; $i <= $sp_group; $i++) {
            $speciesGroup = ['group' => $i, 'prod' => [], 'num' => []];

            for ($j = 1; $j <= $d_group; $j++) {
                // Fetch production data
                $prod = DB::table('trees')
                    ->select(
                        DB::raw('ROUND(SUM(PROD), 4) AS prod'),
                        DB::raw("CASE
                            WHEN diameter_dbh_cm BETWEEN 5 AND 14.999 THEN 1
                            WHEN diameter_dbh_cm BETWEEN 15 AND 29.999 THEN 2
                            WHEN diameter_dbh_cm BETWEEN 30 AND 44.999 THEN 3
                            WHEN diameter_dbh_cm BETWEEN 45 AND 59.999 THEN 4
                            ELSE 5
                        END AS diameter_range")
                    )
                    ->where('species_groups', $i)
                    ->where('status', 'CUT')
                    ->groupBy('diameter_range')
                    ->having('diameter_range', $j)
                    ->first();

                $speciesGroup['prod'][] = $prod ? round($prod->prod / 100, 4) : 0;

                // Fetch tree count data
                $treeCount = DB::table('trees')
                    ->select(
                        DB::raw('COUNT(*) AS tree_count'),
                        DB::raw("CASE
                            WHEN diameter_dbh_cm BETWEEN 5 AND 14.999 THEN 1
                            WHEN diameter_dbh_cm BETWEEN 15 AND 29.999 THEN 2
                            WHEN diameter_dbh_cm BETWEEN 30 AND 44.999 THEN 3
                            WHEN diameter_dbh_cm BETWEEN 45 AND 59.999 THEN 4
                            ELSE 5
                        END AS diameter_range")
                    )
                    ->where('species_groups', $i)
                    ->where('status', 'CUT')
                    ->groupBy('diameter_range')
                    ->having('diameter_range', $j)
                    ->first();

                $speciesGroup['num'][] = $treeCount ? round($treeCount->tree_count / 100, 4) : 0;
            }

            $speciesGroup['total_prod'] = array_sum($speciesGroup['prod']);
            $speciesGroup['total_num'] = array_sum($speciesGroup['num']);

            $speciesGroups[] = $speciesGroup;
        }

        $totals = [
            'total_prod' => array_sum(array_column($speciesGroups, 'total_prod')),
            'total_num' => array_sum(array_column($speciesGroups, 'total_num'))
        ];

        return view('dashboard.stand.production0', compact('speciesGroups', 'totals'));
    }

     public function damage()
    {
        $speciesGroups = 7;
        $diameterGroups = 5;
        $stemData = [];
        $crownData = [];

        $totaltotalstem = 0;
        $totaltotaltree_stem = 0;
        $totaltotalcrown = 0;
        $totaltotaltree_crown = 0;

        for ($i = 1; $i <= $speciesGroups; $i++) {
            $stemGroup = ['group' => $i, 'damage' => [], 'num' => [], 'total_damage' => 0, 'total_num' => 0];
            $crownGroup = ['group' => $i, 'damage' => [], 'num' => [], 'total_damage' => 0, 'total_num' => 0];

            $totalstem = 0;
            $totaltree_stem = 0;
            $totalcrown = 0;
            $totaltree_crown = 0;

            for ($j = 1; $j <= $diameterGroups; $j++) {
                // Fetching stem damage
                $stemResult = DB::table('trees')
                    ->selectRaw('ROUND(SUM(`DMG_stem`), 4) AS stem')
                    ->where('DMG_stem', '>', 0)
                    ->where('species_groups', $i)
                    ->where('diameter_class', $j)
                    ->where('status', 'VICTIM')
                    ->first();

                $stemGroup['damage'][] = $stemResult->stem ?? 0;
                $totalstem += $stemResult->stem ?? 0;

                $stemCountResult = DB::table('trees')
                    ->selectRaw('ROUND(COUNT(*), 4) AS tree_count')
                    ->where('DMG_stem', '>', 0)
                    ->where('species_groups', $i)
                    ->where('diameter_class', $j)
                    ->where('status', 'VICTIM')
                    ->first();

                $stemGroup['num'][] = $stemCountResult->tree_count ?? 0;
                $totaltree_stem += $stemCountResult->tree_count ?? 0;

                // Fetching crown damage
                $crownResult = DB::table('trees')
                    ->selectRaw('ROUND(SUM(`DMG_crown`), 4) AS crown')
                    ->where('DMG_crown', '>', 0)
                    ->where('species_groups', $i)
                    ->where('diameter_class', $j)
                    ->where('status', 'VICTIM')
                    ->first();

                $crownGroup['damage'][] = $crownResult->crown ?? 0;
                $totalcrown += $crownResult->crown ?? 0;

                $crownCountResult = DB::table('trees')
                    ->selectRaw('ROUND(COUNT(*), 4) AS tree_count')
                    ->where('DMG_crown', '>', 0)
                    ->where('species_groups', $i)
                    ->where('diameter_class', $j)
                    ->where('status', 'VICTIM')
                    ->first();

                $crownGroup['num'][] = $crownCountResult->tree_count ?? 0;
                $totaltree_crown += $crownCountResult->tree_count ?? 0;
            }

            $stemGroup['total_damage'] = $totalstem / 100;
            $stemGroup['total_num'] = $totaltree_stem / 100;
            $stemData[] = $stemGroup;
            $totaltotalstem += $totalstem;
            $totaltotaltree_stem += $totaltree_stem;

            $crownGroup['total_damage'] = $totalcrown / 100;
            $crownGroup['total_num'] = $totaltree_crown / 100;
            $crownData[] = $crownGroup;
            $totaltotalcrown += $totalcrown;
            $totaltotaltree_crown += $totaltree_crown;
        }

        $totals = [
            'total_stem' => $totaltotalstem / 100,
            'total_tree_stem' => $totaltotaltree_stem / 100,
            'total_crown' => $totaltotalcrown / 100,
            'total_tree_crown' => $totaltotaltree_crown / 100,
        ];

        return view('dashboard.stand.damage', compact('stemData', 'crownData', 'totals'));
    }
}