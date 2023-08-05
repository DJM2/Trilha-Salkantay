<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toursens', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',120)->unique();
            $table->string('descripcion',250);
            $table->text('contenido');
            $table->text('resumen');
            $table->text('detallado');
            $table->text('incluidos');            
            $table->text('importante')->nullable();
            $table->string('ubicacion');
            $table->integer('precio');
            $table->integer('dias');
            $table->string('img');            
            $table->string('categoria');
            $table->string('keywords');
            $table->string('slug');
            $table->string('clase');
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
        Schema::dropIfExists('toursens');
    }
};
