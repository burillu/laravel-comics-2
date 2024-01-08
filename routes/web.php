<?php

use App\Http\Controllers\ComicController;
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

    return to_route('comics.index');
})->name('home');

Route::get('/characters', function () {
    $message = 'Hello Dc Comics';
    return view('characters', compact('message'));
})->name('characters');

// Route::get('/comics', function () {
//     $comics = config('comics.comics');
//     return view('comics.index', compact('comics'));
// })->name('comics');



// // comic detail
// Route::get('/comics/{index}', function ($index) {
//     $comics = config('comics.comics');

//     //controllo che non ci siano errori nel valore
//     if ($index >= 0 && $index < count($comics)) {
//         //prendo il comic con quell'indice
//         $comic = $comics[$index];
//         return view('comics.show', compact('comic'));
//     } else {
//         abort(404);
//     }
// })->name('comics.show');

Route::resource('comics', ComicController::class);

Route::get('/movies', function () {
    $comics = config('comics.comics');
    return view('comics.index', compact('comics'));
})->name('movies');

Route::get('/tv', function () {
    $comics = config('comics.comics');
    return view('comics.index', compact('comics'));
})->name('tv');

Route::get('/games', function () {
    $comics = config('comics.comics');
    return view('comics.index', compact('comics'));
})->name('games');

Route::get('/collectibles', function () {
    $comics = config('comics.comics');
    return view('comics.index', compact('comics'));
})->name('collectibles');

Route::get('/videos', function () {
    $comics = config('comics.comics');
    return view('comics.index', compact('comics'));
})->name('videos');

Route::get('/fans', function () {
    $comics = config('comics.comics');
    return view('comics.index', compact('comics'));
})->name('fans');

Route::get('/news', function () {
    $comics = config('comics.comics');
    return view('comics.index', compact('comics'));
})->name('news');

Route::get('/shop', function () {
    $comics = config('comics.comics');
    return view('comics.index', compact('comics'));
})->name('shop');