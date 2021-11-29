<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leptus.servicio', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_servicio', 255);
            $table->string('descripcion', 255);
            $table->string('nombre_clave', 255);
            $table->double('precio');
            $table->integer('stock');
            $table->integer('flag');
            $table->integer('state');
            $table->integer('created_by');
            $table->integer('updated_by');
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
        Schema::dropIfExists('leptus.servicio');
    }
}
