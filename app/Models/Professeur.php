<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Professeur extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'postnom', 'prenom', 'fonction', 'description', 'image', 'titre'];




    public function  courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }

    public function nomcomplet()
    {
        return $this->nom . ' - ' . $this->prenom;
    }
}