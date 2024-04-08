<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SpeciesGroup;
use App\Models\Tree;

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

    public function speciesGroup()
    {
        return $this->belongsTo(SpeciesGroup::class, 'species_groups');
    }

    public function trees(): HasMany
    {
        return $this->hasMany(Tree::class);
    }
}