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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id(); // Crea automáticamente la columna 'id' como primary key autoincremental
            $table->string('nombre', 100); // Columna 'nombre' de tipo VARCHAR con longitud máxima de 100 caracteres
            $table->bigInteger('telefono')->nullable(); // Columna 'telefono' de tipo INT(15) en MySQL, pero como bigInteger en Laravel para soportar valores grandes
            $table->timestamps(); // Crea automáticamente las columnas 'created_at' y 'updated_at' para el control de tiempo
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
