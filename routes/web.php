<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::prefix('user')->as('user.')->middleware(['auth'])->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('dashboard');
    //fund wallet page
    Route::get('/fund-wallet', [UserController::class, 'funding'])->name('fund.wallet');

    // Laravel 8 & 9
    // Laravel 8 & 9
    Route::post('/pay', [WalletController::class, 'redirectToGateway'])->name('pay');
    Route::get('/payment/callback', [WalletController::class, 'handleGatewayCallback'])->name('callback');
    Route::get('notifications', [NotificationController::class,'index'])->name('notifications');
    Route::get('notification/{id}', [NotificationController::class,'singleNotification'])->name('notification');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
