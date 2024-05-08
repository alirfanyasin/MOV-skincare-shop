<?php

use App\Http\Controllers\HomePage;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Pages\Cart;
use App\Livewire\Pages\Index;
use App\Livewire\Pages\ProductDetail;
use App\Livewire\Pages\Products;
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

Route::get('/register', Register::class);
Route::get('/login', Login::class);
