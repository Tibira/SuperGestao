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

Route::get('/','PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos','SobreNosController@sobreNos')->name('site.sobre-nos');
Route::get('/contato','ContatoController@contato')->name('site.contato');
Route::get('/login','PrincipalController@principal')->name('site.login');


Route::prefix('/app')->group(function(){
    Route::get('/clientes','ClientesController@index')->name('app.cientes');
    Route::get('/fornecedores','FornecedoresController@index')->name('app.fornecedores');
    Route::get('/produtos','ProdutosController@index')->name('app.produtos');
});


Route::get('/teste/{p1}/{p2}' ,'TesteController@teste')->name('site.teste');

Route::fallback(function(){
    echo 'fallback';
});
