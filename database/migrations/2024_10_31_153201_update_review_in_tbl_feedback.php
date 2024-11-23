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
        Schema::table('tbl_feedback', function (Blueprint $table) {
            // Update the star_rating column to have a new default value
            $table->integer('review')->default(3)->change(); // Change the default to 3
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_feedback', function (Blueprint $table) {
            //
        });
    }
};
