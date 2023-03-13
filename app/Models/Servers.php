<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servers extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $with = ['type'];

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
                'type_id' => $formData['type_id'],
            ]
        );
    }

    public function type()
    {
        return $this->belongsTo(Types::class, 'type_id');
    }
}
