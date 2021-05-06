<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
//    use HasFactory;

    public function transports() {
        return $this->belongsToMany('App\Models\Transport', 'transport_driver', 'driver_id', 'transport_id');
    }
}
