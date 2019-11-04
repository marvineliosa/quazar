<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuaRelUsuarioBeneficiario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('QUA_REL_USUARIO_BENEFICIARIO', function (Blueprint $table) {

             $table->unsignedBigInteger('FK_USUARIO');
            $table->foreign('FK_USUARIO')->references('USUARIO_ID')->on('QUA_USUARIOS');

            $table->unsignedBigInteger('FK_BENEFICIARIO');
           $table->foreign('FK_BENEFICIARIO')->references('BENEFICIARIO_ID')->on('QUA_BENEFICIARIOS');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('QUA_REL_USUARIO_BENEFICIARIO');
    }
}
