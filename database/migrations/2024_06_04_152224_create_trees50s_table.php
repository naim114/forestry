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
        Schema::create('trees50s', function (Blueprint $table) {
            $table->id();
            $table->text('TreeNum');
            $table->text('status')->nullable();
            $table->double('PROD')->nullable();
            $table->integer('cut_angle')->nullable();
            $table->double('DMG_stem')->nullable();
            $table->double('DMG_crown')->nullable();
            $table->double('D30')->nullable();
            $table->double('V30')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trees50s');
    }
};