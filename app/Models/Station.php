<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    public function installation()
    {
        return $this->belongsTo(Installation::class);
    }

    public function resources()
    {
        return $this->belongsToMany(Resource::class, 'resources_stations');
    }
}
