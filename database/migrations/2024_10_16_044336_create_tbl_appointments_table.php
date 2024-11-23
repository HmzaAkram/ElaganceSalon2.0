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
        Schema::create('tbl_appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userId');
            $table->foreign('userId')->references('id')->on('tbl_users');
            $table->unsignedBigInteger('serviceId');
            $table->foreign('serviceId')->references('id')->on('tbl_services');
            $table->date('bookDate');
            $table->time('bookTime');
            $table->string('status');
            $table->string('paymentMethod');
            $table->integer('payAmount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_appointments');
    }
};
