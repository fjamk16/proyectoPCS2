<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerPage;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AtencionController;
use App\Http\Controllers\AtencionesController;

Route::delete('/atenciones/{DNI}', [AtencionesController::class, 'destroy'])->name('atenciones.delete');
Route::get('/atenciones/create', [AtencionesController::class, 'create'])->name('atenciones.create');
Route::post('/atenciones', [AtencionesController::class, 'store'])->name('atenciones.store');

Route::middleware(['auth'])->group(function () {
    Route::resource('atenciones', AtencionController::class);
});

Route::get('/', [ControllerPage::class, 'index']);
Route::get('/test-db', [ControllerPage::class, 'testDB'])->name('test.db');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/principal', [AuthController::class, 'index'])->middleware('auth')->name('principal');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::get('/admin', function () {
    return view('admin');
})->middleware('role:trabajador');

Route::get('/gerente', function () {
    return view('gerente');
})->middleware('role:gerente');

Route::get('/usuario', function () {
    return view('usuario');
})->middleware('role:usuario');