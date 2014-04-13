<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('web', function()
{
	return View::make('hello');
});

Route::get('/', function()
{
	return View::make('web.index');
});





/*============CAMPUS VIRTUAL=============*/




// Nos mostrará el formulario de login.
Route::get('/campus', 'CampusController@index');
// Validamos los datos de inicio de sesión.
Route::get('campus/home', 'CampusController@index');
Route::post('campus/login', 'CampusController@postLogin');

// Nos indica que las rutas que están dentro de él sólo serán mostradas si antes el usuario se ha autenticado.
Route::group(array('before' => 'auth'), function()
{
    // Esta será nuestra ruta de bienvenida.
    Route::get('/campus/home', function()
    {
        return View::make('campus.home.index');
    });
    // Esta ruta nos servirá para cerrar sesión.
    Route::get('campus/logout', 'CampusController@logOut');
});
