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
            $table->enum('room_type', ['homestay','trọ thường','chung cư mini']);
            $table->unsignedInteger('name');
            $table->unsignedInteger('floor');
            $table->decimal('price', 10, 2);
            $table->decimal('price_deposit', 10 , 2);
            $table->unsignedInteger('area');
            $table->unsignedInteger('user_number');
            $table->json('image');
            $table->text('description')->nullable();
            $table->enum('status', ['available','deposit', 'rented'])->default('available');
            $table->unsignedBigInteger('renter_id')->nullable();
            $table->timestamps();

            $table->foreign('house_id')->references('id')->on('houses')->onDelete('cascade');
            $table->foreign('renter_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rooms', function (Blueprint $table) {
        $table->dropForeign(['renter_id']);
        $table->dropColumn('renter_id');
    });
    }
};
