<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    //
    protected $table = 'attributes';

    protected $fillable = [
        'name',
    ];

    public function cards()
    {
        return $this->hasMany(Card::class, 'attribute_id');
    }

}
