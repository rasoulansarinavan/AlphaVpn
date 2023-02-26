<?php

use App\Http\Livewire\Client\Auth\Login;
use App\Http\Livewire\Client\Auth\Register;
use App\Http\Livewire\Client\Home\Dashboard;
use App\Http\Livewire\Client\Pricing\Table;
use App\Http\Livewire\Client\User\Setting;
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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/index', Index::class)->name('index');


Route::prefix('client')->name('client.')->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/account-setting', Setting::class)->name('account-setting');
    Route::get('/pricing-table', Table::class)->name('pricing-table');

});
