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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix'=>'funcionario'], function(){
    Route::get('','FuncionarioController@index');/* ->middleware('auth'); */
    Route::get('cadastrar','FuncionarioController@cadastrar');
    Route::post('enviar','FuncionarioController@gravar');
    Route::get('{id}/editar','FuncionarioController@editar');
    Route::put('{id}/atualizar','FuncionarioController@atualizar');
    Route::get('{id}/remover','ProdutosController@remover');//não adicionei um link pq não acho que devamos poder excluir um funcionário
});
Route::group(['prefix'=>'atestado'], function(){
    Route::get('',function(){
        return 'Rota OK';
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
