<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Realisateur;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::get();
        $films->load('acteurs', 'categorie');
        return view('films', compact('films'));

    }

    public function only_4(){

        $films = Film::inRandomOrder()->Limit(4)->get();
        $films->load('acteurs', 'categorie');
        return view('index', compact('films'));

    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFilmRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFilmRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        return (view('film.show', compact('film')));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFilmRequest  $request
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFilmRequest $request, Film $film)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        //
    }

    public function shearch(){
        $q = request()->input('q');
        $films = array();
        $films = Film::where('title','like', "%$q%")->orWhere('realisateur', 'like', "%$q%")->get();
        
        
        return view('film.shearch', compact('films', 'q'));
    }

    public function show_realisateur(Film $film){
        $films = Film::where('realisateur', $film->realisateur)->paginate();
        $q = $film->realisateur;
        return view('film.shearch', compact('films', 'q'));

    }
}
