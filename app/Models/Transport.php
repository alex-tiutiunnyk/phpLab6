<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;

    public function drivers() {
        return $this->belongsToMany('App\Models\Driver', 'transport_driver', 'transport_id', 'driver_id');
    }

    public function ways() {
        return $this->belongsTo('App\Models\Way');
    }
}
