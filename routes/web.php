<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Surat;
use App\SuratKet;
use App\SuratBA;
use App\SuratSper;
use App\SuratSkept;
use App\SuratDa;
use App\SuratPers;

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
Route::get('admin', function () { return view('admin', [
    'counttgs' => Surat::count(),
    'countket' => SuratKet::count(),
    'countba' => SuratBA::count(),
    'countskept' => SuratSkept::count(),
    'countsper' => SuratSper::count(),
    'countpers' => SuratPers::count(),
    'countda' => SuratDa::count()
]); })->middleware('checkRole:admin');
Route::get('dosen', function () { return view('dosen', [
    'counttgs' => Surat::where('nim', '=', Auth::user()->nim)->count(),
    'countket' => SuratKet::where('nim', '=', Auth::user()->nim)->count(),
    'countba' => SuratBA::where('nim', '=', Auth::user()->nim)->count(),
    'countsper' => SuratSper::where('nim', '=', Auth::user()->nim)->count()
]); })->middleware(['checkRole:dosen']);
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
Route::get('/surat/viewtgs/{id}', 'SuratController@view');
//Routing surat keterangan mahasiswa
Route::get('/suratket', 'SuratKetController@daftarsrt');
Route::get('/surat/tambahket', 'SuratKetController@tambah');
Route::post('/surat/simpanket', 'SuratKetController@simpan');
Route::get('/surat/hapusket/{id}', 'SuratController@hapus');
Route::get('/surat/editket/{id}', 'SuratKetController@edit');
Route::put('/surat/updatedket/{id}', 'SuratKetController@updated');
Route::get('/surat/templateket/{id}', 'SuratKetController@template');
Route::get('/surat/viewket/{id}', 'SuratKetController@view');

//Routing surat tugas dosen
Route::get('/surattgs/dosen', 'DosenController@daftarTugas');
Route::get('/surat/dosen/tambahtgs', 'DosenController@tambahTugas');
Route::post('/surat/dosen/simpantgs', 'DosenController@simpanTugas');
Route::get('/surat/dosen/hapustgs/{id}', 'DosenController@hapusTugas');
Route::get('/surat/dosen/edittgs/{id}', 'DosenController@editTugas');
Route::put('/surat/dosen/updatedtgs/{id}', 'DosenController@updatedTugas');
Route::get('/surat/dosen/templatetgs/{id}', 'DosenController@templateTugas');
Route::get('/surat/dosen/viewtgs/{id}', 'DosenController@viewTugas');
//Routing surat keterangan dosen
Route::get('/suratket/dosen', 'DosenController@daftarKeterangan');
Route::get('/surat/dosen/tambahket', 'DosenController@tambahKeterangan');
Route::post('/surat/dosen/simpanket', 'DosenController@simpanKeterangan');
Route::get('/surat/dosen/hapusket/{id}', 'DosenController@hapusKeterangan');
Route::get('/surat/dosen/editket/{id}', 'DosenController@editKeterangan');
Route::put('/surat/dosen/updatedket/{id}', 'DosenController@updatedKeterangan');
Route::get('/surat/dosen/templateket/{id}', 'DosenController@templateKeterangan');
Route::get('/surat/dosen/viewket/{id}', 'DosenController@viewKeterangan');
//Routing  surat berita acara dosen
Route::get('/suratba/dosen', 'DosenController@daftarBeritaAcara');
Route::get('/surat/dosen/tambahba', 'DosenController@tambahBeritaAcara');
Route::post('/surat/dosen/simpanba', 'DosenController@simpanBeritaAcara');
Route::get('/surat/dosen/hapusba/{id}', 'DosenController@hapusBeritaAcara');
Route::get('/surat/dosen/editba/{id}', 'DosenController@editBeritaAcara');
Route::put('/surat/dosen/updatedba/{id}', 'DosenController@updatedBeritaAcara');
Route::get('/surat/dosen/templateba/{id}', 'DosenController@templateBeritaAcara');
Route::get('/surat/dosen/viewba/{id}', 'DosenController@viewBeritaAcara');
//Routing surat permohonan dosen
Route::get('/suratsper/dosen', 'DosenController@daftarPermohonan');
Route::get('/surat/dosen/tambahsper', 'DosenController@tambahPermohonan');
Route::post('/surat/dosen/simpansper', 'DosenController@simpanPermohonan');
Route::get('/surat/dosen/hapussper/{id}', 'DosenController@hapusPermohonan');
Route::get('/surat/dosen/editsper/{id}', 'DosenController@editPermohonan');
Route::put('/surat/dosen/updatedsper/{id}', 'DosenController@updatedPermohonan');
Route::get('/surat/dosen/templatesper/{id}', 'DosenController@templatePermohonan');
Route::get('/surat/dosen/viewsper/{id}', 'DosenController@viewPermohonan');

