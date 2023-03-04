<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Features extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function saveFeature($formData, $feature_id)
    {
        Features::query()->updateOrCreate(
            [
                'id' => $feature_id
            ],
            [
                'product_id' => $formData['product_id'],
                'description' => $formData['description']
            ]
        );
    }


    public function parent()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

}
