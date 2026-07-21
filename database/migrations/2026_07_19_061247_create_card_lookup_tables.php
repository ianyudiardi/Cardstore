<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
        });

        Schema::create('monster_types', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
        });

        Schema::create('card_frames', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
        });

        Schema::create('spell_types', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
        });

        Schema::create('trap_types', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendulum_scales');
        Schema::dropIfExists('ranks');
        Schema::dropIfExists('link_ratings');
        Schema::dropIfExists('trap_types');
        Schema::dropIfExists('spell_types');
        Schema::dropIfExists('card_frames');
        Schema::dropIfExists('levels');
        Schema::dropIfExists('monster_types');
        Schema::dropIfExists('attributes');
    }
};