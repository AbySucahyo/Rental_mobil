<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('register', 'PetugasController@register');
Route::post('login', 'PetugasController@login');

Route::put('ubahpetugas/{id}', 'PetugasController@update')->middleware('jwt.verify');
Route::delete('hapuspetugas/{id}', 'PetugasController@destroy')->middleware('jwt.verify');

Route::get('datapenyewa', 'PenyewaController@show')->middleware('jwt.verify');
Route::post('tambahpenyewa', 'PenyewaController@store')->middleware('jwt.verify');
Route::put('ubahpenyewa/{id}', 'PenyewaController@update')->middleware('jwt.verify');
Route::delete('hapuspenyewa/{id}', 'PenyewaController@destroy')->middleware('jwt.verify');

Route::get('datamobil', 'MobilController@show')->middleware('jwt.verify');
Route::post('tambahmobil', 'MobilController@store')->middleware('jwt.verify');
Route::put('ubahmobil/{id}', 'MobilController@update')->middleware('jwt.verify');
Route::delete('hapusmobil/{id}', 'MobilController@destroy')->middleware('jwt.verify');

Route::get('datajenis', 'JenisController@show')->middleware('jwt.verify');
Route::post('tambahjenis', 'JenisController@store')->middleware('jwt.verify');
Route::put('ubahjenis/{id}', 'JenisController@update')->middleware('jwt.verify');
Route::delete('hapusjenis/{id}', 'JenisController@destroy')->middleware('jwt.verify');
