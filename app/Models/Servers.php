<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servers extends Model
{
    use HasFactory;

    protected $guarded = [];


        public function parent()
    {
        return $this->belongsTo(Servers::class, 'server_id');
    }
}
