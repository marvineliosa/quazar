<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuaUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('QUA_USUARIOS', function (Blueprint $table) {

            $table->bigIncrements('USUARIO_ID');
            $table->string('USUARIO_NOMBRE');
            $table->boolean('USUARIO_SEXO');
            $table->string('USUARIO_CORREO');
            $table->string('USUARIO_CALLE');
            $table->integer('USUARIO_NUM_EXT');
            $table->integer('USUARIO_NUM_INT');
            $table->integer('USUARIO_CP');
            $table->string('USUARIO_COLONIA');
            $table->string('USUARIO_LOCALIDAD');
            $table->string('USUARIO_ENTIDAD');
            $table->integer('USUARIO_TEL_CASA');
            $table->integer('USUARIO_TEL_CELULAR');
            $table->string('USUARIO_CURP');
            $table->date('USUARIO_FECHA_NAC');
            $table->string('USUARIO_ENTIDAD_NAC');
          //  $table-char('USUARIO_ESTADO_CIVIL', 50);
            $table->string('USUARIO_BANCO');
            $table->integer('USUARIO_CLAVE_INTERBANCARIA');

            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('QUA_USUARIOS');
    }
}
