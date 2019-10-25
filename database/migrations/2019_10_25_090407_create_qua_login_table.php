<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuaLoginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('QUA_LOGIN', function (Blueprint $table) {
            $table->bigIncrements('LOGIN_ID');
            $table->integer('LOGIN_CONSECUTIVO');
            $table->string('LOGIN_CONTRASENA');
            $table->string('CATEGORIA');
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
