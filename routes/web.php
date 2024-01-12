<?php

use App\Livewire\Formulario;
use Illuminate\Support\Facades\Route;

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

Route::middleware([

    'auth:sanctum',

    config('jetstream.auth_session'),
    'verified',


])->group(function () {
 Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    /*
    Route::get('/index',Formulario::class)->name('dashboard')->lazy();
        // Con ->lazy() indicamos que esa pagina en ese controlador, tiene una carga lenta
        // Con ->lazy(enabled: false), indicamos que  la pagina en ese controlador no va ser de recarga lenta (aun teniendo en el controlador #[Lazy]
    Route::view('/SPA','viewSpa')->name('viewSpa');
*/
    Route::view('/SPA','viewSpa')->name('viewSpa');
    });





