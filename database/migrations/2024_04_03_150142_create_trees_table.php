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
        Schema::create('trees', function (Blueprint $table) {
            $table->id();
            $table->integer('BlockX');
            $table->integer('BlockY');
            $table->integer('x');
            $table->integer('y');
            $table->text('TreeNum');
            $table->string('species');
            $table->integer('species_groups');
            $table->double('diameter_dbh_cm');
            $table->double('diameter_class');
            $table->double('stem_height_m');
            $table->double('volume_m3');
            $table->text('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tree');
    }
};
