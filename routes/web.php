<?php

use App\Http\Controllers\CategoriasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaludoController;
use App\Http\Controllers\ContactosController;
use App\Http\Controllers\LoginController;
use Symfony\Component\CssSelector\Node\FunctionNode;

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

Route::controller(LoginController::class)->group(
    function(){
        Route::get('/', "index")->name('crud.index');
        Route::get('/registro', "registro")->name('registro.login');
        Route::post('/storeUser', "storeUser")->name('store.login');
        Route::post('/Login', 'Login')->name('sesion');
        Route::get('/Logout', "Logout")->name('Logout');
    }
);


Route::controller(ContactosController::class)->group(
    function () {
        Route::get('/crud/cart', "cart")->name('crud.cart');
        Route::get('/crud/gallery', "gallery")->name('crud.gallery');
        Route::get('/crud/create', "create")->name('crud.create');
        Route::get('/crud/read', "read")->name('crud.read')->middleware('auth');
        Route::get('/chartObtenerDatos', 'chartObtenerDatos')->name('chartObtenerDatos');
        Route::post('/crud/store', "store")->name('crud.store');
        Route::get('/crud/edit/{id}', "edit")->name('crud.edit');
        Route::put('/crud/update/{id}', 'update')->name('crud.update');
        Route::get('/crud/show/{id}', 'show')->name('crud.show');
        Route::delete('/crud/destroy/{id}', 'destroy')->name('crud.destroy');
    }
);

Route::controller(CategoriasController::class)->group(
    function () {
        Route::get('/crud/readCategoria', "readCategoria")->name('crud.readCategoria')->middleware('auth');
        Route::get('/crud/createCategoria', "createCategoria")->name('crud.createCategoria');
        Route::post('/crud/storeCategoria', "storeCategoria")->name('crud.storeCategoria');
        Route::put('/crud/updateCategoria/{id}', "updateCategoria")->name('crud.updateCategoria');
        Route::get('/crud/editCategoria/{id}', "editCategoria")->name('crud.editCategoria');
        Route::get('/crud/showCategoria/{id}', "showCategoria")->name("crud.showCategoria");
        Route::delete('/crud/destroyCategoria/{id}', "destroyCategoria")->name("crud.destroyCategoria");
    }
);
