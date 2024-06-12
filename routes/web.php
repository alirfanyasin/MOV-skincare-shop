<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomePage;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Pages\Cart;
use App\Livewire\Pages\Index;
use App\Livewire\Pages\ProductDetail;
use App\Livewire\Pages\Products;
use App\Livewire\Pages\SkinNews;
use App\Livewire\Pages\Skintest\AboutSelf;
use App\Livewire\Pages\Skintest\AboutSelf1;
use App\Livewire\Pages\Skintest\AboutSelf10;
use App\Livewire\Pages\Skintest\AboutSelf11;
use App\Livewire\Pages\Skintest\AboutSelf12;
use App\Livewire\Pages\Skintest\AboutSelf13;
use App\Livewire\Pages\Skintest\AboutSelf14;
use App\Livewire\Pages\Skintest\AboutSelf15;
use App\Livewire\Pages\Skintest\AboutSelf16;
use App\Livewire\Pages\Skintest\AboutSelf17;
use App\Livewire\Pages\Skintest\AboutSelf18;
use App\Livewire\Pages\Skintest\AboutSelf2;
use App\Livewire\Pages\Skintest\AboutSelf3;
use App\Livewire\Pages\Skintest\AboutSelf4;
use App\Livewire\Pages\Skintest\AboutSelf5;
use App\Livewire\Pages\Skintest\AboutSelf6;
use App\Livewire\Pages\Skintest\AboutSelf7;
use App\Livewire\Pages\Skintest\AboutSelf8;
use App\Livewire\Pages\Skintest\AboutSelf9;
use App\Livewire\Pages\Skintest\AboutSkin;
use App\Livewire\Pages\Skintest\LifeStyle;
use App\Livewire\Pages\SkinType;
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

Route::get('/', Index::class);
Route::get('/product', Products::class);
Route::get('/product/{slug}', ProductDetail::class);

Route::get('/skin-type', SkinType::class);
Route::get('/skin-news', SkinNews::class);

Route::middleware(['guest'])->group(function () {
  // Authentication
  Route::get('/register', Register::class);
  Route::get('/login', Login::class)->name('login');
});





Route::middleware(['auth'])->group(function () {
  // Logout
  Route::get('/logout', [LogoutController::class, 'logout']);


  // Skintest
  Route::get('/skintest/name', AboutSelf1::class);
  Route::get('/skintest/about-self', AboutSelf::class);
  Route::get('/skintest/about-skin', AboutSkin::class);
  Route::get('/skintest/life-style', LifeStyle::class);
  Route::get('/skintest/result', AboutSelf18::class);

  // Cart
  Route::get('/cart', Cart::class);
});
