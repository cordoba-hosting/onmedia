<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->boolean('borrado')->default(false);
            $table->integer('periodo_facturacion')->default(0); //0 anual, 1 mensual, 2 ocasional


        });

        Schema::create('servicio_precio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->date('fecha');
            $table->boolean('borrado')->default(false);
            $table->boolean('ultimo_precio');
            $table->float('precio', 8,2)->default('0');
            $table->integer('servicio_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicio');
    }
}
