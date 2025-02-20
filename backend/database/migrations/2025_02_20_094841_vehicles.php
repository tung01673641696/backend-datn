<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('license_plate')->nullable(); // Biển số xe
            $table->string('type'); // Loại phương tiện (xe máy, ô tô,...)
            $table->string('image');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        //
    }
};
