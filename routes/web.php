<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeedsController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('feeds')->group( function() {

	Route::get('/', [FeedsController::class, 'index'])->name('feeds');

	Route::get('/create', [FeedsController::class, 'create'])->name('create');

	Route::post('/', [FeedsController::class, 'store'])->name('store'); // @csrf
});

Route::get('error', function() {
	return response()->make('Hello error', 502, ['X-Eddib' => 'XXXxxxXXX']);
});
