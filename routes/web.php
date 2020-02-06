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

Route::group(['middleware' => ['guest']], function () {
     
    Route::get('/','Auth\LoginController@showLoginForm');
    Route::post('/login', 'Auth\LoginController@login')->name('login');

});


Route::group(['middleware' => ['auth']], function () {

  Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

  Route::get('/home', 'HomeController@index');

  
    Route::group(['middleware' => ['Operador']], function () {

         Route::resource('categoria', 'CategoriaController');
         Route::resource('medico', 'MedicoController');
         Route::resource('paciente', 'PacienteController');
         Route::resource('cliente', 'ClienteController');
         Route::resource('clasificacion', 'ClasificacionController');
         Route::resource('subclasificacion', 'SubclasificacionController');
         
         
    });

    Route::group(['middleware' => ['Administrador']], function () {
          
      Route::resource('categoria', 'CategoriaController');
      Route::resource('medico', 'MedicoController');
      Route::resource('paciente', 'PacienteController');
      Route::resource('cliente', 'ClienteController');
      Route::resource('user', 'UserController');
      Route::resource('rol', 'RolController');
      Route::resource('clasificacion', 'ClasificacionController');   
      Route::resource('subclasificacion', 'SubclasificacionController');     

	    
    });


});


Route::get("un_paciente","PacienteController@un_paciente")->name("paciente.api.un_paciente");