<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DefaultForEmails1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('cliente', function (Blueprint $table) {
            $table->string('email_2')->default('')->nullable()->change();
            $table->string('email_3')->default('')->nullable()->change();
            $table->string('tel_1')->default('')->nullable()->change();
            $table->string('tel_2')->default('')->nullable()->change();
            $table->string('tel_3')->default('')->nullable()->change();
        });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
