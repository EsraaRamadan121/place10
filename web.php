<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('place', [PlaceController::class, 'index']);
Route::get('blog', [PlaceController::class, 'blog']);
Route::get('blog1', [PlaceController::class, 'blog1']);
Route::get('dataentry', [PlaceController::class, 'data'])->name('data');
Route::post('dataentry',[PlaceController::class, 'store'])->name('store');
Route::get('blog', [PlaceController::class, 'show']);
Route::get('placelist', [PlaceController::class, 'place']);
Route::get('delete/{id}',[PlaceController::class,'destroy'])->name('delete');
Route::get('trashed',[PlaceController::class,'trashed']);
Route::get('restore/{id}',[PlaceController::class,'restore']);
Route::get('forcedeleted/{id}',[PlaceController::class,'forcedeleted']);
