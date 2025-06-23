<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void {
        Schema::create('service_bills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('room_id');
            $table->unsignedTinyInteger('month');
            $table->year('year');  
            $table->integer('electric_usage');
            $table->integer('water_usage');
            $table->decimal('electric_price', 10, 2);
            $table->decimal('water_price', 10, 2);
            $table->decimal('total_amount', 10, 2); // tổng số tiền
            $table->enum('status', ['unpaid', 'paid'])->default('unpaid');
            $table->timestamps();

            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
