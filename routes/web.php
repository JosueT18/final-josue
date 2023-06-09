<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AlumnosController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/', function () {
    return view('auth.login');
});

/* Auth::routes(); */

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(AlumnosController::class)->group(function(){
    Route::get('/index', 'index');
    Route::get('/alumnos/create', 'create');
    Route::post('/alumnos/store', 'store')->name('alumnos.store');
    Route::get('/alumnos/show/{id}', 'show');
    Route::get('/alumnos/edit/{id}', 'edit');
    Route::put('/alumnos/update/{id}', 'update');
    Route::delete('/alumnos/delete/{id}', 'destroy')->name('alumnos.destroy');
    
});
Auth::routes();

/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */
