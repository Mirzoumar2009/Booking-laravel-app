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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); // Ссылка на пользователя
            $table->foreignId('table_id')->nullable()->constrained(); // Ссылка на стол
            $table->foreignId('cabin_id')->nullable()->constrained(); // Ссылка на кабину
            $table->dateTime('booking_time');
            $table->integer('number_of_people');
            $table->enum('status', ['pending', 'confirmed', 'cancelled']);
            $table->enum('booking_type', ['home', 'in_restaurant']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
