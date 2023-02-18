<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\AdminController;
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
    return view('welcome');
});

Route::group(['middleware' => 'guest'], function() {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/loading', [AuthController::class, 'loading'])->name('loading');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/loadres', [AuthController::class, 'loadres'])->name('loadres');
});

Route::group(['middleware' => ['auth', 'checkrole:1,2']], function() {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/redirect', [RedirectController::class, 'cek']);
});

Route::group(['middleware' => ['auth', 'checkrole:1']], function() {
        // Route Satwil
    Route::get('/satwils', [AdminController::class, 'index'])->name('satwils');
    Route::get('/satwils/{id}/edit', [AdminController::class, 'edit']);
    Route::post('/satwils/{id}/update', [AdminController::class, 'update']);
    Route::post('/satwils/{id}/destroy', [AdminController::class, 'destroy']);

        // Route dataDiri
    Route::get('/dataDiris', [AdminController::class, 'indexDiri'])->name('dataDiris');
    Route::get('/dataDiris/{id}/edit', [AdminController::class, 'editDiri']);
    Route::post('/dataDiris/{id}/update', [AdminController::class, 'updateDiri']);
    Route::post('/dataDiris/{id}/destroy', [AdminController::class, 'destroyDiri']);

        // Route dataAyah
    Route::get('/dataAyahs', [AdminController::class, 'indexAyah'])->name('dataAyahs');
    Route::get('/dataAyahs/{id}/edit', [AdminController::class, 'editAyah']);
    Route::post('/dataAyahs/{id}/update', [AdminController::class, 'updateAyah']);
    Route::post('/dataAyahs/{id}/destroy', [AdminController::class, 'destroyAyah']);

        // Route dataIbu
    Route::get('/dataIbus', [AdminController::class, 'indexIbu'])->name('dataIbus');
    Route::get('/dataIbus/{id}/edit', [AdminController::class, 'editIbu']);
    Route::post('/dataIbus/{id}/update', [AdminController::class, 'updateIbu']);
    Route::post('/dataIbus/{id}/destroy', [AdminController::class, 'destroyIbu']);

        // Route SKCK
    Route::get('/skck', [AdminController::class, 'indexSKCK'])->name('skck');
    Route::get('/skck/{id}/edit', [AdminController::class, 'editSKCK']);
    Route::post('/skck/{id}/update', [AdminController::class, 'updateSKCK']);
    Route::post('/skck/{id}/destroy', [AdminController::class, 'destroySKCK']);
});

Route::group(['middleware' => ['auth', 'checkrole:2']], function() {

    Route::get('/user', [UserController::class, 'index'])->name('user');

        // Route user satwil
    Route::get('/satwils/create', [UserController::class, 'create'])->name('creates');
    Route::post('/satwils/store', [UserController::class, 'store'])->name('stores');
    
        // Route user dataDiri
    Route::get('/dataDiris/create', [UserController::class, 'createDiri'])->name('createsDiri');
    Route::post('/dataDiris/store', [UserController::class, 'storeDiri'])->name('storesDiri');

        // Route user dataAyah
    Route::get('/dataAyahs/create', [UserController::class, 'createAyah'])->name('createsAyah');
    Route::post('/dataAyahs/store', [UserController::class, 'storeAyah'])->name('storesAyah');

        // Route user dataIbu
    Route::get('/dataIbus/create', [UserController::class, 'createIbu'])->name('createsIbu');
    Route::post('/dataIbus/store', [UserController::class, 'storeIbu'])->name('storesIbu');

        // Route user skck
    Route::get('/skck/create', [UserController::class, 'createSKCK'])->name('createsSKCK');
    Route::post('/skck/store', [UserController::class, 'storeSKCK'])->name('storesSKCK');
});
