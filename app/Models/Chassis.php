<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chassis extends Model
{
    public function ships()
    {
        return $this->hasMany(Ship::class);
    }
}
