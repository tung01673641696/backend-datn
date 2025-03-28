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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('house_id');
            $table->enum('room_type', ['homestay','tro_thuong','chung_cu_mini']);
            $table->string('name');
            $table->string('floor');
            $table->decimal('price', 10, 2);
            $table->decimal('price_deposit', 10 , 2);
            $table->integer('area');
            $table->integer('user_number');
            $table->json('image');
            $table->string('description')->nullable();
            $table->boolean('is_available')->default(true); // Trạng thái có sẵn hay không
            $table->timestamps();

            $table->foreign('house_id')->references('id')->on('houses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
