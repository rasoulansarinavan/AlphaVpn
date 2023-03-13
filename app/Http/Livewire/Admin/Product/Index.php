<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\features;
use App\Models\Product;
use App\Models\Servers;
use App\Models\Types;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Index extends Component
{

    public $server_id, $name = '', $discount = '', $type_id = '', $price = '', $product_id;

    protected $listeners = ['delete', 'saveProduct'];

    public function saveProduct($formData, Product $products)
    {
        if ($this->product_id != null) {
            $product_id = $this->product_id;
            $validator = Validator::make($formData, [
                'server_id' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'name' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'discount' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'type_id' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'price' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            ]);
        } else {
            $product_id = 0;
            $validator = Validator::make($formData, [
                'server_id' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'name' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'discount' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'type_id' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'price' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            ]);
        }
        $validator->validate();
        $this->resetValidation();
        $products->saveProduct($formData, $product_id);

        $this->dispatchBrowserEvent('success', [
            'message' => trans('alerts.success')
        ]);

        $this->server_id = '';
        $this->name = '';
        $this->discount = '';
        $this->type_id = '';
        $this->price = '';
        $this->product_id = '';

    }

    public function editProduct($product_id)
    {
        $product = Product::query()->where('id', $product_id)->first();
        $this->server_id = $product->server_id;
        $this->name = $product->name;
        $this->discount = $product->discount;
        $this->type_id = $product->type_id;
        $this->price = $product->price;
        $this->product_id = $product->id;
    }

    public function deleteConfirm($id)
    {

        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'title' => trans('Are you sure???'),
            'text' => '',
            'id' => $id
        ]);
    }


    public function delete($product_id)
    {
        Product::query()->where('id', $product_id)->delete();

        $this->dispatchBrowserEvent('success', [
            'message' => 'The operation was successful'
        ]);
    }


    function render()
    {
        $products = Product::all();
        $servers = Servers::all();
        $features = features::all();
        $types = Types::all();
        return view('admin.livewire.product.index', ['products' => $products, 'servers' => $servers, 'features' => $features,'types'=>$types])->extends('admin.layouts.app');
    }
}
