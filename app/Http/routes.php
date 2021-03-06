<?php



Route::any('/','FormController@index');
Route::any('registro','FormController@index');

Route::any('/','FormController@index');
Route::any('form2','FormController@index_b');


Route::get('/', function () {                
    return view('welcome');
});

Route::get('descarga', function () {                
    return view('descarga');
});


Route::get('carnet_prueba', function () {                
    return view('carnet');
});


Route::get('recomendaciones', function () {                
    return view('recomendaciones');
});

Route::get('programacion', function () {                
    return view('programacion');
});

Route::get('busqueda', function () {                
    return view('busqueda');
});

Route::get('antiguo', function () {                
    return view('antiguo');
});

Route::get('login', function () {                
    return view('login');
});

Route::get('cerrar', function () {      
	session_start();
	session_destroy();
    return redirect('/');
});


Route::any('logear','FormController@logear');
Route::any('ultimo_codigo','FormController@last_codigo');
Route::any('carnet','PdfController@carnet');
Route::any('edita','ModificarController@edita');
Route::any('modificar','ModificarController@modificar');
Route::post('insertar', 'FormController@insertar');
Route::post('eliminar', 'FormController@eliminar');
Route::any('listar_pais', 'FormController@listar_pais');
Route::any('listar_ciudad', 'FormController@listar_ciudad');
Route::any('listar_localidad', 'FormController@listar_localidad');
Route::any('listar_departamento', 'FormController@listar_departamento');
Route::any('listar_datos', 'FormController@listar_datos');
Route::any('listar_datos1', 'FormController@listar_datos1');
Route::get('/personas/service/ciudad/{id_pais}', '\Idrd\Usuarios\Controllers\LocalizacionController@buscarCiudades');
Route::post('/personas/service/procesar/', '\Idrd\Usuarios\Controllers\PersonaController@procesar');

Route::group(['middleware' => ['web']], function () {

    //

});

