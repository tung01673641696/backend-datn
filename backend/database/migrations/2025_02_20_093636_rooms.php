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
            $table->string('room_number'); // Số phòng
            $table->string('floor'); //tầng
            $table->decimal('price', 10, 2); // Giá thuê phòng
            $table->decimal('price_deposit', 10 , 2);
            $table->integer('area'); // Diện tích phòng (m²)
            $table->integer('user_number');
            $table->string('image');
            $table->string('description');
            $table->boolean('is_available')->default(true); // Trạng thái có sẵn hay không
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
