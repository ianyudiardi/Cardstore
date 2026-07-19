<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function cards()
    {
        return $this->belongsToMany(Cards::class);
    }
}
