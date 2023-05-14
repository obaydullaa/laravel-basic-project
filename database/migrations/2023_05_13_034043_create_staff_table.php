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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100) -> nullable();
            $table->string('email', 100) -> unique();
            $table->string('cell', 100) -> unique();
            $table->integer('age') -> unsigned();
            $table->integer('income') -> unsigned();
            $table->string('school_id');
            $table->longText('Desc') -> default('This is default value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
