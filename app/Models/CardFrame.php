<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardFrame extends Model
{
    //
    protected $table = 'card_frames';

    protected $fillable = [
        'name',
    ];

    public function cards()
    {
        return $this->hasMany(Card::class, 'card_frame_id');
    }
}
