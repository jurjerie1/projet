<?php

namespace App\Models;

use App\Models\Film;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Panier extends Model
{
    use HasFactory;

    protected $fillable = [
        'film_id',
        'user_id',
    ];

    
    public function film(){
        return $this->belongsTo(Film::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}
