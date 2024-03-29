<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\Auth\VerifyEmailController;
use App\Http\Controllers\Admin\ShopController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\NoticeController;
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

Route::get('/', function () {
    return view('admin.welcome');
});

Route::prefix('shops')->
    middleware('auth:admin')->group(function(){
        Route::get('index', [ShopController::class, 'index'])->name('shops.index');
        Route::get('create', [ShopController::class, 'create'])->name('shops.create');
        Route::post('store', [ShopController::class, 'store'])->name('shops.store');
        Route::get('edit/{shop}', [ShopController::class, 'edit'])->name('shops.edit');
        Route::post('update/{shop}', [ShopController::class, 'update'])->name('shops.update');
        Route::delete('destroy/{shop}', [ShopController::class, 'destroy'])->name('shops.destroy');
});

Route::prefix('notices')->
    middleware('auth:admin')->group(function(){
        Route::get('index', [NoticeController::class, 'index'])->name('notices.index');
        Route::get('create', [NoticeController::class, 'create'])->name('notices.create');
        Route::post('store', [NoticeController::class, 'store'])->name('notices.store');
        Route::get('edit/{notice}', [NoticeController::class, 'edit'])->name('notices.edit');
        Route::post('update/{notice}', [NoticeController::class, 'update'])->name('notices.update');
        Route::delete('destroy/{notice}', [NoticeController::class, 'destroy'])->name('notices.destroy');
});

Route::resource('products', ProductController::class)->except(['show'])
->middleware('auth:admin');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin'])->name('dashboard');

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.update');
});

Route::middleware('auth:admin')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});

