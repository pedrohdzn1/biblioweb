<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\ContactaController;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/registroLibros', function () { //esto tambien funciona , pero no interactua con el controlador
//     return view('./libros/registroLibros');
// });

// Route::get('/registroLibros','LibrosController@create');

Route::match(['get'],'/contacto/formulario',[App\Http\Controllers\LibrosController::class, 'formulario'])->name('formu');

Route::post('contacta', [ContactaController::class, 'store'])->name('contacta.store');

Route::get('contacta', [ContactaController::class, 'index'])->name('contacta.index');

//Este metodo es el metodo pro
Route::match(['get', 'post'],'/registroLibros/create',[App\Http\Controllers\LibrosController::class, 'create']);

Route::match(['get', 'post'],'/registroLibros/store',[App\Http\Controllers\LibrosController::class, 'store']);

Route::match(['get', 'post'],'/listaLibros/index',[App\Http\Controllers\LibrosController::class, 'index']);
//la url /listaLibros/index llama al metodo index del controlador 

Route::match(['get', 'post'],'/editarLibro/{id}/edit/',[App\Http\Controllers\LibrosController::class, 'edit']);

Route::match(['get', 'post', 'patch'],'/editarLibro/{id}/update/',[App\Http\Controllers\LibrosController::class, 'update']);


Route::match(['get', 'post', 'patch'],'/eliminarLibro/destroy/{id}/{habilitado}',[App\Http\Controllers\LibrosController::class, 'destroy']);