<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesananController;
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
    return view('welcome');
});
Route::get('/homeAdmin', function () {
    return view('homeAdmin');
});


Route::get('/dashboard', function () {
    return Auth::user()->roles()->first()->name =='admin' ? view('homeAdmin') : view('dashboard')  ;
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    
});
Route::controller(App\Http\Controllers\CustomerController::class)->group(function () {
    Route::get('/pesanAdmin','create');
    Route::get('/customers','index');
    Route::post('/pesanAdmin','store');
    Route::get('/edit-customer/{customer_id}', 'edit');
    Route::put('/updateCustomer/{customer_id}', 'update');
    Route::delete('/deleteCustomer/{customer_id}', 'destroy');
});
Route::controller(App\Http\Controllers\PesananController::class)->group(function () {
    Route::get('/add-pesanan','create');
    Route::get('/pesanans','index');
    Route::get('/daftar-pesanan','lihat');
    Route::post('/add-pesanan','store');
    Route::get('/edit-pesanan/{pesanan_id}', 'edit');
    Route::get('/editUser/{pesanan_id}', 'editUser');
    Route::put('/update-pesanan/{pesanan_id}', 'update');
    Route::put('/daftar-pesanan/{pesanan_id}', 'updateUser');
    Route::delete('/delete-pesanan/{pesanan_id}', 'destroy');
});

require __DIR__.'/auth.php';
