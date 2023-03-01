<?php

use App\Http\Livewire\client\Auth\Login;
use App\Http\Livewire\client\Auth\Register;

use App\Http\Livewire\Admin\Feature\Index;
use App\Http\Livewire\client\Home\Dashboard;
use App\Http\Livewire\client\Pricing\Table;
use App\Http\Livewire\client\Team\Members;
use App\Http\Livewire\client\User\Setting;
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
    Route::get('/my-team', Members::class)->name('my-team');

});


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/order', \App\Http\Livewire\Admin\Order\Index::class)->name('order');
    Route::get('/user', \App\Http\Livewire\Admin\User\Index::class)->name('user');
    Route::get('/feature', Index::class)->name('feature');
    Route::get('/products', \App\Http\Livewire\Admin\Product\Index::class)->name('products');
    Route::get('/server', \App\Http\Livewire\Admin\Server\Index::class)->name('server');
    Route::get('/types', \App\Http\Livewire\Admin\Type\Index::class)->name('types');
    Route::get('/deposits', \App\Http\Livewire\Admin\Deposit\Index::class)->name('deposits');
    Route::get('/wallets', \App\Http\Livewire\Admin\Wallet\Index::class)->name('wallets');
    Route::get('/withdrawals', \App\Http\Livewire\Admin\Withdrawal\Index::class)->name('withdrawals');
});
