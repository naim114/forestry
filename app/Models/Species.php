<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'species_groups',
        'roy_class',
        'comm_gr',
        'dip',
    ];
}
