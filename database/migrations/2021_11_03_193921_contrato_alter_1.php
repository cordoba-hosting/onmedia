<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContratoAlter1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contrato', function (Blueprint $table) {
           
        }); 
    }

    public function up()
    {
        Schema::table('contrato', function (Blueprint $table) {
            
            $table->timestamp('updated_at')->nullable();
            
        });
    }
}
