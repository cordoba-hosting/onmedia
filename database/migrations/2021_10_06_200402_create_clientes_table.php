<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            
                $table->bigIncrements('id');
                $table->string('nombre');
                $table->string('apellido');
                $table->string('cuit');
                $table->string('email')->unique();
                $table->string('email_2');
                $table->string('email_3');
                $table->string('tel_1');
                $table->string('tel_2');
                $table->string('tel_3');
                $table->string('comentarios');
                $table->boolean('borrado')->default(false);
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
        Schema::dropIfExists('clientes');
    }
}
