<?php

namespace App\Http\Livewire\Admin\Feature;


use App\Models\Features;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Index extends Component
{
    public $product_id = '', $description = '', $feature_id;
    protected $listeners = ['delete', 'saveFeature'];

    public function saveFeature($formData, Features $features)
    {


        if ($this->feature_id != null) {
            $feature_id = $this->feature_id;
            $validator = Validator::make($formData, [
                'product_id' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'description' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            ]);
        } else {
            $feature_id = 0;
            $validator = Validator::make($formData, [
                'product_id' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'description' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            ]);
        }

        $validator->validate();
        $this->resetValidation();
        $features->saveFeature($formData, $feature_id);

        $this->dispatchBrowserEvent('success', [
            'message' => trans('alerts.success')
        ]);

        $this->product_id = '';
        $this->description = '';
        $this->feature_id = '';

    }


    public function editFeature($feature_id)
    {
        $feature = Features::query()->where('id', $feature_id)->first();

        $this->product_id = $feature->product_id;
        $this->description = $feature->description;
        $this->feature_id = $feature->id;
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

    public function delete($feature_id)
    {
        Features::query()->where('id', $feature_id)->delete();

        $this->dispatchBrowserEvent('success', [
            'message' => 'The operation was successful'
        ]);
    }

    public function render()
    {
        $products = Product::all();
        $features = Features::all();
        return view('admin.livewire.feature.index', ['products' => $products, 'features' => $features])->extends('admin.layouts.app');
    }
}
