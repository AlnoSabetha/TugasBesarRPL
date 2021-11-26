<?php

use Illuminate\Support\Facades\Route;

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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route Login
Route::get('admin', function () { return view('admin'); })->middleware('checkRole:admin');
Route::get('dosen', function () { return view('dosen'); })->middleware(['checkRole:dosen,admin']);
Route::get('mahasiswa', 'SuratController@dashboardsrt')->middleware(['checkRole:mahasiswa,admin']);

//Routing surat mahasiswa
Route::get('/surat', 'SuratController@daftarsrt');
Route::get('/suratkeluar', 'SuratController@srtkeluar');
Route::get('/surat/tambah', 'SuratController@tambah');
Route::post('/surat/simpan', 'SuratController@simpan');
Route::get('/surat/hapus/{id}', 'SuratController@hapus');
Route::get('/surat/edit/{id}', 'SuratController@edit');
Route::put('/surat/updated/{id}', 'SuratController@updated');
Route::get('/surat/template/{id}', 'SuratController@template');

//Routing surat admin
Route::get('/surat/admin', 'AdminController@index');
Route::get('/admin', 'AdminController@dashboard');

Route::get('/generate-barcode', [ProductController::class, 'index'])->name('generate.barcode');




