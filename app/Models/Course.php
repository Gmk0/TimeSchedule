<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    use HasFactory;


    protected $fillable = ['intitule', 'faculte', 'promotion', 'heures', 'option', 'professeur_id'];



    public function professeur(): BelongsTo
    {
        return $this->belongsTo(Professeur::class);
    }
}