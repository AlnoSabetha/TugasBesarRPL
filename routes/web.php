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
Route::get('dosen', function () { return view('dosen'); })->middleware(['checkRole:dosen']);
Route::get('mahasiswa', 'SuratController@dashboardsrt')->middleware(['checkRole:mahasiswa']);
//Route::get('mahasiswa/home', [HomeController::class, 'mahasiswaHome'])->name('mahasiswa.home')->middleware('Role');

//Routing surat tugas mahasiswa
Route::get('/surat', 'SuratController@daftarsrt');
Route::get('/surat/tambah', 'SuratController@tambah');
Route::post('/surat/simpan', 'SuratController@simpan');
Route::get('/surat/hapus/{id}', 'SuratController@hapus');
Route::get('/surat/edit/{id}', 'SuratController@edit');
Route::put('/surat/updated/{id}', 'SuratController@updated');
Route::get('/surat/template/{id}', 'SuratController@template');

//Routing surat keterangan mahasiswa
Route::get('/suratket', 'SuratKetController@daftarsrt');
Route::get('/surat/tambahket', 'SuratKetController@tambah');
Route::post('/surat/simpanket', 'SuratKetController@simpan');
Route::get('/surat/editket/{id}', 'SuratKetController@edit');
Route::put('/surat/updatedket/{id}', 'SuratKetController@updated');
Route::get('/surat/templateket/{id}', 'SuratKetController@template');

//Routing surat tugas dosen
Route::get('/surattgs/dosen', 'DosenController@daftarTugas');
Route::get('/surat/dosen/tambahtgs', 'DosenController@tambahTugas');
Route::post('/surat/dosen/simpantgs', 'DosenController@simpanTugas');
Route::get('/surat/dosen/edittgs/{id}', 'DosenController@editTugas');
Route::put('/surat/dosen/updatedtgs/{id}', 'DosenController@updatedTugas');
Route::get('/surat/dosen/templatetgs/{id}', 'DosenController@templateTugas');

//Routing surat keterangan dosen
Route::get('/suratket/dosen', 'DosenController@daftarKeterangan');
Route::get('/surat/dosen/tambahket', 'DosenController@tambahKeterangan');
Route::post('/surat/dosen/simpanket', 'DosenController@simpanKeterangan');
Route::get('/surat/dosen/editket/{id}', 'DosenController@editKeterangan');
Route::put('/surat/dosen/updatedket/{id}', 'DosenController@updatedKeterangan');
Route::get('/surat/dosen/templateket/{id}', 'DosenController@templateKeterangan');

//Routing  surat berita acara dosen
Route::get('/suratba/dosen', 'DosenController@daftarBeritaAcara');
Route::get('/surat/dosen/tambahba', 'DosenController@tambahBeritaAcara');
Route::post('/surat/dosen/simpanba', 'DosenController@simpanBeritaAcara');
Route::get('/surat/dosen/editba/{id}', 'DosenController@editBeritaAcara');
Route::put('/surat/dosen/updatedba/{id}', 'DosenController@updatedBeritaAcara');
Route::get('/surat/dosen/templateba/{id}', 'DosenController@templateBeritaAcara');

//Routing surat permohonan dosen
Route::get('/suratsper/dosen', 'DosenController@daftarPermohonan');
Route::get('/surat/dosen/tambahsper', 'DosenController@tambahPermohonan');
Route::post('/surat/dosen/simpansper', 'DosenController@simpanPermohonan');
Route::get('/surat/dosen/editsper/{id}', 'DosenController@editPermohonan');
Route::put('/surat/dosen/updatedsper/{id}', 'DosenController@updatedPermohonan');
Route::get('/surat/dosen/templatesper/{id}', 'DosenController@templatePermohonan');

//Routing validasi surat tugas admin
Route::get('/surat/admin', 'AdminController@daftartugas');
Route::get('/surat/view/{id}', 'AdminController@view');
Route::get('/surat/admin/setuju/{id}', 'AdminController@confirmtugas');
Route::get('/surat/admin/tolak/{id}', 'AdminController@rejecttugas');
//routing validasi surat keterangan admin
Route::get('/suratket/admin', 'AdminController@daftarket');
Route::get('/suratket/admin/setuju/{id}', 'AdminController@confirmket');
Route::get('/suratket/admin/tolak/{id}', 'AdminController@rejectket');
//Routing buat surat tugas admin
Route::get('/surattugas/admin/tambah', 'AdminController@tambahtugas');
Route::post('/surattugas/admin/simpan', 'AdminController@simpantugas');

//template
Route::get('/generate-barcode', [ProductController::class, 'index'])->name('generate.barcode');

Route::get('/qr', function()
{
	return QrCode::size(250)
	->backgroundColor(255, 255, 204)
	->generate('BELAJAR QR');
});




