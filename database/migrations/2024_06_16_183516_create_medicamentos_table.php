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
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->id(); // Crea automáticamente la columna 'id' como primary key autoincremental
            $table->string('nombre', 100)->nullable(false); // Columna 'nombre' de tipo VARCHAR(100) y no permite valores nulos
            $table->string('descripcion', 100)->nullable(); // Columna 'descripcion' de tipo VARCHAR(100) que permite valores nulos
            $table->string('fecha_caducidad', 20)->nullable(); // Columna 'fecha_caducidad' de tipo VARCHAR(20) que permite valores nulos
            $table->decimal('precio', 10, 2)->nullable(); // Columna 'precio' de tipo DECIMAL(10, 2) que permite valores nulos
            $table->unsignedBigInteger('id_proveedor')->nullable(); // Columna 'id_proveedor' de tipo INT que referencia a la tabla 'proveedor'
            $table->foreign('id_proveedor')->references('id')->on('proveedores')->onDelete('set null');
            $table->timestamps(); // Crea automáticamente las columnas 'created_at' y 'updated_at' para el control de tiempo
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicamentos');
    }
};
