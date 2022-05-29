<?php
Route::get('/','PagesController@homepage');
Route::get('about','PagesController@about');
Route::get('siswa','SiswaController@index');

//Route File Siswa
Route::get('siswa/create', 'SiswaController@create');
Route::post('siswa','SiswaController@store');

//Route Show File Siswa
Route::get('siswa/{siswa}','SiswaController@show');

//Route Edit File Siswa
Route::get('siswa/{siswa}/edit', 'SiswaController@edit');
Route::patch('siswa/{siswa}', 'SiswaController@update');

//Route Delete
Route::delete('siswa/{siswa}', 'SiswaController@destroy');



