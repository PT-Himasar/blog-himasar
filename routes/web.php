<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\Analytics;
use App\Http\Controllers\pages\AccountSettingsAccount;
use App\Http\Controllers\pages\AccountSettingsNotifications;
use App\Http\Controllers\pages\AccountSettingsConnections;
use App\Http\Controllers\pages\MiscError;
use App\Http\Controllers\pages\MiscUnderMaintenance;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;
use App\Http\Controllers\authentications\ForgotPasswordBasic;
use App\Http\Controllers\kegiatan\ControllerNews;
use App\Http\Controllers\kegiatan\ControllerProker;
use App\Http\Controllers\tables\Basic as TablesBasic;
use App\Http\Controllers\users\ControllerAnggota;
use App\Http\Controllers\himasar\ControllerHome;
use App\Http\Controllers\himasar\ControllerPostingan;
use App\Http\Controllers\himasar\ControllerStructure;
use App\Http\Controllers\himasar\ControllerDll;



Route::get('/', [ControllerHome::class, 'index'])->name('index');

Route::get('/about', [ControllerDll::class, 'about'])->name('about');

// Structure
Route::get('/team', [ControllerStructure::class, 'structure'])->name('structure');
Route::get('/gallery', [ControllerStructure::class, 'gallery'])->name('gallery');

// News
Route::get('/our-event', [ControllerPostingan::class, 'event'])->name('our-event');
Route::get('/our-blog', [ControllerPostingan::class, 'blog'])->name('our-blog');
Route::get('/our-blog/{id}', [ControllerPostingan::class, 'blog_details'])->name('blog-details');
Route::get('/event-details/{id}', [ControllerPostingan::class, 'event_details'])->name('event-details');

// Contact
Route::get('/contact', [ControllerDll::class, 'contact'])->name('contact');


// Main Page Route
Route::get('/daftar/anggota/hms', [Analytics::class, 'anggota'])->name('anggota');
Route::get('/daftar/calon/anggota', [Analytics::class, 'calon'])->name('daftar-anggota');
Route::post('/daftar/create', [Analytics::class, 'add_anggota'])->name('store_aggota');

// authentication
Route::get('/auth/login', [LoginBasic::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginBasic::class, 'authenticate'])->middleware('throttle:5,1');
Route::post('/logout', [LoginBasic::class, 'logout']);
Route::get('/auth/register-basic', [RegisterBasic::class, 'index'])->name('auth-register-basic');

// TABEL ANGGOTA
Route::middleware(['auth'])->group(function () {
  Route::get('/hms', [Analytics::class, 'index'])->name('dashboard-analytics');
  Route::get('anggota/tabel-amd', [ControllerAnggota::class, 'amd'])->name('tabel-amd');
  Route::get('anggota/tabel-demisioner', [ControllerAnggota::class, 'demisioner'])->name('tabel-demisioner');
  Route::get('anggota/tabel-mantum', [ControllerAnggota::class, 'mantum'])->name('tabel-mantum');
  Route::get('/calon-anggota', [ControllerAnggota::class, 'calon_anggota'])->name('calon-anggota');
  Route::get('anggota/tabel-bph', [ControllerAnggota::class, 'bph'])->name('tabel-bph');
  Route::get('/auth/forgot-password-basic', [ForgotPasswordBasic::class, 'index'])->name('auth-reset-password-basic');
  Route::get('/pages/account-settings', [AccountSettingsAccount::class, 'index'])->name('account-settings');
  Route::put('/pages/account-settings/{id}', [AccountSettingsAccount::class, 'update'])->name('account-update');

  Route::prefix('anggota/tabel-bph')->group(function () {
    // Create
    Route::post('/create', [ControllerAnggota::class, 'store_anggota'])->name('store_aggota');
    // Edit
    Route::put('/edit/{id}', [ControllerAnggota::class, 'update_anggota'])->name('update_anggota');
    // Delete
    Route::delete('/{id}', [ControllerAnggota::class, 'destroy_anggota'])->name('destroy_anggota');
  });


  Route::get('kegiatan/tabel-news', [ControllerNews::class, 'news'])->name('kegiatan-news');
  Route::get('kegiatan/tabel-event', [ControllerNews::class, 'event'])->name('kegiatan-event');

  Route::prefix('kegiatan/news')->group(function () {
    // Create
    Route::post('/create', [ControllerNews::class, 'add_news'])->name('add_news');
    // Edit
    Route::put('/edit/{id}', [ControllerNews::class, 'update_news'])->name('update_news');
    // Delete
    Route::delete('/{id}', [ControllerNews::class, 'destroy_news'])->name('destroy_news');
  });

  Route::get('kegiatan/tabel-proker', [ControllerProker::class, 'proker'])->name('proker');

  Route::prefix('kegiatan/proker')->group(function () {
    // Create
    Route::post('/create', [ControllerProker::class, 'add_proker'])->name('add_proker');
    // Edit
    Route::put('/edit/{id}', [ControllerProker::class, 'update_proker'])->name('update_proker');
    // Delete
    Route::delete('/{id}', [ControllerProker::class, 'destroy_proker'])->name('destroy_proker');
  });
});

// pages
Route::get('/pages/account-settings-notifications', [AccountSettingsNotifications::class, 'index'])->name('pages-account-settings-notifications');
Route::get('/pages/account-settings-connections', [AccountSettingsConnections::class, 'index'])->name('pages-account-settings-connections');
Route::get('/pages/misc-error', [MiscError::class, 'index'])->name('pages-misc-error');
Route::get('/pages/misc-under-maintenance', [MiscUnderMaintenance::class, 'index'])->name('pages-misc-under-maintenance');
