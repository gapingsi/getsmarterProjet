<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use \App\Http\Controllers\LayoutController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\InstallmentController;

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

// DashboardController

Route::get('/dashboard', [DashboardController::class, 'index']);

// user controller

Route::get('/', [UserController::class, 'showlogin']);
Route::get('/showregister', [UserController::class, 'showregister']);
Route::get('/alluser', [UserController::class, 'alluser'])->name("all");
Route::post('/register', [UserController::class, 'register'])->name("register");
Route::post('/login', [UserController::class, 'login'])->name("login");
Route::post('/logout', [UserController::class, 'logout']);
route::get('/edit/{id}', [UserController::class, 'edit']);
route::get('/delete/{id}', [UserController::class, 'delete']);

// LayoutController

Route::get('/hey', [LayoutController::class, 'index']);

// StudentController

route::prefix('/admin')->middleware('auth')->group(
        function () {

                route::get('/', [StudentController::class, 'index'])->name("index");
                route::get('/create', [StudentController::class, 'create']);
                route::get('/store', [StudentController::class, 'store']);
                route::post('/update', [StudentController::class, 'update']);
                route::get('/edit/{id}', [StudentController::class, 'edit']);
                route::get('/delete/{id}', [StudentController::class, 'delete']);
        }
);
// FormationController
route::get('/formation', [FormationController::class, 'formation']);
route::get('/all', [FormationController::class, 'all']);
route::post('/formationcreate', [FormationController::class, 'formationcreate']);
route::get('/prix', [FormationController::class, 'prix']);
route::get('/edit/{id}', [FormationController::class, 'edit']);
route::get('/delete/{id}', [FormationController::class, 'delete']);


// InstallmentController

Route::get('/choice', [InstallmentController::class, 'choiceFormation'])->name('choice');
Route::get('/create', [InstallmentController::class, 'create'])->name('create');
Route::post('/store', [InstallmentController::class, 'store'])->name('store');
Route::get('/list', [InstallmentController::class, 'list'])->name('list');
Route::get('/editInstallment/{id}', [InstallmentController::class, 'edit'])->name('editInstallment');
Route::post('/updateInstallment/{id}', [InstallmentController::class, 'update'])->name('updateInstallment');
Route::get('/returnCreateEdit/{id}', [InstallmentController::class, 'returnCreate'])->name('returnCreateEdit');
Route::get('/deleteInstallment/{id}', [InstallmentController::class, 'delete'])->name('deleteInstallment');



