<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    //
    protected $table = 'cards';

    protected $fillable = [
        'name',
        'image',
        'set',
        'attribute_id',
        'monster_type_id',
        'frame_id',
        'spell_type_id',
        'trap_type_id',
        'level',
        'rank',
        'link_rating',
        'pendulum_scale',
        'atk',
        'def',
        'description',
        'rarity',
        'quantity',
        'price',
        ];

        public function attribute()
        {
            return $this->belongsTo(Attribute::class);
        }

        public function monsterType()
        {
            return $this->belongsTo(MonsterType::class);
        }

        public function frame()
        {
            return $this->belongsTo(CardFrame::class);
        }

        public function spellType()
        {
            return $this->belongsTo(SpellType::class);
        }

        public function trapType()
        {
            return $this->belongsTo(TrapType::class);
        }

}
