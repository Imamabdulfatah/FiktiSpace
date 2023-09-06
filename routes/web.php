<?php

// use App\Models\InputData;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KonfirmasiController;
use App\Http\Controllers\DashboardCrudController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardTambahController;
use App\Http\Controllers\kirimEmailController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Models\Register;

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

Route::get('/m', function () {
    return view('mail.kirimEmail', [
        "title" => "Fikti Space",
        
    ]);
});


Route::get('/email', [kirimEmailController::class, 'index']);

// Landing Page
Route::get('/', function () {
    return view('index', [
        "title" => "Fikti Space",
        "navbar" => "main",
        "about" => "About",
        "timeline" => "Timeline",
        "faq" => "FAQ",
        "cu_about" => "nav-link scrollto",
        "cu_timeline" => "nav-link scrollto",
        "cu_faq" => "nav-link scrollto",
    ]);
});

// competition page
Route::get('/event-satu', [EventController::class, 'satu']);
Route::get('/event-dua', [EventController::class, 'dua']);
Route::get('/event-tiga', [EventController::class, 'tiga']);
Route::get('/event-empat', [EventController::class, 'empat']);
Route::get('/event-lima', [EventController::class, 'lima']);
Route::get('/event-enam', [EventController::class, 'enam']);

// Login Registration
Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout'])->middleware('auth');

Route::get('/registration',[RegisterController::class, 'index'])->middleware('guest');
Route::post('/registration',[RegisterController::class, 'store']);

// Dashboard User
Route::get('/dashboard', function(){
    return view('dashboard/user/index', [
        "title" => "Dashboard",
        "active" => "dashboard",
        "sidebar" => "sidebar",
        "img" => "img/internet/welcome.jpg",
        "openclose" => Register::all(),
    ]);
})->middleware('auth');
Route::get('/dashboard/detail', [DashboardCrudController::class, 'detail'])->middleware('auth');

Route::get('/dashboard/data-peserta', [DashboardTambahController::class, 'index'])->middleware('auth');
Route::get('/dashboard/data-peserta/tambah-data', [DashboardTambahController::class, 'create'])->middleware('auth');
Route::post('/dashboard/data-peserta/tambah-data/sukses', [DashboardTambahController::class, 'store'])->middleware('auth');
// Route::resource('/dashboard/data-peserta/', DashboardPostController::class)->middleware('auth');

Route::delete('/dashboard/data-peserta/hapus/{id}', [DashboardCrudController::class, 'delete'])->middleware('auth')->name('crud.delete');
Route::get('/dashboard/data-peserta/edit/bxiuedhux37dx7x73/{id}', [DashboardCrudController::class, 'edit'])->name('crud.update')->middleware('auth');
Route::patch('/dashboard/data-peserta/edit/bxiuedhux37dx7x73/{id}', [DashboardCrudController::class, 'update'])->middleware('auth');

Route::get('/dashboard/berkas-peserta/',[KonfirmasiController::class, 'berkas'])->middleware('auth');
Route::post('/dashboard/berkas-peserta/',[KonfirmasiController::class, 'uploadBerkas'])->name('upload.berkas')->middleware('auth');

// Dashboard Admin

Route::get('/admin', [AdminController::class, 'index'])->middleware('admin');
Route::put('/admin/{id}', [AdminController::class, 'update'])->name('status.update')->middleware('admin');
Route::get('/admin/data-mobile-legends', [AdminController::class, 'mobileLegends'])->middleware('admin');

Route::get('/admin/data-futsal', [AdminController::class, 'futsal'])->middleware('admin');
Route::get('/admin/data-basket', [AdminController::class, 'basket'])->middleware('admin');


Route::get('/admin/data-bulu-tangkis', [AdminController::class, 'buluTangkis'])->middleware('admin');
Route::get('/admin/data-solo-vocal', [AdminController::class, 'soloVocal'])->middleware('admin');
Route::get('/admin/data-poster', [AdminController::class, 'poster'])->middleware('admin');

Route::put('/admin/data-sport/7686f5frtctrd65fr/{id}', [kirimEmailController::class, 'verifikasiMl'])->name('mlEmail')->middleware('admin');
Route::get('/admin/data-sport/76yegy2te32t6frtctrd65fr/{id}', [KirimEmailController::class, 'mlFailed'])->name('mlFailed')->middleware('admin');

Route::put('/admin/data-futsal/7686f5frtctrd65fr/{id}', [kirimEmailController::class, 'verifikasiFutsal'])->name('futsalEmail')->middleware('admin');
Route::get('/admin/data-futsal/76yegy2te32t6frtctrd65fr/{id}', [KirimEmailController::class, 'futsalFailed'])->name('futsalFailed')->middleware('admin');

Route::put('/admin/data-baskett/7686f5frtctrd65fr/{id}', [kirimEmailController::class, 'verifikasiBasket'])->name('basketEmail')->middleware('admin');
Route::get('/admin/data-basket/76yegy2te32t6frtctrd65fr/{id}', [KirimEmailController::class, 'basketFailed'])->name('basketFailed')->middleware('admin');

Route::put('/admin/data-bulutangkis/7686f5frtctrd65fr/{id}', [kirimEmailController::class, 'verifikasiBulutangkis'])->name('bulutangkisEmail')->middleware('admin');
Route::get('/admin/data-bulutangkis/76yegy2te32t6frtctrd65fr/{id}', [KirimEmailController::class, 'bulutangkisFailed'])->name('bulutangkisFailed')->middleware('admin');

Route::put('/admin/data-solovocal/7686f5frtctrd65fr/{id}', [kirimEmailController::class, 'verifikasiSolovocal'])->name('solovocalEmail')->middleware('admin');
Route::get('/admin/data-solovocal/76yegy2te32t6frtctrd65fr/{id}', [KirimEmailController::class, 'solovocalFailed'])->name('solovocalFailed')->middleware('admin');

Route::put('/admin/data-poster/7686f5frtctrd65fr/{id}', [kirimEmailController::class, 'verifikasiPoster'])->name('posterEmail')->middleware('admin');
Route::get('/admin/data-poster/76yegy2te32t6frtctrd65fr/{id}', [KirimEmailController::class, 'posterFailed'])->name('posterFailed')->middleware('admin');
