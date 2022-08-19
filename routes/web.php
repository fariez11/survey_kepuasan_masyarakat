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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('/content/regis');
});

Route::get('/login', 'Admin@login');
Route::get('/log_admin', 'Admin@act_login');
Route::get('/adhome', 'Admin@adhome');
Route::get('/data_surveior', 'Admin@dt_sur');
Route::get('/sur:edit={id}', 'Admin@editsur');
Route::get('/sur:hapus={id}', 'Admin@delsur');
Route::get('/data_soal', 'Admin@dt_soal');
Route::get('/soal:tambah', 'Admin@tmbsoal');
Route::get('/soal:edit={id}', 'Admin@editsoal');
Route::get('/soal:hapus={id}', 'Admin@delsoal');
Route::get('/data_nilai', 'Admin@dt_nilai');



Route::get('/data_tahun_ini', 'Admin@dt_thi');



Route::get('/addsur', 'Admin@tmbsur');
Route::get('/kersoal', 'Admin@kersoal');
Route::get('/hasil', 'Admin@hasil');



Route::get('/logout', 'Admin@logout');

?>
