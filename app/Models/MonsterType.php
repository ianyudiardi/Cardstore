<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonsterType extends Model
{
    //
    protected $table = 'monster_types';

    protected $fillable = [
        'name',
    ];

    public function cards()
    {
        return $this->hasMany(Card::class, 'monster_type_id');
    }

}
