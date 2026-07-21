<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrapType extends Model
{
    //
    protected $table = 'trap_types';

    protected $fillable = [
        'name',
    ];

    public function cards()
    {
        return $this->hasMany(Card::class, 'trap_type_id');
    }

}
