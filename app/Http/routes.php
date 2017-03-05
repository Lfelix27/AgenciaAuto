<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => ['web']], function (){
//route::get('producto','Producto\ProductoController@index');

//route::resource('marca','Producto\MarcaController');
//route::resource('panel','Desktop\AdministratorCont@panel');
//route::resource('reports','Desktop\AdministratorCont@reports');
route::get('dashboard','Desktop\DashboardController@index');
route::get('product','Producto\ProductoController@index');

route::get('modelweb','Desktop\DashboardController@modelweb');

Route::get('insert','Producto\ProductoController@insertform');
Route::post('create','Producto\ProductoController@insert');

Route::get('vermarcas','Producto\MarcaController@index');
Route::get('insertmarca','Producto\MarcaController@insertform');
Route::post('createmarca','Producto\MarcaController@insert');

Route::get('editmarca/{id}','Producto\MarcaController@editform');
Route::post('editmarca/{id}','Producto\MarcaController@edit');

Route::get('editproduct/{id}','Producto\ProductoController@editform');
Route::post('editproduct/{id}','Producto\ProductoController@edit');

Route::get('deletemarca/{id}','Producto\MarcaController@delete');
Route::get('deleteproduct/{id}','Producto\ProductoController@delete');

});

Route::get('/', function () {
    return view('welcome');
});
