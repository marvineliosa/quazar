<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuaLogin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('QUA_LOGIN', function (Blueprint $table) {

            $table->bigIncrements('ID_LOGIN');
            $table->integer('LOGIN_CONSECUTIVO')->nullable($value = true); //(Q1...QN)
            $table->string('LOGIN_USUARIO')->nullable($value = true); //(Q1...QN)
            $table->string('LOGIN_CONTRASEÑA')->nullable($value = true); //(Q1...QN)
            $table->string('LOGIN_CATEGORIA')->nullable($value = true); //(Q1...QN)

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
        Schema::dropIfExists('QUA_LOGIN');
    }
}
