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

Route::get('/usuarios', function(){
    return 'Usuarios';
});

Route::get('/usuarios/{id}',function($id){
    return "Mostrando detalle del usuario: {$id}";
})->where('id', '[0-9]+'); // también se puede usar como ER \d+

Route::get('usuarios/nuevo', function(){
    return 'Crear un nuevo usuario';
});

Route::get('saludo/{name}/{nickname?}', function($name, $nickname = null){
    
    if($nickname)
        return "Bienvenido {$name}, tu apodo es {$nickname}";
    
    return "Bienvenido {$name}, No tienes apodo";
});