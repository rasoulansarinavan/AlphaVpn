<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function saveType($formData, $type_id)
    {
        Types::query()->updateOrCreate(
            [
                'id' => $type_id
            ],
            [
                'name' => $formData['name']
            ]
        );
    }
}
