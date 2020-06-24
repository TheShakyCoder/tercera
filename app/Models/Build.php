<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Build extends Model
{
    public function parts()
    {
        return $this->hasMany(Part::class);
    }
}
