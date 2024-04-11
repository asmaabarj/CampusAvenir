<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/login', function () {
    return view('Authetification.login');
});

Route::get('/register', function () {
    return view('Authetification.register');
    
});
Route::post('/register', [UserController::class, 'register'])->name('register');

// ----------------------------------------------admin----------------------------------------------------
Route::get('/dashboard', function () {
    return view('Admin.Dashboard');
});

Route::get('/addDomaine', function () {
    return view('Admin.addDomaine');
});

Route::get('/manageDomaine', function () {
    return view('Admin.manageDomaine');
});

Route::get('/addUniversity', function () {
    return view('Admin.addUniversity');
});

Route::get('/manageUniversity', function () {
    return view('Admin.manageUniversity');
});

Route::get('/addPub', function () {
    return view('Admin.addPub');
});

Route::get('/managePub', function () {
    return view('Admin.managePub');
});

Route::get('/faqsManage', function () {
    return view('Admin.faqsManage');
});

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

Route::get('/domaines', function () {
    return view('domaines');
});

Route::get('/universities', function () {
    return view('universities');
});