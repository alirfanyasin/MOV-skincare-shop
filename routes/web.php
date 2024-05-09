<?php

use App\Http\Controllers\HomePage;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Pages\Cart;
use App\Livewire\Pages\Index;
use App\Livewire\Pages\ProductDetail;
use App\Livewire\Pages\Products;
use App\Livewire\Pages\SkinNews;
use App\Livewire\Pages\Skintest\AboutSelf1;
use App\Livewire\Pages\Skintest\AboutSelf10;
use App\Livewire\Pages\Skintest\AboutSelf11;
use App\Livewire\Pages\Skintest\AboutSelf2;
use App\Livewire\Pages\Skintest\AboutSelf3;
use App\Livewire\Pages\Skintest\AboutSelf4;
use App\Livewire\Pages\Skintest\AboutSelf5;
use App\Livewire\Pages\Skintest\AboutSelf6;
use App\Livewire\Pages\Skintest\AboutSelf7;
use App\Livewire\Pages\Skintest\AboutSelf8;
use App\Livewire\Pages\Skintest\AboutSelf9;
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
Route::get('/product/detail', ProductDetail::class);
Route::get('/cart', Cart::class);
Route::get('/skin-type', SkinType::class);
Route::get('/skin-news', SkinNews::class);


Route::get('/skintest/name', AboutSelf1::class);
Route::get('/skintest/old', AboutSelf2::class);
Route::get('/skintest/gender', AboutSelf3::class);
Route::get('/skintest/your-skin-condition-lately', AboutSelf4::class);
Route::get('/skintest/the-skin-condition-you-want', AboutSelf5::class);
Route::get('/skintest/often-you-having-acne-problems', AboutSelf6::class);
Route::get('/skintest/The-type-of-acne-that-appears', AboutSelf7::class);
Route::get('/skintest/where-acne-often-grows', AboutSelf8::class);
Route::get('/skintest/You-have-the-following-skin-conditions', AboutSelf9::class);
Route::get('/skintest/Have-you-ever-experienced-an-allergic-reaction', AboutSelf10::class);
Route::get('/skintest/How-often-do-you-use-retinol', AboutSelf11::class);




Route::get('/register', Register::class);
Route::get('/login', Login::class);
