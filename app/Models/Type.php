<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project; // Importa il modello Project

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug'
    ];
    
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
