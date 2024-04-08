<?php

namespace App\Models;

use App\Models\Species;
use App\Models\Tree;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpeciesGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
    ];

    public function species(): HasMany
    {
        return $this->hasMany(Species::class);
    }

    public function trees(): HasMany
    {
        return $this->hasMany(Tree::class);
    }
}