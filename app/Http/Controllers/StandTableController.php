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
}