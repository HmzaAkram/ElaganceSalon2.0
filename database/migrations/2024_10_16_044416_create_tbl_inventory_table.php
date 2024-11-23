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
        Schema::create('tbl_inventory', function (Blueprint $table) {
            $table->id();
            $table->string('productName');
            $table->text('productDescription');
            $table->integer('Stock');
            $table->string('productImage')->nullable();
            $table->integer('productPrice');
            $table->string('productStatus')->default('inStock');
            $table->string('productExpiry');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_inventory');
    }
};
