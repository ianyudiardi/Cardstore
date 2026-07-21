<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpellType extends Model
{
    //
    protected $table = 'spell_types';

    protected $fillable = [
        'name',
    ];
    
    public function cards()
    {
        return $this->hasMany(Card::class, 'spell_type_id');
    }

}
