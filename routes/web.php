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
    Route::post('/first-login', [
        App\Http\Controllers\AuthController::class,
        'firstLogin',
    ])->name('first-login');
    Route::get('/charge-first-login', [
        App\Http\Controllers\AuthController::class,
        'ChargefirstLogin',
    ])->name('charge-first-login');
    Route::get('/dashboard', [
        App\Http\Controllers\HomeController::class,
        'dashboard',
    ])->name('dashboard');
    Route::get('/pensionnaire', [
        App\Http\Controllers\HomeController::class,
        'PensionIndex',
    ])->name('pension.index');
    Route::get('/prestation', [
        App\Http\Controllers\HomeController::class,
        'prestationIndex',
    ])->name('prestation.index');
    Route::get('/reclamation', [
        App\Http\Controllers\HomeController::class,
        'reclamationIndex',
    ])->name('reclamation.index');
    Route::get('/demande', [
        App\Http\Controllers\HomeController::class,
        'demandeIndex',
    ])->name('demande.index');
    Route::post('/pensionnaire-info', [
        App\Http\Controllers\HomeController::class,
        'PensionnaireInfo',
    ])->name('pensionnaire.info');

    // /////////// ADMIN /////////////

    // DEPARTEMENT
    Route::get('/dept/index', [
        App\Http\Controllers\AdminController::class,
        'deptIndex',
    ])->name('dept.index');
    Route::post('/dept/store', [
        App\Http\Controllers\AdminController::class,
        'deptStore',
    ])->name('dept.store');

    // UTILISATEUR
    Route::get('/user/index', [
        App\Http\Controllers\AdminController::class,
        'userIndex',
    ])->name('user.index');
    Route::post('/user/store', [
        App\Http\Controllers\AdminController::class,
        'userStore',
    ])->name('user.store');
    Route::get('/user/reset/{id}', [
        App\Http\Controllers\AdminController::class,
        'userReset',
    ])->name('user.reset');
    Route::get('/user/suspended/{id}', [
        App\Http\Controllers\AdminController::class,
        'userSuspended',
    ])->name('user.suspended');
    Route::get('/user/update/{id}', [
        App\Http\Controllers\AdminController::class,
        'userUpdate',
    ])->name('user.update');

    // DEADLINE
    Route::get('/deadline/index', [
        App\Http\Controllers\AdminController::class,
        'DeadlineIndex',
    ])->name('deadline.index');
    Route::post('/deadline/store', [
        App\Http\Controllers\AdminController::class,
        'DeadlineStore',
    ])->name('deadline.store');

    // DOCUMENTS
    Route::get('/doc/index', [
        App\Http\Controllers\AdminController::class,
        'docIndex',
    ])->name('doc.index');
    Route::post('/doc/store', [
        App\Http\Controllers\AdminController::class,
        'docStore',
    ])->name('doc.store');

    // PRESTATIONS ADMIN
    Route::get('/prest/index', [
        App\Http\Controllers\AdminController::class,
        'PrestIndex',
    ])->name('prest.index');
    Route::post('/prest/store', [
        App\Http\Controllers\AdminController::class,
        'PrestStore',
    ])->name('prest.store');

    // TEST PDF
    Route::get('fiche-decompte', [
        App\Http\Controllers\AdminController::class,
        'FicheDecompte',
    ])->name('fiche-decompte');
    Route::get('fiche-paie', [
        App\Http\Controllers\AdminController::class,
        'FichePaie',
    ])->name('fiche-paie');
    Route::get('carte-retraite', [
        App\Http\Controllers\AdminController::class,
        'CarteRetraite',
    ])->name('carte-retraite');
    Route::get('etat-payement', [
        App\Http\Controllers\AdminController::class,
        'EtatPayement',
    ])->name('etat-payement');

    // PRODUCTION
    Route::get('/prod/nc/create/', [
        App\Http\Controllers\ProductionController::class,
        'ncCreate',
    ])->name('prod.nc.create');
    Route::post('/prod/nc/store/', [
        App\Http\Controllers\ProductionController::class,
        'ncStore',
    ])->name('prod.nc.store');
    Route::get('/prod/ac/index/', [
        App\Http\Controllers\ProductionController::class,
        'acIndex',
    ])->name('prod.ac.index');
    Route::get('/agence/retraite/index/{id}', [
        App\Http\Controllers\ProductionController::class,
        'agencePensionIndex',
    ])->name('agence.pension.retraite');
    Route::get('/agence/retraite/filter', [
        App\Http\Controllers\ProductionController::class,
        'agenceRetraiteFilter',
    ]);
    Route::post('/agence/retraite/pdf', [
        App\Http\Controllers\ProductionController::class,
        'retraitePdf',
    ])->name('agence.retraite.pdf');

    // SECRETARIAT

    // DIRGA

    // reclamation

    // ECHEANCE
    Route::get('/echeance/index', [
        App\Http\Controllers\EcheanceController::class,
        'echeanceIndex',
    ])->name('echeance.index');
    Route::post('/echeance/store', [
        App\Http\Controllers\EcheanceController::class,
        'echeanceStore',
    ])->name('echeance.store');
    Route::get('/echeance/close/{id}', [
        App\Http\Controllers\EcheanceController::class,
        'echeanceClose',
    ])->name('echeance.close');
    Route::post('/paye/store', [
        App\Http\Controllers\EcheanceController::class,
        'payeStore',
    ])->name('paye.store');
    Route::get('/paye/index/{id}', [
        App\Http\Controllers\EcheanceController::class,
        'payeIndex',
    ])->name('paye.index');
    Route::get('/paye/export/excel/{id}', [
        App\Http\Controllers\EcheanceController::class,
        'exportExcel',
    ])->name('paye.excel');
    Route::get('/paye/export/pdf/{id}', [
        App\Http\Controllers\EcheanceController::class,
        'exportPdf',
    ])->name('paye.pdf');

    //PAYE
    Route::get('/paye/index', [
        App\Http\Controllers\PayeController::class,
        'index',
    ])->name('paye.index');
    Route::get('/paye/retraite/index/{id}', [
        App\Http\Controllers\PayeController::class,
        'retraiteIndex',
    ])->name('payeRetraite.index');
    Route::get('/paye/retraite/edit/{id}', [
        App\Http\Controllers\PayeController::class,
        'retraiteEdit',
    ])->name('payeRetraite.edit');

    Route::get('/paye/retraite/view/{id}', [
        App\Http\Controllers\PayeController::class,
        'retraiteView',
    ])->name('payeRetraite.view');

    Route::get('/paye/retraite/filter', [
        App\Http\Controllers\PayeController::class,
        'retraiteFilter',
    ]);
    Route::get('/paye/retraite/get-ass', [
        App\Http\Controllers\PayeController::class,
        'getAss',
    ]);
    Route::get('/paye/retraite/excel/{id}', [
        App\Http\Controllers\PayeController::class,
        'retraiteExcel',
    ])->name('payeRetraite.excel');
    Route::post('/paye/retraite/preview', [
        App\Http\Controllers\PayeController::class,
        'retraitePreview',
    ])->name('payeRetraite.preview');
    Route::post('/paye/retraite/storeAll', [
        App\Http\Controllers\PayeController::class,
        'retraiteStoreAll',
    ])->name('payeRetraite.store');
    Route::post('/paye/retraite/update', [
        App\Http\Controllers\PayeController::class,
        'retraiteUpdate',
    ])->name('payeRetraite.update');
    Route::get('/paye/retraite/index/filter-etat', [
        App\Http\Controllers\PayeController::class,
        'filterEtat',
    ]);
    Route::get('/paye/retraite/suspension/{id}', [
        App\Http\Controllers\PayeController::class,
        'retraiteSuspension',
    ])->name('payeRetraite.suspension');
    Route::post('/paye/deces/store', [
        App\Http\Controllers\PayeController::class,
        'retraiteDeces',
    ])->name('payeDeces.store');
    Route::get('/paye/deces/update/{id}', [
        App\Http\Controllers\PayeController::class,
        'retraiteDecesUpdate',
    ])->name('payeDeces.update');
    Route::get('/paye/suspension/update/{id}', [
        App\Http\Controllers\PayeController::class,
        'retraiteSuspensionUpdate',
    ])->name('payeSuspension.update');
    Route::get('/paye/retraite/etat-payement', [
        App\Http\Controllers\PayeController::class,
        'etatPayementPdf',
    ])->name('payeRetraite.etatPayement');
    Route::get('/paye/deces/', [
        App\Http\Controllers\PayeController::class,
        'decesIndex',
    ])->name('paye.deces');
    Route::get('/paye/suspension/', [
        App\Http\Controllers\PayeController::class,
        'suspensionIndex',
    ])->name('paye.suspension');

    //// MISSION /////////////

    route::fallback(function () {
        return view('404');
    });
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name(
    'home'
);
Route::get('/login', [
    App\Http\Controllers\HomeController::class,
    'login',
])->name('login');
Route::post('/logout', [
    App\Http\Controllers\AuthController::class,
    'Logout',
])->name('user.logout');

Route::post('/sign-in', [
    App\Http\Controllers\AuthController::class,
    'SignIn',
])->name('user.signin');
Route::get('/registration', [
    App\Http\Controllers\AuthController::class,
    'Registration',
])->name('user.registration');
Route::post('/sign-up', [
    App\Http\Controllers\AuthController::class,
    'SignUp',
])->name('user.signup');
