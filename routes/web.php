<?php

use App\Models\Film;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\CategorieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [FilmController::class, 'only_4'])->name('home');
Route::get('/films', [FilmController::class, 'index'])->name('films');
Route::get('/film/{film}', [FilmController::class, 'show'])->name('film.show');
Route::get('/shearch', [FilmController::class, 'shearch'])->name('film.shearch');
Route::get('/films/realisateur/{film}', [FilmController::class, 'show_realisateur'])->name('show.realisateur');
Route::get('/films/categorie/action', [CategorieController::class, 'show_action'])->name('categorie.action');
Route::get('/films/categorie/drame', [CategorieController::class, 'show_drame'])->name('categorie.drame');

Route::get('/mentionsLegales', function(){
    return view('mention-legales');
})->name('mentionsLegales');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');



Route::middleware('auth')->group(function() {
    Route::get('/panier', [PanierController::class, 'index'])->name('panier.index');
    Route::get('/panier/add/{film}', [PanierController::class, 'store'])->name('panier.add');
    Route::get('/panier/remove/{film}', [PanierController::class, 'delet'])->name('panier.remove');
    Route::get('/panier/remove_all', [PanierController::class, 'remove_all_panier'])->name('panier.remove.all');
    Route::get('/profil', [UserController::class, 'show_profil'])->name('profil');

});


require __DIR__.'/auth.php';
