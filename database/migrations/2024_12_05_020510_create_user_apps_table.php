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
        Schema::create('user_apps', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable(false)->unique();
            $table->string('name')->nullable(false);
            $table->string('lastname')->nullable(false);
            $table->string('password')->nullable(false);
            $table->string('email')->nullable(false);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_apps');
    }
};
