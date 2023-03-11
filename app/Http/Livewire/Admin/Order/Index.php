<?php

namespace App\Http\Livewire\Admin\Order;

use App\Models\File;
use App\Models\Order;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;

    public $files = [];
    public $order_id;
    protected $listeners = ['delete', 'changeStatus'];

    public $statuses = [
        "rejected",
        "pending",
        "confirmed",
    ];

    public function save($order_id)
    {
        $this->validate([
            'files.*' => 'required|max:10', // 1MB Max
        ]);
        $user_id = Order::query()->where('id', $order_id)->pluck('user_id')->first();
        $folder = time() . '_' . Str::random(5);
        foreach ($this->files as $file) {
            $filename = $file->getClientOriginalName();
            $path = '/public/users/vpn/' . $folder;
            $file->storeAS($path, $filename);
            File::query()->insert([
                'user_id' => $user_id,
                'name' => $filename,
                'path' => '/storage/users/vpn/' . $folder . '/' . $filename,
                'type' => 'server',
                'order_id' => $order_id,
            ]);
        }
        Order::query()->where('id', $order_id)->update(['status' => 'confirmed']);

        return redirect()->route('admin.orders');
    }

    public function changeStatus($value)
    {
        $order_id = explode('/', $value)[1];
        $status = explode('/', $value)[0];

        $status_list = ['pending', 'confirmed', 'rejected'];
        if (in_array($status, $status_list)) {
            Order::query()
                ->where([
                    'id' => $order_id,
                ])->update(['status' => $status]);
        }
        $this->dispatchBrowserEvent('success', [
            'message' => 'The operation was successful'
        ]);
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


    public function delete($order_id)
    {
        Order::query()->where('id', $order_id)->delete();

        $this->dispatchBrowserEvent('success', [
            'message' => 'The operation was successful'
        ]);
    }

    public function render()
    {
        $orders = Order::query()->with('product', 'parent', 'files')->get();
        return view('admin.livewire.order.index', ['orders' => $orders])->extends('admin.layouts.app');
    }
}
