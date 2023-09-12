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
        Schema::create('all_classes', function (Blueprint $table) {
            $table->id();
            $table->string('medium_name');
            $table->string('class_name');
            $table->string('rank');
            $table->string('class_code');
            $table->string('has_group');
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('all_classes');
    }
};
