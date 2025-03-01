<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\FreelanceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RazorpayController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware(['auth'])->group(function () {
    Route::get('/',[ProjectController::class,'index'])->name('index');

    Route::get('post-project',[ProjectController::class,'postProject'])->name('post_project');
    Route::post('/projects/store', [ProjectController::class, 'store'])->name('post.store');
    Route::get('freelance-project',[FreelanceController::class,'freelanceproject'])->name('freelance_project');
    Route::post('/freelance/store', [FreelanceController::class, 'store'])->name('freelance.store');

});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('storelogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegistrationController::class, 'register'])->name('storeregistration');

// Show Payment Page
// Route::get('/payment', [RazorpayController::class, 'showForm'])->name('razorpay.payment');
// Route::get('/process-payment', [RazorpayController::class, 'processPayment'])->name('razorpay.payment');
// Route::post('/payment/store', [RazorpayController::class, 'store'])->name('payment.store');




