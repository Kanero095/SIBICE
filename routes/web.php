<?php

use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\CloudinaryController;
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\RegisBinaanUKMController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;


Route::redirect('/', 'home');
Route::redirect('dashboard', 'home');
// Route::redirect('/register','login');

Route::fallback(function () {
    return '404 Page Not Found';
});

Route::get('/home', [
    DefaultController::class,
    'dashboard'
])->name('dashboard');
Route::get('/visi-misi', [
    DefaultController::class,
    'visi_misi'
])->name('visi-misi');
Route::get('/galery', [
    DefaultController::class,
    'galery'
])->name('galery');
Route::get('/activities', [
    DefaultController::class,
    'activities'
])->name('activities');
Route::get('/tenants', [
    DefaultController::class,
    'tenants'
])->name('tenants');
Route::get('/tenants/view/{slug}', [
    DefaultController::class,
    'show_tenant'
])->name('show-tenant');

Route::get('/auth/redirect', [
    GoogleController::class,
    'redirect'
])->name('redirect');
Route::get('/auth/google/callback', [
    GoogleController::class,
    'callback'
])->name('callback');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // activities
    Route::get('/activities/create', [ActivitiesController::class, 'create'])->name('activities-create');
    Route::post('/activities/create', [ActivitiesController::class, 'submit'])->name('activities-submit');
    Route::get('activities/manage', [ActivitiesController::class, 'manage'])->name('activities-manage');
    Route::post('activities/manage/delete/{slug}', [ActivitiesController::class, 'delete'])->name('activities-delete');
    Route::get('activities/manage/edit/{slug}', [ActivitiesController::class, 'edit'])->name('activities-edit');
    Route::post('activities/manage/edit/{slug}', [ActivitiesController::class, 'update'])->name('activities-update');

    // Registrasi Binaan UKM
    Route::get('/registrasi-binaan-ukm', [RegisBinaanUKMController::class, 'create'])->name('registBinaanUKM');
    Route::post('/registrasi-binaan-ukm', [RegisBinaanUKMController::class, 'submit'])->name('registBinaanUKM-submit');
    Route::get('/registrasi-binaan-ukm/verify', [RegisBinaanUKMController::class, 'verify'])->name('registBinaanUKM-Verify');
    Route::get('/halaman-pengajuan', [RegisBinaanUKMController::class, 'pengajuan'])->name('halamanPengajuan');
    Route::get('/edit-verify-regis/{slug}', [RegisBinaanUKMController::class, 'edit_verifyRegis'])->name('editRegist');
    Route::post('/edit-verify-regis/{slug}', [RegisBinaanUKMController::class, 'update_verifyRegis'])->name('updateRegist');

    // Route::post('/UploadToCloud', [CloudinaryController::class, 'UploadToCloud'])->name('UploadToCloud');
});

Route::get('/debug-log', function () {
    return nl2br(file_get_contents(storage_path('logs/laravel.log')));
});
