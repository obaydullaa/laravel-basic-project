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
        Schema::create('teatchers', function (Blueprint $table) {
            $table->id();
            $table->string('name') -> nullable();
            $table->string('email') -> unique();
            $table->string('cell');
            $table->integer('age');
            $table->boolean('status') -> default(1);
            $table->boolean('trash') -> default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teatchers');
    }
};
