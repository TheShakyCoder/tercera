<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    public function build()
    {
        return $this->belongsTo(Build::class);
    }
}
