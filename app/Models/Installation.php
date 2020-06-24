<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Installation extends Model
{
    public function stations()
    {
        return $this->hasMany(Station::class);
    }

    public function surface()
    {
        return $this->hasOne(Station::class)->where('is_orbital', false);
    }

    public function orbital()
    {
        return $this->hasOne(Station::class)->where('is_orbital', true);
    }
}
