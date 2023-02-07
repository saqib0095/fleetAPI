<?php

use App\Http\Controllers\Movies;
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

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */
Route::post('/upload',[Movies::class,'upload']);
Route::get('/getMovie/{title}',[Movies::class,'getMovie']);
Route::get('/getReleaseYear/{year}',[Movies::class,'getReleaseYear']);
Route::get('/getGenre/{genre}',[Movies::class,'getGenre']);
Route::delete('/deleteMovie/{title}',[Movies::class,'deleteMovie']);