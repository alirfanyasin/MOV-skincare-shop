<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomePage;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Otp;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Success;
use App\Livewire\Pages\AboutUs;
use App\Livewire\Pages\AddressCreate;
use App\Livewire\Pages\AddressEdit;
use App\Livewire\Pages\Cart;
use App\Livewire\Pages\Index;
use App\Livewire\Pages\MyOrder;
use App\Livewire\Pages\ProductCategory;
use App\Livewire\Pages\ProductDetail;
use App\Livewire\Pages\Products;
use App\Livewire\Pages\ProductSkinType;
use App\Livewire\Pages\Profile;
use App\Livewire\Pages\Promo;
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
Route::get('/product/category/{category}', ProductCategory::class);
Route::get('/product/skin-type/{type}', ProductSkinType::class);
Route::get('/product/{slug}', ProductDetail::class);
Route::get('/promo', Promo::class);


Route::get('/skin-type', SkinType::class);
Route::get('/skin-news', SkinNews::class);

Route::middleware(['guest'])->group(function () {
  // Authentication
  Route::get('/register', Register::class);
  Route::get('/otp', Otp::class);
  Route::get('/success', Success::class);
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

  Route::get('/cart', Cart::class);
  Route::get('/about-us', AboutUs::class);
  Route::get('/my-profile', Profile::class);
  Route::get('/my-order', MyOrder::class);
  Route::get('/address/create', AddressCreate::class);
  Route::get('/address/edit/{id}', AddressEdit::class);
});
