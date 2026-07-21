<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('set');
            $table->foreignId('attribute_id')->nullable()->constrained('attributes')->nullOnDelete();
            $table->foreignId('monster_type_id')->nullable()->constrained('monster_types')->nullOnDelete();
            $table->foreignId('frame_id')->nullable()->constrained('card_frames')->nullOnDelete();
            $table->foreignId('spell_type_id')->nullable()->constrained('spell_types')->nullOnDelete();
            $table->foreignId('trap_type_id')->nullable()->constrained('trap_types')->nullOnDelete();
            $table->string('level')->nullable();
            $table->string('rank')->nullable();
            $table->string('link_rating')->nullable();
            $table->string('pendulum_scale')->nullable();
            $table->string('atk')->nullable();
            $table->string('def')->nullable();
            $table->string('description');
            $table->string('rarity');
            $table->integer('quantity')->default(0);
            $table->integer('price')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
