<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategorieController extends Controller

{
    public function show_action(){
        $films = Film::where('categorie_id', 1)->get();
        return view('films', compact('films'));
        
    }

    public function show_drame(){
        $films = Film::where('categorie_id', 2)->get();
        return view('films', compact('films'));
    }
}
