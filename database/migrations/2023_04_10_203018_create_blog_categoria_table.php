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
        Schema::create('blog_categoria', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blog_id');
            $table->unsignedBigInteger('categoria_id');
            $table->timestamps();
            $table->foreign('blog_id')->references('id')->on('djmblogs')->onDelete('cascade');
            $table->foreign('categoria_id')->references('id')->on('buscadores')->onDelete('cascade');
            $table->unique(['blog_id', 'categoria_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_categoria');
    }
};
