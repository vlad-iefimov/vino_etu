<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Users API
Route::get('/users', 'UserController@index');
Route::get('/users/{user}', 'UserController@show');
Route::get('/users/{user}/celliers', 'UserController@showCelliers');
Route::post('/users', 'UserController@store');
Route::put('/users/{user}', 'UserController@update');
Route::delete('/users/{user}', 'UserController@destroy');
// End Utilisateur API

// SAQ API
Route::get('/saq', 'SAQController@getProduits');
Route::post('/saq', 'SAQController@ajouterProduit');
// End SAQ API

// Bouteille API
// Route::get('/bouteilles', 'BouteilleController@index');
// Route::get('/bouteilles/{bouteille}', 'BouteilleController@show');
// Route::post('/bouteilles', 'BouteilleController@store');
// Route::put('/bouteilles/{bouteille}', 'BouteilleController@update');
// Route::delete('/bouteilles/{bouteille}', 'BouteilleController@destroy');
Route::apiResource("bouteilles", "BouteilleController");
// End Bouteille API


// Cellier API
Route::get('/celliers', 'CellierController@index');
Route::get('/celliers/{id-user}', 'CellierController@showByUser');
Route::get('/celliers/{cellier}', 'CellierController@show');
Route::post('/celliers', 'CellierController@store');
Route::put('/celliers/{cellier}', 'CellierController@update');
Route::delete('/celliers/{cellier}', 'CellierController@destroy');
// End Cellier API

// CelliersBouteille API
Route::get('/celliers/{cellier}/bouteilles', 'CellierBouteilleController@index');
Route::get('/celliers/{cellier}/bouteilles/{bouteille}', 'CellierBouteilleController@show');
Route::post('/celliers/{cellier}/bouteilles', 'CellierBouteilleController@store');
Route::put('/celliers/{cellier}/bouteilles/{bouteille}', 'CellierBouteilleController@update');
//Route::put('/celliers/{cellier}/bouteilles/{bouteille}', 'CellierBouteilleController@update');
Route::delete('/celliers/{cellier}/bouteilles/{bouteille}', 'CellierBouteilleController@destroy');
// End CelliersBouteille API

Route::fallback(function(){
    return response()->json(["erreur"=>"404 - page non trouvée"]);
});



