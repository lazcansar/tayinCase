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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained('users');
            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->string('company'); // kurum
            $table->string('phone'); // telefon
            $table->string('address'); // adres
            $table->string('vac'); // izin
            $table->string('kadro'); // kadro
            $table->string('startyear'); // başlangıç tarihi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
