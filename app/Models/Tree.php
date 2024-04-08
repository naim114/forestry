<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Species;
use App\Models\SpeciesGroup;

class Tree extends Model
{
    use HasFactory;

    protected $fillable = [
        'BlockX',
        'BlockY',
        'x',
        'y',
        'TreeNum',
        'species',
        'species_groups',
        'diameter_dbh_cm',
        'diameter_class',
        'stem_height_m',
        'volume_m3',
        'status',
    ];

    public function species()
    {
        return $this->belongsTo(Species::class, 'species');
    }

    public function speciesGroup()
    {
        return $this->belongsTo(SpeciesGroup::class, 'species_groups');
    }
}