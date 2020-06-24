<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    public function bodies()
    {
        return $this->belongsToMany(Body::class, 'bodies_resources');
    }

    public function stations()
    {
        return $this->belongsToMany(Station::class, 'resources_stations');
    }
}
