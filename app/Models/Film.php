<?php

namespace App\Models;

use App\Models\User;
use App\Models\Acteur;
use App\Models\Panier;
use App\Models\Categorie;
use App\Models\Realisateur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Film extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'prix',
        'description',
        "realisateur_id",
        "categorie_id",
    ];


    public function acteurs(){
        return $this->belongsToMany(Acteur::class);
    }

    
    
    public function paniers(){
        return $this->hasMany(Panier::class);
    }

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
}

