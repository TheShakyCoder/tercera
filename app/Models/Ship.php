<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    public function chassis()
    {
        return $this->belongsTo(Chassis::class);
    }
}
