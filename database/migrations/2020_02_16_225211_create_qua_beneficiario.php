<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuaBeneficiario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qua_beneficiario', function (Blueprint $table) {
            $table->bigIncrements('id');
            //datos que se le van a pedir al beneficiario
            $table->string('BENEFICIARIO_NOMBRE');
            $table->string('BENEFICIARIO_TEL_CEL');
            $table->string('BENEFICIARIO_TEL_CASA');
            $table->string('BENEFICIARIO_EMAIL');
            $table->date('BENEFICIARIO_FECHA_ULT_COMPRA');


    //datos para unir otras tablas proximamente
            // $table->string('ID_UPLINE');
            // $table->string('ID_PATROCINADOR');


        //hacemos la relacion entre la tabla  qua_usuario y qua_beneficiario a traves de una fk que tiene la qua_beneficiarios

            // $table->unsignedBigInteger('fk_id');
            // $table->foreign('fk_id')->references('id')->on('registro_socios');

            //  $table->unsignedBigInteger('FK_BENEFICIARIO');
            // $table->foreign('FK_BENEFICIARIO')->references('id')->on('qua_beneficiarios');


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
        Schema::dropIfExists('qua_beneficiario');
    }
}