//Routing validasi surat tugas admin
Route::get('/surattugas/admin/tambah', 'AdminController@tambahtugas');
Route::post('/surattugas/admin/simpan', 'AdminController@simpantugas');
Route::get('/surat/admin/template/{id}', 'AdminController@templatetugas');
Route::get('/surat/admin', 'AdminController@daftartugas');
Route::get('/surat/view/{id}', 'AdminController@view');
Route::put('/surat/admin/setuju/{id}', 'AdminController@confirmtugas');
Route::get('/surat/admin/tolak/{id}', 'AdminController@rejecttugas');
//routing validasi surat keterangan admin
Route::get('/surat/admin/tambahket', 'AdminController@tambahKet');
Route::post('/surat/admin/simpanket', 'AdminController@simpanKet');
Route::get('/surat/admin/templateket/{id}', 'AdminController@templateKet');
Route::get('/suratket/admin', 'AdminController@daftarket');
Route::get('/suratket/view/{id}', 'AdminController@viewket');
Route::put('/suratket/admin/setuju/{id}', 'AdminController@confirmket');
Route::get('/suratket/admin/tolak/{id}', 'AdminController@rejectket');
//routing validasi surat berita acara admin
Route::get('/surat/admin/tambahba', 'AdminController@tambahBa');
Route::post('/surat/admin/simpanba', 'AdminController@simpanBa');
Route::get('/surat/admin/templateba/{id}', 'AdminController@templateBa');
Route::get('/suratba/admin', 'AdminController@daftarBa');
Route::get('/suratba/view/{id}', 'AdminController@viewBa');
Route::put('/suratba/admin/setuju/{id}', 'AdminController@confirmBa');
Route::get('/suratba/admin/tolak/{id}', 'AdminController@rejectBa');
//Routing  validasi surat permohonan
Route::get('/surat/admin/tambahsper', 'AdminController@tambahSper');
Route::post('/surat/admin/simpansper', 'AdminController@simpanSper');
Route::get('/surat/admin/templatesper/{id}', 'AdminController@templateSper');
Route::get('/suratsper/admin', 'AdminController@daftarSper');
Route::get('/suratsper/view/{id}', 'AdminController@viewSper');
Route::put('/suratsper/admin/setuju/{id}', 'AdminController@confirmSper');
Route::get('/suratsper/admin/tolak/{id}', 'AdminController@rejectSper');
//routing validasi surat keputusan
Route::get('/surat/admin/tambahskept', 'AdminController@tambahSkept');
Route::post('/surat/admin/simpanskept', 'AdminController@simpanSkept');
Route::get('/surat/admin/templateskept/{id}', 'AdminController@templateSkept');
Route::get('/suratskept/admin', 'AdminController@daftarSkept');
Route::get('/suratskept/view/{id}', 'AdminController@viewSkept');
//routing surat personalia
Route::get('/surat/admin/tambahpers', 'AdminController@tambahPers');
Route::post('/surat/admin/simpanpers', 'AdminController@simpanPers');
Route::get('/surat/admin/templatepers/{id}', 'AdminController@templatePers');
Route::get('/suratpers/admin', 'AdminController@daftarPers');
Route::get('/suratpers/view/{id}', 'AdminController@viewPers');
//routing surat daftar hadir
Route::get('/surat/admin/tambahda', 'AdminController@tambahDa');
Route::post('/surat/admin/simpanda', 'AdminController@simpanDa');
Route::get('/surat/admin/templateda/{id}', 'AdminController@templateDa');
Route::get('/suratda/admin', 'AdminController@daftarDa');
Route::get('/suratda/view/{id}', 'AdminController@viewDa');

//template
Route::get('/generate-barcode', [ProductController::class, 'index'])->name('generate.barcode');

Route::get('/qr', function()
{
	return QrCode::size(250)
	->backgroundColor(255, 255, 204)
	->generate('BELAJAR QR');
});




