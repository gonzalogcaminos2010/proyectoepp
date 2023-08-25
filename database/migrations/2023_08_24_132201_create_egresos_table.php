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
        Schema::create('egresos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tecnico_sh_id');  // Relación con la tabla de técnicos.
            $table->unsignedBigInteger('empleado_id');
            $table->unsignedBigInteger('producto_id');
            $table->integer('cantidad');
            $table->date('fecha');
            $table->timestamps();

            $table->foreign('tecnico_sh_id')->references('id')->on('tecnico_s_h_s')->onDelete('cascade');
            $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('cascade');
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('egresos');
    }
};
