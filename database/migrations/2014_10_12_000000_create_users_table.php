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
        Schema::create('users', function (Blueprint $table) {
            // Atribut :
            $table->id();
            $table->integer('role')->default(1);
            // Role
            // 1. Pembeli
            // 2. Boss / Owner
            // 3. Sales / Manager Cabang
            // 4. Admin Gudang
            // 5. kurir
            $table->string('nama_user',40);
            $table->string('no_telp',20);
            $table->string('alamat',50)->nullable();
            $table->string('image')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
