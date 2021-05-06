<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Way extends Model
{
    use HasFactory;

    public function transports() {
        return $this->hasMany('App\Models\Transport', 'id', 'transport_id');
    }
}
