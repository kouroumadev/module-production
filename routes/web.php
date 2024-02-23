<?php

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

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/pensionnaire', [App\Http\Controllers\HomeController::class, 'PensionIndex'])->name('pension.index');
    Route::get('/prestation', [App\Http\Controllers\HomeController::class, 'prestationIndex'])->name('prestation.index');
    Route::get('/reclamation', [App\Http\Controllers\HomeController::class, 'reclamationIndex'])->name('reclamation.index');
    Route::get('/demande', [App\Http\Controllers\HomeController::class, 'demandeIndex'])->name('demande.index');
    Route::post('/pensionnaire-info', [App\Http\Controllers\HomeController::class, 'PensionnaireInfo'])->name('pensionnaire.info');
    Route::post('/pension/store', [App\Http\Controllers\PensionController::class, 'store'])->name('pension.store');
    Route::get('/pension/show', [App\Http\Controllers\PensionController::class, 'show'])->name('pension.show');

});

Route::get('/', [App\Http\Controllers\HomeController::class, 'login'])->name('login');
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'Logout'])->name('user.logout');


Route::post('/sign-in', [App\Http\Controllers\AuthController::class, 'SignIn'])->name('user.signin');
Route::get('/registration', [App\Http\Controllers\AuthController::class, 'Registration'])->name('user.registration');
Route::post('/sign-up', [App\Http\Controllers\AuthController::class, 'SignUp'])->name('user.signup');

