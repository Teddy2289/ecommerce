<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::middleware(['auth','isAdmin']) ->group(function ( ){



    Route::get('/dashboard',[App\Http\Controllers\Admin\FrontEndController::class, 'index'])->name('dashboard');


    ################################################## CATEGORIES ROUTE #################################################################
    Route::get('/categorie',[App\Http\Controllers\Admin\CategorieController::class, 'index'])->name('categorie');
    Route::get('/add_categorie',[App\Http\Controllers\Admin\CategorieController::class, 'addCategorie'])->name('add_categorie');
    Route::post('/insert_cat',[App\Http\Controllers\Admin\CategorieController::class, 'insert'])->name('insert_cat');
    Route::get('/edit_cat/{id}',[App\Http\Controllers\Admin\CategorieController::class, 'edit'])->name('edit_cat');
    Route::put('/update_cat/{id}',[App\Http\Controllers\Admin\CategorieController::class, 'update'])->name('update_cat');
    Route::delete('/delete/{id}',[App\Http\Controllers\Admin\CategorieController::class, 'delete'])->name('delete');

    ################################################## PRODUCTE ROUTE #################################################################
    Route::get('/product',[App\Http\Controllers\Admin\ProductController::class, 'index'])->name('product');
});





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
