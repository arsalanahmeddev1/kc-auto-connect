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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('year');
            $table->string('make');
            $table->string('model');
            $table->string('trim');
            $table->string('zipcode');
            $table->string('ownership');
            $table->string('title');
            $table->string('tires');
            $table->string('battery');
            $table->string('starts');
            $table->string('mileage');
            $table->string('exterior_damage');
            $table->string('exterior_parts');
            $table->string('mirror_glass_lights');
            $table->string('catalytic_converter');
            $table->string('interior_parts');
            $table->string('flood_fire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
