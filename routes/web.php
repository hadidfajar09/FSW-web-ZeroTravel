<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\TravelController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
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
Route::get('/detail/{slug}', [DetailController::class,'index'])->name('detail');
// Route::get('/checkout', [CheckoutController::class,'index'])->name('checkout');
// Route::get('/checkout/success', [CheckoutController::class,'successCheckout'])->name('checkout.success');

Route::post('/checkout/{id}', [CheckoutController::class,'process'])->name('checkout.process')->middleware(['auth','verified']);
Route::get('/checkout/{id}', [CheckoutController::class,'index'])->name('checkout.index')->middleware(['auth','verified']);
Route::post('/checkout/create/{detail_id}', [CheckoutController::class,'create'])->name('checkout.create')->middleware(['auth','verified']);
Route::get('/checkout/remove/{detail_id}', [CheckoutController::class,'remove'])->name('checkout.remove')->middleware(['auth','verified']);
Route::get('/checkout/confirm/{id}', [CheckoutController::class,'success'])->name('checkout.success')->middleware(['auth','verified']);


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
        ->namespace('Admin')
        ->middleware(['auth','admin'])
        ->group(function(){
           Route::get('/',[DashboardController::class, 'index'])->name('admin.dashboard');

           //paket
           Route::get('/paket-travel', [TravelController::class, 'index'])->name('paket.index');
           Route::get('/paket-travel/create', [TravelController::class, 'create'])->name('paket.create');
           Route::post('/paket-travel/store', [TravelController::class, 'store'])->name('paket.store');
           Route::get('/paket-travel/edit/{id}', [TravelController::class, 'edit'])->name('paket.edit');
           Route::put('/paket-travel/update/{id}', [TravelController::class, 'update'])->name('paket.update');
           Route::delete('/paket-travel/destroy/{id}', [TravelController::class, 'destroy'])->name('paket.destroy');


             //galeri
             Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
             Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
             Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
             Route::get('/gallery/edit/{id}', [GalleryController::class, 'edit'])->name('gallery.edit');
             Route::put('/gallery/update/{id}', [GalleryController::class, 'update'])->name('gallery.update');
             Route::delete('/gallery/destroy/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');

               //transaksi
               Route::get('/transaksi', [TransactionController::class, 'index'])->name('transaksi.index');
               Route::get('/transaksi/create', [TransactionController::class, 'create'])->name('transaksi.create');
               Route::post('/transaksi/store', [TransactionController::class, 'store'])->name('transaksi.store');
               Route::get('/transaksi/edit/{id}', [TransactionController::class, 'edit'])->name('transaksi.edit');
               Route::get('/transaksi/show/{id}', [TransactionController::class, 'show'])->name('transaksi.show');
               Route::put('/transaksi/update/{id}', [TransactionController::class, 'update'])->name('transaksi.update');
               Route::delete('/transaksi/destroy/{id}', [TransactionController::class, 'destroy'])->name('transaksi.destroy');
  

         // Route::resource('travel', TravelController::class);
        });

      //   Route::resource('travel', TravelController::class);

