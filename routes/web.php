<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ingatlanok;
use App\Http\Controllers\Kategoriak;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::apiResource('/ingatlanok', Ingatlanok::class);
Route::put('/ingatlanok/{id}', [Ingatlanok::class, 'update']);
Route::post('ingatlanok', [Ingatlanok::class, 'store']);
Route::delete('/ingatlanok/{id}', [Ingatlanok::class, 'destroy']);


Route::apiResource('/kategoriak', Kategoriak::class);
Route::put('/kategoriak/{id}', [Kategoriak::class, 'update']);
Route::post('kategoriak', [Kategoriak::class, 'store']);
Route::delete('/kategoriak/{id}', [Kategoriak::class, 'destroy']);

