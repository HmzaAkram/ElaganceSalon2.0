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
        Schema::create('tbl_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->bigInteger('mobile')->nullable();
            // $table->string('image')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('password')->unique();
            $table->string('address')->nullable();
            $table->integer('role')->default(0); // 0 represents 'user', 1 represents 'admin' (or any other logic you have)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_users');
    }
};
