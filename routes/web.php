<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\ItemController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\TopController;

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
    return view('user.top');
});

Route::get('user.action', function () {
    return view('user.action');
});

Route::get('user.menu', function () {
    return view('user.menu');
});

Route::get('/', [TopController::class, 'index'])->name('tops.index');

Route::middleware('auth:users')->group(function(){
    Route::get('user/index', [ItemController::class, 'index'])->name('items.index');
    Route::get('show/{item}', [ItemController::class, 'show'])->name('items.show');
});

Route::prefix('carts')->
    middleware('auth:users')->group(function(){
    Route::get('/', [CartController::class, 'index'])->name('cart.index');
    Route::post('add', [CartController::class, 'add'])->name('cart.add');
    Route::post('delete/{item}', [CartController::class, 'delete'])->name('cart.delete');
    Route::get('checkout', [CartController::class, 'checkout'])->name('cart.checkout');
});


//Route::get('/dashboard', function () {
//    return view('user.dashboard');
//})->middleware(['auth:users'])->name('dashboard');

require __DIR__.'/auth.php';