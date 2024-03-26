<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntryTreemark extends Model
{
    use HasFactory;

    protected $fillable = [
        'con_id',
        'coupe',
        'block_num',
        'line_num',
        'tree_num',
        'species',
        'diameter',
        'stem_height',
        'num_log',
        'log_quality',
        'dx',
        'dy',
        'left_right',
        'north_south',
        'ux',
        'uy',
        'cut_degree',
        'status',
    ];
}
