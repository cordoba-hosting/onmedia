<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DefaultForEmails extends Migration
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
            $table->string('email_2')->default('')->change();
            $table->string('email_3')->default('')->change();
            $table->string('tel_1')->default('')->change();
            $table->string('tel_2')->default('')->change();
            $table->string('tel_3')->default('')->change();
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

