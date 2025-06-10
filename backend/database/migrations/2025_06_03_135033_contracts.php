<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void {
    Schema::create('contracts', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('renter_id')->nullable();
        $table->foreignId('room_id')->constrained('rooms')->onDelete('cascade');
        $table->enum('type', ['deposit', 'rental']);
        $table->date('start_date');
        $table->date('end_date')->nullable();
        $table->text('note')->nullable();
        $table->enum('status', ['pending', 'signed', 'cancelled']);

        $table->timestamps();
        $table->foreign('renter_id')->references('id')->on('users')->onDelete('set null');
    });
    }

    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
