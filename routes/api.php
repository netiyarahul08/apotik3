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
Route::post('login', 'AuthController@androidLogin');
Route::post('register', 'AuthController@androidRegister');
Route::post('ubah-password', 'AuthController@androidUbahPassword')
->middleware('android');
Route::get('jenis', 'JenisController@apiIndex')
->middleware('android');
Route::get('rekening', 'RekeningController@apiIndex')
->middleware('android');
Route::get('laundry', 'LaundryController@apiIndex')
->middleware('android');
Route::post('konfirmasi', 'LaundryController@konfirmasi')
->middleware('android');
Route::post('laundry', 'LaundryController@store')
->middleware('android');


Route::get('laporan', 'LaporanController@apiIndex')
->middleware('android');
Route::get('jenis-laporan', 'JenisLaporanController@apiIndex');
Route::get('android', 'AndroidController@apiIndex');
Route::get('slider', 'SliderController@apiIndex');
Route::get('informasi-home', 'InformasiController@apiIndexHome');
Route::get('laporan-detail/{id}', 'LaporanController@apiDetail');
Route::get('informasi-detail/{id}', 'InformasiController@apiDetail');
Route::get('informasi', 'InformasiController@apiIndex');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
