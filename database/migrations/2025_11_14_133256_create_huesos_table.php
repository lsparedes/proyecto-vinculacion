<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHuesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huesos', function (Blueprint $table) {
            $table->id(); // Columna 'id'
            
            // Columna para el identificador del modelo 3D (ej: 'pelvis', 'craneo')
            $table->string('identificador')->unique(); 
            
            // Columna para el nombre visible (ej: 'Pelvis', 'Cráneo')
            $table->string('nombre');
            
            // Columna para la descripción
            $table->text('descripcion'); 
            
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('huesos');
    }
}
