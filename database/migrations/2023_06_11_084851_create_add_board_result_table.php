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
        Schema::create('add_board_result', function (Blueprint $table) {
            $table->id();
            $table->string('year');
            $table->string('total_student');
            $table->string('passed');
            $table->string('passed(%)');
            $table->string('A+');
            $table->string('details');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_board_result');
    }
};
