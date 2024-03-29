<?php
use App\Http\Controllers\Guest\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/dettaglio_film/{id}', [PageController::class, 'movieDetail'])->name('movieDetail');
Route::get('/genere_thriller', [PageController::class, 'thrillers'])->name('thrillers');
Route::get('/genere_Si-Fi',[PageController::class, 'scienceFictions'])->name('scienceFictions');
Route::get('/genere_drama', [PageController::class, 'dramas'])->name('dramas');
Route::get('/genere_bambini', [PageController::class, 'kids'])->name('kids');
