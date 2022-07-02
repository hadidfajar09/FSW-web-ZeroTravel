<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class,'index', 'verified'])->name('home');
Route::get('/detail', [DetailController::class,'index'])->name('detail');
Route::get('/checkout', [CheckoutController::class,'index'])->name('checkout');
Route::get('/checkout/success', [CheckoutController::class,'successCheckout'])->name('checkout.success');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/', function () {
//         return view('frontend.home');
//     });
// });

Route::prefix('admin')
        ->middleware(['auth','admin'])
        ->namespace('Admin')
        ->group(function(){
           Route::get('/',[DashboardController::class, 'index'])->name('admin.dashboard');
        });

