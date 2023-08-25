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
        Schema::create('tecnico_s_h_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');  // Relación con la tabla de usuarios.
            // Otros campos específicos para los técnicos aquí (como certificaciones, identificación, etc.).
            $table->timestamps();
        
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tecnico_s_h_s');
    }
};
