<?php

use App\Http\Controllers\EcomerceController;
use App\Http\Controllers\PlacesController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();
Route::get('/places', [PlacesController::class, 'index'])->name('places_index');
Route::post('/places/create', [PlacesController::class, 'store'])->name('form_store');

Route::get('/get_cities', [PlacesController::class, 'get_cities'])->name('get_cities');
Route::get('/get_districts', [PlacesController::class, 'get_districts'])->name('get_districts');

Route::any('/ecomerce', [EcomerceController::class, 'index'])->name('ecomerce.index');
Route::any('/ecomerce/list', [EcomerceController::class, 'list'])->name('ecomerce.list');
Route::get('/ecomerce/create', [EcomerceController::class, 'create'])->name('ecomerce.create');
Route::post('/ecomerce/create', [EcomerceController::class, 'store'])->name('ecomerce.store');
Route::get('/ecomerce/{id}/edit', [EcomerceController::class, 'edit'])->name('ecomerce.edit');
Route::patch('/ecomerce/{id}/edit', [EcomerceController::class, 'update'])->name('ecomerce.update');
Route::delete('/ecomerce/{id}', [EcomerceController::class, 'destroy'])->name('ecomerce.destroy');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');