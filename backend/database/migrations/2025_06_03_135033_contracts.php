<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void {
    Schema::create('contracts', function (Blueprint $table) {
        $table->id();
        $table->foreignId('renter_id')->constrained('users')->onDelete('cascade');
        $table->foreignId('room_id')->constrained('rooms')->onDelete('cascade');
        $table->enum('type', ['deposit', 'rental']);
        $table->decimal('amount', 10, 2);
        $table->date('start_date');
        $table->date('end_date')->nullable();
        $table->text('note')->nullable();

        $table->enum('status', ['pending', 'signed', 'cancelled']);

        $table->timestamps();
    });
    }

    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
