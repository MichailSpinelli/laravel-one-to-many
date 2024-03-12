<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type; // Importa il modello Type

class Project extends Model
{
    use HasFactory;

    /**
     * Get the type that owns the project.
     */
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
