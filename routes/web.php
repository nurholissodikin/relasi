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

//Route::get('/orangtua', function () {
//	$or = App\Ortu::all();
//	foreach ($or as $data) {
//		echo $data->nama_ibu." dengan ";
//		echo $data->nama_ayah." ";
		// foreach ($data->anak as $key) {
			// echo "<li>$key->nama</li><br>";
		// }
// }
   
// });

// Route::get('/index', 'MyController@index');
// Route::get('/city', 'MyController@tampilan');
// Route::get('/model', 'MyController@tampilmodel');
// Route::get('/anak', 'MyController@tampilanak');

Route::resource('orangtua','OrangtuaController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
