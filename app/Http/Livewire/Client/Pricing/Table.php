<?php

namespace App\Http\Livewire\Client\Pricing;

use App\Models\Order;
use App\Models\Product;
use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;

class Table extends Component
{
    public $products;
    public $product_id;
    public $productPrice;

    protected $listeners = ['buy'];

    public function mount()
    {
        $this->products = Product::all();
    }

    public function checkWalletBalance($product_id)
    {
        $this->product_id = $product_id;
        //get selected product
        $this->productPrice = $productPrice = Product::query()->where('id', $product_id)->pluck('price')->first();

        //get user wallet
        $userWallet = user_wallet(Auth::user()->id);

        //check wallet
        if ($productPrice > $userWallet) {
            $this->dispatchBrowserEvent('swal:pricing', [
                'type' => 'success',
                'text' => 'Your account balance is insufficient.'
            ]);
        } else {
            $this->dispatchBrowserEvent('swal:confirm', [
                'type' => 'success',
                'title' => 'The amount of ' . $productPrice . ' USDT will be deducted from your wallet',
                'message' => 'User Delete Successfully!',
                'text' => 'It will not list on users table soon.'
            ]);
        }

    }

    public function buy()
    {


        DB::transaction(function ($data) {
            $product=Product::query()->where('id','=',$this->product_id)->first();
            $data = [
                'name' =>$product->name,
                'type' => $product->type->name,
                'price' => $this->productPrice
            ];

            //add to wallet
            Wallet::query()->create([
                'user_id' => Auth::user()->id,
                'type' => 'buy',
                'status' => 'confirmed',
                'description' => serialize($data),
                'amount' => $this->productPrice,
            ]);
            //add to orders
            Order::query()->create([
                'user_id' => Auth::user()->id,
                'product_id' => $this->product_id,
                'price' => $this->productPrice,
            ]);
        });


    }

    public function render()
    {
        return view('client.livewire.pricing.table')->extends('client.layouts.app');
    }
}
