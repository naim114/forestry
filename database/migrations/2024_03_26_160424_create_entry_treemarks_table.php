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
        Schema::create('entry_treemarks', function (Blueprint $table) {
            $table->id();
            $table->string('con_id');
            $table->string('coupe');
            $table->string('block_num');
            $table->string('line_num');
            $table->integer('tree_num');
            $table->integer('species');
            $table->float('diameter');
            $table->float('stem_height');
            $table->integer('num_log');
            $table->string('log_quality');
            $table->integer('dx');
            $table->integer('dy');
            $table->char('left_right');
            $table->char('north_south');
            $table->bigInteger('ux');
            $table->integer('uy');
            $table->tinyInteger('cut_degree');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entry_treemarks');
    }
};