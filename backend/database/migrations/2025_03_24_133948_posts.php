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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->unsignedBigInteger('house_id')->nullable();
            $table->unsignedBigInteger('room_id')->unique()->nullable();
            $table->unsignedBigInteger('district_id')->nullable();
            $table->unsignedBigInteger('ward_id')->nullable();
            $table->enum('room_type', ['homestay','trọ thường','chung cư mini'])->nullable();
            $table->integer('area')->nullable();
            $table->integer('floor')->nullable();
            $table->integer('max_people')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->decimal('price_deposit', 10 , 2)->nullable();
            $table->json('images')->nullable();
            $table->string('description')->nullable();
            $table->enum('status', ['pending', 'approved', 'expired', 'deleted'])->default('pending');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('house_id')->references('id')->on('houses')->onDelete('cascade');
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');
            $table->foreign('ward_id')->references('id')->on('wards')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
