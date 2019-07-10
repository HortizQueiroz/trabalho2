<?php

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

Route::get('/', 'ControllerCategoria@categorias');


//Rotas para parte de CATEGORIA
Route::get('/categorias', 'ControllerCategoria@categorias');
Route::get('/categorias/form-adicionar', 'ControllerCategoria@formAdicionar');
Route::post('/categorias/adicionar', 'ControllerCategoria@adicionar');
Route::get('/categorias/excluir/{id}', 'ControllerCategoria@excluir');
Route::get('/categorias/editar/{id}', 'ControllerCategoria@form_editar');
Route::post('/categorias/editar', 'ControllerCategoria@editar');

