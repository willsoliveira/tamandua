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
    return redirect('funcionario');
});


Route::group(['prefix'=>'funcionario', 'middleware'=>'auth'], function(){
    Route::get('',[ 'as'=>'funcionarios', 'uses'=> 'FuncionarioController@index']);
    Route::get('cadastrar',[ 'as'=>'cadastrar.funcionario', 'uses'=>'FuncionarioController@cadastrar']);
    Route::post('enviar', ['as'=>'salvar.funcionario','uses'=>'FuncionarioController@gravar']);
    Route::get('{id}/editar', ['as'=>'editar.funcionario', 'uses'=>'FuncionarioController@editar']);
    Route::put('{id}/atualizar', ['as'=>'atualiza.funcionario', 'uses'=>'FuncionarioController@atualizar']);
    Route::get('{id}/remover',['as'=>'remover.funcionario', 'uses'=>'FuncionarioController@remover']);//não adicionei um link pq não acho que devamos poder excluir um funcionário
});
Route::group(['prefix'=>'atestado', 'middleware'=>'auth'], function(){
    Route::get('{id}',['as'=>'atestados', 'uses'=>'AtestadoController@index']);
    Route::get('{id}/novo',['as'=>'novo.atestado', 'uses'=> 'AtestadoController@novoAtestado']);
    Route::get('{id}/visualizar ',['as'=>'visualizar.atestado', 'uses'=> 'AtestadoController@visualizar']);
    Route::post('{id}/salvar',['as'=>'salvar.atestado', 'uses'=>'AtestadoController@salvarAtestado']);//envio do atestado sem o anexo

});
Route::get('teste',function(){
    return view('teste');
});
//Route::post('teste/atestado','AnexosController@adicionaAnexo');//teste de envio somente do anexo
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
