<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Body extends Model
{
    use NodeTrait;

    public function resources()
    {
        return $this->belongsToMany(Resource::class, 'bodies_resources');
    }
}
