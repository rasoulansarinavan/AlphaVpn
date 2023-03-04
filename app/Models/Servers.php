<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servers extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function saveServer($formData, $server_id)
    {
        Servers::query()->updateOrCreate(
            [
                'id' => $server_id
            ],
            [
                'name' => $formData['name'],
                'password' => $formData['password'],
                'ip' => $formData['ip'],
            ]
        );
    }

//    public function parent()
//    {
//        return $this->belongsTo(Servers::class, 'server_id');
//    }
}
