<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardLookupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('attributes')->upsert([
            ['name' => 'DARK'],
            ['name' => 'LIGHT'],
            ['name' => 'EARTH'],
            ['name' => 'WATER'],
            ['name' => 'FIRE'],
            ['name' => 'WIND'],
            ['name' => 'DIVINE'],
        ], ['name']);

        DB::table('monster_types')->upsert([
            ['name' => 'Aqua'],
            ['name' => 'Beast'],
            ['name' => 'Beast-Warrior'],
            ['name' => 'Creator God'],
            ['name' => 'Cyberse'],
            ['name' => 'Dinosaur'],
            ['name' => 'Divine-Beast'],
            ['name' => 'Dragon'],
            ['name' => 'Fairy'],
            ['name' => 'Fiend'],
            ['name' => 'Fish'],
            ['name' => 'Illusion'],
            ['name' => 'Insect'],
            ['name' => 'Machine'],
            ['name' => 'Plant'],
            ['name' => 'Psychic'],
            ['name' => 'Pyro'],
            ['name' => 'Reptile'],
            ['name' => 'Rock'],
            ['name' => 'Sea Serpent'],
            ['name' => 'Spellcaster'],
            ['name' => 'Thunder'],
            ['name' => 'Warrior'],
            ['name' => 'Winged Beast'],
            ['name' => 'Wyrm'],
            ['name' => 'Zombie'],
        ], ['name']);

        DB::table('card_frames')->upsert([
            ['name' => 'Normal Monster'],
            ['name' => 'Effect Monster'],
            ['name' => 'Ritual Monster'],
            ['name' => 'Fusion Monster'],
            ['name' => 'Synchro Monster'],
            ['name' => 'Xyz Monster'],
            ['name' => 'Pendulum Monster'],
            ['name' => 'Pendulum Effect Monster'],
            ['name' => 'Pendulum Normal Monster'],
            ['name' => 'Pendulum Fusion Monster'],
            ['name' => 'Pendulum Synchro Monster'],
            ['name' => 'Pendulum Xyz Monster'],
            ['name' => 'Link Monster'],
            ['name' => 'Token'],
            ['name' => 'Spell'],
            ['name' => 'Trap'],
        ], ['name']);

        DB::table('spell_types')->upsert([
            ['name' => 'Normal'],
            ['name' => 'Continuous'],
            ['name' => 'Equip'],
            ['name' => 'Field'],
            ['name' => 'Quick-Play'],
            ['name' => 'Ritual'],
        ], ['name']);

        DB::table('trap_types')->upsert([
            ['name' => 'Normal'],
            ['name' => 'Continuous'],
            ['name' => 'Counter'],
        ], ['name']);
    }
}