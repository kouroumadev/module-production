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
    Route::get('/pension/details/{id}', [App\Http\Controllers\PensionController::class, 'details'])->name('pension.details');

    // DEPARTEMENT
    Route::get('/dept/index', [App\Http\Controllers\AdminController::class, 'deptIndex'])->name('dept.index');
    Route::post('/dept/store', [App\Http\Controllers\AdminController::class, 'deptStore'])->name('dept.store');

    // UTILISATEUR
    Route::get('/user/index', [App\Http\Controllers\AdminController::class, 'userIndex'])->name('user.index');
    Route::post('/user/store', [App\Http\Controllers\AdminController::class, 'userStore'])->name('user.store');

    // DOCUMENTS
    Route::get('/doc/index', [App\Http\Controllers\AdminController::class, 'docIndex'])->name('doc.index');
    Route::post('/doc/store', [App\Http\Controllers\AdminController::class, 'docStore'])->name('doc.store');

    //DIPRESS PRESTATIONS
    Route::get('/dipress/pension', [App\Http\Controllers\DipressController::class, 'vieillesse'])->name('dipress.vieillesse');
    Route::get('/dipress/maladie', [App\Http\Controllers\DipressController::class, 'maladie'])->name('dipress.maladie');
    Route::get('/dipress/risque', [App\Http\Controllers\DipressController::class, 'risque'])->name('dipress.risque');
    Route::get('/dipress/prestation-familiale', [App\Http\Controllers\DipressController::class, 'prestation'])->name('dipress.prestation');

    //DIPESS/CONTENT
    Route::get('dipress/pension/content', [App\Http\Controllers\DipressController::class, 'pensionContent'])->name('dipress.pension.content');
    Route::get('/dipress/pension/cotisation-info/{id}', [App\Http\Controllers\DipressController::class, 'PensionneCotisationInfo'])->name('pensionne.cotisation.info');

    // DIPRESS
    Route::get('/dipress/etude/index', [App\Http\Controllers\DipressController::class, 'etudeIndex'])->name('etude.index');
    Route::get('/dipress/etude/traitement/{id}', [App\Http\Controllers\DipressController::class, 'etudeTraitement'])->name('etude.traitement');
    Route::get('/dipress/mise-a-retraite/create/{id}', [App\Http\Controllers\DipressController::class, 'miseRetraiteCreate'])->name('miseRetaite.create');

    // TRACKING
    Route::post('/dipress/store', [App\Http\Controllers\TransferController::class, 'store'])->name('transfert.store');

});

Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'Logout'])->name('user.logout');


Route::post('/sign-in', [App\Http\Controllers\AuthController::class, 'SignIn'])->name('user.signin');
Route::get('/registration', [App\Http\Controllers\AuthController::class, 'Registration'])->name('user.registration');
Route::post('/sign-up', [App\Http\Controllers\AuthController::class, 'SignUp'])->name('user.signup');

