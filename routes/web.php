<?php

use App\Models\Customer;
use App\Http\Livewire\Customers;
use App\Http\Livewire\Hargaponds;
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

Route::get('/pond/harga', Hargaponds::class);
Route::get('/customers', Customers::class);
Route::get('/', function () {
    return view('welcome');
});
