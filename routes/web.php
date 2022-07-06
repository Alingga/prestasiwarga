<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DatawargaController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\UserDataController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\PrestasiWargaController;


 
Route::get('/', function () {
     return redirect('/login');
});
 
Auth::routes();
 
Route::middleware(['auth'])->group(function () {
 
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    
    //Route untuk ke halaman admin
    Route::middleware(['admin'])->group(function () {
        Route::get('admin', [AdminController::class, 'index']);
        Route::get('admin/provinsi', [ProvinsiController::class, 'index'])->name(
            'admin.provinsi');
        //create
         Route::get('admin/provinsi/create', [App\Http\Controllers\ProvinsiController::class, 'create'])->name(
            'admin.provinsi.create');
         //store
         Route::post('admin/provinsi',[ProvinsiController::class, 'store'])->name(
            'admin.provinsi.store');
         //edit
        Route::get('admin/provinsi/edit/{id}', [App\Http\Controllers\ProvinsiController::class, 'edit'])->name(
            'admin.provinsi.edit');
        Route::put('admin/provinsi/{id}', [App\Http\Controllers\ProvinsiController::class, 'update'])->name(
            'admin.provinsi.update');
        Route::delete('admin/provinsi/{id}',[App\Http\Controllers\ProvinsiController::class, 'destroy'])->name(
            'admin.provinsi.destroy');

        //Route Untuk Kelurahan
        Route::get('admin/kelurahan', [KelurahanController::class, 'index'])->name(
            'admin.kelurahan');
        //edit kelurahan
        Route::get('admin/kelurahan/edit/{id}', [App\Http\Controllers\KelurahanController::class, 'edit'])->name(
            'admin.kelurahan.edit');
        Route::put('admin/kelurahan/{id}', [App\Http\Controllers\KelurahanController::class, 'update'])->name(
            'admin.kelurahan.update');
        //tambah kelurahan
        Route::get('admin/kelurahan/create', [App\Http\Controllers\KelurahanController::class, 'create'])->name(
            'admin.kelurahan.create');
        Route::post('admin/kelurahan',[App\Http\Controllers\KelurahanController::class, 'store'])->name(
            'admin.kelurahan.store');
        //hapus kelurahan
        Route::delete('admin/kelurahan/{id}',[App\Http\Controllers\KelurahanController::class, 'destroy'])->name(
            'admin.kelurahan.destroy');

        //Route Untuk Kategori
        Route::get('admin/kategori', [App\Http\Controllers\KategoriController::class, 'index'])->name(
            'admin.kategori');
        //tambah kategori
        Route::get('admin/kategori/create', [App\Http\Controllers\KategoriController::class, 'create'])->name('admin.kategori.create');
        Route::post('admin/kategori',[App\Http\Controllers\KategoriController::class, 'store'])->name(
            'admin.kategori.store');
        //Hapus Kategori
        Route::delete('admin/kategori/{id}',[App\Http\Controllers\KategoriController::class, 'destroy'])->name(
            'admin.kategori.destroy');
        //edit kategori
        Route::get('admin/kategori/edit/{id}', [App\Http\Controllers\KategoriController::class, 'edit'])->name(
            'admin.kategori.edit');
        Route::put('admin/kategori/{id}', [App\Http\Controllers\KategoriController::class, 'update'])->name(
            'admin.kategori.update');
        // Route::get('admin/provinsi/edit', [App\Http\Controllers\ProvinsiController::class, 'edit'])->name('admin.provinsi.edit');
        //Route datawargas
        Route::resource('admin/datawarga', DatawargaController::class);
        Route::get('admin/datawarga/cari', [App\Http\Controllers\DatawargaController::class, 'cari'])->name(
            's');

        Route::resource('admin/pengguna', PenggunaController::class);
        Route::resource('admin/pengguna', App\Http\Controllers\PenggunaController::class);
        Route::resource('admin/prestasi', PrestasiController::class);


    });
    //Route untuk ke halaman user
    Route::middleware(['user'])->group(function () {
        Route::get('user', [UserController::class, 'index']);
        Route::resource('user/datadiri', UserDataController::class);
        Route::resource('user/biodata', BiodataController::class);
        Route::resource('user/prestasiwarga', PrestasiWargaController::class);

    });

    

   

    Route::get('/logout', function() {
        Auth::logout();
        redirect('/');
    });
 
});
