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
        Schema::table('trees', function (Blueprint $table) {
            $table->double('PROD');
            $table->integer('cut_angle');
            $table->double('DMG_stem');
            $table->double('DMG_crown');
            $table->double('D30');
            $table->double('V30');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trees', function (Blueprint $table) {
            $table->dropColumn('PROD');
            $table->dropColumn('cut_angle');
            $table->dropColumn('DMG_stem');
            $table->dropColumn('DMG_crown');
            $table->dropColumn('D30');
            $table->dropColumn('V30');
        });
    }
};