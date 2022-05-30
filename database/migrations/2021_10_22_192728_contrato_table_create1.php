<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContratoTableCreate1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /* Schema::create('contrato', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idCliente');
            $table->string('idServicio');
            $table->string('descripcion')->default('-');
            $table->string('dominio')->default('.com');
            $table->date('created_at');
            $table->date('fecha_vencimiento');
            $table->date('fecha_alta');
            $table->float('precio_actual', 8, 2);
        });

        Schema::create('contrato_precio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('created_at');
            $table->integer('idContrato');
            $table->float('precio', 8, 2);
            $table->date('fecha_precio_inicio');
            $table->date('fecha_precio_fin');
            $table->string('descripcion');
            $table->integer('idCambioPrecio');
            $table->boolean('ultimo_precio')->default(true);
        });
*/
       /* Schema::create('motivo_cambio_precio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('created_at');
            $table->string('nombre');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contrato', function (Blueprint $table) {
            //
        });
    }
}
