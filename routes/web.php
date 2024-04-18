<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ChildRegistrationController;
use App\Http\Middleware\Authenticate;

Route::get('/', function () {
    return redirect()->route('login');
});
Route::middleware('auth:admin')->group(function () {
    Route::get('/children', [ChildRegistrationController::class, 'index'])->name('children.index');
    Route::get('/children/create', [ChildRegistrationController::class, 'create'])->name('children.create');
    Route::post('/children', [ChildRegistrationController::class, 'register'])->name('children.register');
    Route::get('/children/{children}', [ChildRegistrationController::class, 'show'])->name('children.show');
    Route::get('/children/{children}/edit', [ChildRegistrationController::class, 'edit'])->name('children.edit');
    Route::put('/children/{children}/update', [ChildRegistrationController::class, 'update'])->name('children.update');
    Route::delete('/children/{children}/destroy', [ChildRegistrationController::class, 'destroy'])->name('children.destroy');
});

Route::get('/admin/login', 'App\Http\Controllers\AdminAuthController@showLoginForm')->name('login');
Route::post('/admin/login', 'App\Http\Controllers\AdminAuthController@login')->name('admin.login.submit');
Route::get('/admin/forgot-password/form', 'App\Http\Controllers\ForgotPasswordController@showForgotPassForm')->name('admin.forgot-password.form');
Route::post('/admin/forgot-password/code', 'App\Http\Controllers\ForgotPasswordController@PassResetLink')->name('password.email');
Route::get('/admin/forgot-password/code', 'App\Http\Controllers\ForgotPasswordController@showCodeForm')->name('admin.forgot-password.code');
Route::post('/admin/forgot-password/send-code', 'App\Http\Controllers\ForgotPasswordController@CodeEnter')->name('enter.code');
Route::get('/admin/reset-pass', 'App\Http\Controllers\ForgotPasswordController@showResetPassForm')->name('reset.pass.form');
Route::post('/admin/reset-pass', 'App\Http\Controllers\ForgotPasswordController@ResetPass')->name('reset.pass');

Route::post('admin/logout', function () {
    Auth::guard('admin')->logout();
    return redirect()->route('login');
})->name('admin.logout');