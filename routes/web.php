<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConnexionController;

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

Route::get('/login', [ConnexionController::class, 'index'])->name('login');

Route::post('/login', [ConnexionController::class, 'traitement']);

Route::get('/deconnexion', [ConnexionController::class, 'deconnexion'])->middleware(['auth'])->name('deconnexion');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware(['auth']);

Route::get('/qrcode', function () {
    return view('qrcode');
})->middleware(['auth'])->name('qrcode');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
