<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AlbumControllerRest;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ArtistControllerRest;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\GenreControllerRest;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\PublisherControllerRest;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserControllerRest;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::apiResource('users',UserController::class);
// Route::apiResource('albums',AlbumController::class);
// Route::apiResource('artists',ArtistController::class);
// Route::apiResource('genres',GenreController::class);
// Route::apiResource('publishers',PublisherController::class);

//REST api routes
Route::resource('albums', AlbumControllerRest::class);
Route::resource('genres', GenreControllerRest::class);
Route::resource('artists', ArtistControllerRest::class);
Route::resource('publishers', PublisherControllerRest::class);
Route::resource('users', UserControllerRest::class);

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });
    Route::resource('albums', AlbumController::class)->only(['store']);
    Route::get('albums/{id}', [AlbumController::class, 'show'])->name('show');
    Route::put('albums/{id}', [AlbumController::class, 'update'])->name('update');
    Route::delete('albums/{id}', [AlbumController::class, 'destroy'])->name('destroy');
    Route::post('/logout', [AuthController::class, 'logout']);
});
