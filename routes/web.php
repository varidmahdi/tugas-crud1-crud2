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
    return view('adminlte.master');
});

Route::get('/pertanyaan', 'PertanyaanController@index'); // menampilkan semua pertanyaan
Route::get('/pertanyaan/create', 'PertanyaanController@create'); // menampilkan hal pertanyaan
Route::post('/pertanyaan', 'PertanyaanController@store'); // menyimpan pertanyaan

Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index');
Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@store'); // menyimpan jawaban

Route::get('/pertanyaan/{id}', 'PertanyaanController@show');
Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit');
Route::put('/pertanyaan/{id}', 'PertanyaanController@update');
Route::delete('/pertanyaan/{id}', 'PertanyaanController@delete');
