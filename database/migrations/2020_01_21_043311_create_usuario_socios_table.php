<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioSociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_socios', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('USUARIO_NOMBRE');
            $table->string('USUARIO_APELLIDOPATERNO');
            $table->string('USUARIO_APELLIDOMATERNO');
            $table->string('USUARIO_SEXO');
            $table->string('USUARIO_CORREO');
            $table->string('USUARIO_CALLE');
            $table->integer('USUARIO_NUM_EXT');
            $table->integer('USUARIO_NUM_INT');
            $table->integer('USUARIO_CP');
            $table->string('USUARIO_COLONIA');
            $table->string('USUARIO_LOCALIDAD');
            $table->string('USUARIO_ENTIDAD');
            $table->string('USUARIO_TEL_CASA');
            $table->string('USUARIO_TEL_CEL');
            $table->string('USUARIO_CURP');
            $table->date('USUARIO_FECHA_NAC');
            $table->string('USUARIO_ENTIDAD_NAC');
            $table->string('USUARIO_ESTADO_CIVIL');
            $table->string('USUARIO_BANCO');
            $table->string('USUARIO_CLAVE_INTERBANCARIA');

            $table->integer('USUARIO_ID_PATROCINADOR');
            $table->integer('USUARIO_ID_UPLINE_DIRECTO');
            $table->string('USUARIO_BENEFICIARIO');

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
        Schema::dropIfExists('usuario_socios');
    }
}
