<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('welcome');
});

Route::post('/ajouter-offre-emploi', [AdminController::class, 'ajoutOffreEmploi']);
Route::post('/supprimer-offre-emploi/{id}', [AdminController::class, 'supOffreEmploi']);

Route::post('/ajouter-salle', [AdminController::class, 'ajoutSalle']);
Route::post('/supprimer-salle/{id}', [AdminController::class, 'supSalle']);

Route::post('/ajouter-type-offre', [AdminController::class, 'ajoutTypeOffre']);
Route::post('/supprimer-type-offre/{id}', [AdminController::class, 'supTypeOffre']);
