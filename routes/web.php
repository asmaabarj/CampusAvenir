<?php

use App\Models\Etablissment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\DomaineController;
use App\Http\Controllers\EtablissmentController;
use App\Http\Middleware\RedirectIfAuthenticated;

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
    return view('HomePage');
});

Route::get('/Faqs', function () {
    return view('Faqs');
});

Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::middleware(RedirectIfAuthenticated::class)->group(function () {
Route::get('/login', function () {
    return view('Authentification.login');
});
Route::get('/register', function () {
    return view('Authentification.register');
});

});
Route::get('/forgetPassword', function () {
    return view('Authentification.ForgetPassword.forgetPassword');
});
Route::get('/newPassword', function () {
    return view('Authentification.ForgetPassword.newPassword');
});
Route::get('/resetPassword', function () {
    return view('Authentification.ForgetPassword.resetPassword');
});
// ----------------------------------------------admin----------------------------------------------------
Route::middleware(['check.role:admin'])->group(function () {

    Route::get('/dashboard', function () {
        return view('Admin.Dashboard');
    });
    
    Route::get('/addDomaine', function () {
        return view('Admin.addDomaine');
    });
    Route::get('/domaine/{id}', [DomaineController::class, 'edit']);
    Route::resource('/domaine', DomaineController::class)->except(['show', 'create','edit']);

    Route::resource('faqs', FaqController::class)->except(['show', 'create','edit']);
    Route::get('/faqs/{id}', [FaqController::class, 'edit']);

    Route::get('/addPublicity', function () {
        return view('Admin.addPublicity');
    });
    Route::get('/editPublicity/{id}', [AnnonceController::class, 'edit']);
    Route::resource('publicity', AnnonceController::class)->except(['show', 'create','edit']);



// Route::resource('/university', EtablissmentController::class)->except(['show', 'create','edit','index','destroy','edit','update']);
Route::post('/university', [EtablissmentController::class, 'store']);
Route::get('/addUniversity', [EtablissmentController::class, 'create']);
Route::get('/university', [EtablissmentController::class, 'index']);
Route::delete('/university/{id}', [EtablissmentController::class, 'destroy']);
Route::get('/university/{id}', [EtablissmentController::class, 'edit']);
Route::put('/university/{id}', [EtablissmentController::class, 'update']);



Route::get('/managePosts', function () {
    return view('Admin.managePosts');
});

Route::get('/contactMe', function () {
    return view('Admin.contactMe');
});
Route::get('/manageConcours', function () {
    return view('Admin.manageConcours');
});

Route::get('/profileAdmin', function () {
    return view('Admin.profileAdmin');
});


});
// -------------------------------------------------------------------

Route::get('/domaines', function () {
    return view('domaines');
});

Route::get('/universities', function () {
    return view('universities');
});