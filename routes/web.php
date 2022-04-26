<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
<<<<<<< HEAD

Route::get('/', function () {
    return view('welcome');
});
Route::get('/add_view',[Maincontroller::class,'show']);

Route::get('/appear_detalis',[Detalies::class,'appear']);
Route::get('/appear_detalis_1',[Detalies_01::class,'appear1']);
Route::get('/appear_detalis_2',[Detalies_02::class,'appear2']);

=======

Route::get('/header', function () {
    return view('layout.header');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/reset', function () {
    return view('auth.reset');
});
Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

Route::get('/superAdmin', [App\Http\Controllers\SuperAdminController::class, 'index'])->name('superAdmin');


// Route::get('/listCategories', [App\Http\Controllers\CategoryController::class, 'index'])->name('listCategories');
// Route::get('/createCategory', [App\Http\Controllers\CategoryController::class, 'create'])->name('createCategory');
// Route::get('/storeCategory', [App\Http\Controllers\CategoryController::class, 'store'])->name('storeCategory');
// Route::get('/editCategory', [App\Http\Controllers\CategoryController::class, 'edit'])->name('editCategory');
// Route::get('/updateCategory', [App\Http\Controllers\CategoryController::class, 'update'])->name('updateCategory');
// Route::get('/toggleCategory', [App\Http\Controllers\CategoryController::class, 'toggle'])->name('toggleCategory');
// Route::get('/uploadFileCategory', [App\Http\Controllers\CategoryController::class, 'uploadFile'])->name('uploadFileCategory');
>>>>>>> auth_test
