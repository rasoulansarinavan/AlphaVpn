<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Livewire\Client\Auth\Register;

use App\Http\Livewire\Admin\Feature\Index;
use App\Http\Livewire\Client\Home\Dashboard;
use App\Http\Livewire\Client\Pricing\Table;
use App\Http\Livewire\Client\Team\Members;
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

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('lang');

Route::get('/logout', [Register::class, 'clientLogout'])->name('client.logout')->middleware('auth:web');
Route::get('/', Register::class)->name('register');

Route::name('client.')->group(function () {

    Route::group(['prefix' => 'register', 'middleware' => 'guest'], function () {
        Route::get('', Register::class)->name('register');
        Route::get('/gmail', [Register::class, 'redirectToProvider'])->name('register.gmail');
        Route::get('/gmail/callback', [Register::class, 'handleProviderCallback'])->name('register.gmail.callback');
    });

    Route::group(['prefix' => 'profile', 'middleware' => 'auth:web'], function () {

        Route::get('/dashboard', Dashboard::class)->name('profile.dashboard');
        Route::get('/account-setting', Setting::class)->name('profile.account-setting');
        Route::get('/pricing-table', Table::class)->name('profile.pricing-table');
        Route::get('/my-team', Members::class)->name('profile.my-team');
        Route::get('/wallet-details', \App\Http\Livewire\Client\Wallet\Index::class)->name('profile.wallet-index');
        Route::get('/orders', App\Http\Livewire\Client\Orders\Index::class)->name('profile.orders');
        Route::get('/my-team', Members::class)->name('profile.my-team');
    });
});




Route::middleware(['guest:admin'])->get('admin/authentication', [AdminLoginController::class, 'index'])->name('admin.authentication');
Route::middleware(['auth:admin'])->get('admin/log-out', function () {
    auth()->logout();
    return redirect()->back();
})->name('admin.log-out');
Route::post('admin/authentication/login', [AdminLoginController::class, 'login'])->name('admin.authentication.login');

/***>>authentication <<***/


Route::middleware(['auth:admin'])->prefix('admin')->name('admin.')->group(function () {Route::get('/dashboard', \App\Http\Livewire\Admin\Home\Dashboard::class)->name('dashboard');
    Route::get('/orders', \App\Http\Livewire\Admin\Order\Index::class)->name('orders');
    Route::get('/user', \App\Http\Livewire\Admin\User\Index::class)->name('user');
    Route::get('/feature', Index::class)->name('feature');
    Route::get('/products', \App\Http\Livewire\Admin\Product\Index::class)->name('products');
    Route::get('/server', \App\Http\Livewire\Admin\Server\Index::class)->name('server');
    Route::get('/types', \App\Http\Livewire\Admin\Type\Index::class)->name('types');
    Route::get('/deposits', \App\Http\Livewire\Admin\Deposit\Index::class)->name('deposits');
//    Route::get('/wallets', \App\Http\Livewire\Admin\Wallet\Index::class)->name('wallets');
    Route::get('/withdrawals', \App\Http\Livewire\Admin\Withdrawal\Index::class)->name('withdrawals');
});
