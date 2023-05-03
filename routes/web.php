<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\VistasTracking;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', VistasTracking::class)->name('dashboard');
});
Route::get('prueba/{nombre}', VistasTracking::class)->name('prueba');
