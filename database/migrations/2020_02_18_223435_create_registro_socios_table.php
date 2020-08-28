<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroSociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_socios', function (Blueprint $table) {
          $table->bigIncrements('id');

              $table->string('USUARIO_NOMBRE')->nullable($value = true);
              $table->string('USUARIO_APELLIDOPATERNO')->nullable($value = true);
              $table->string('USUARIO_APELLIDOMATERNO')->nullable($value = true);
              $table->string('USUARIO_SEXO')->nullable($value = true);
              $table->string('USUARIO_CORREO')->nullable($value = true);
              $table->string('USUARIO_CALLE')->nullable($value = true);
              $table->integer('USUARIO_NUM_EXT')->nullable($value = true);
              $table->integer('USUARIO_NUM_INT')->nullable($value = true);
              $table->integer('USUARIO_CP')->nullable($value = true);
              $table->string('USUARIO_COLONIA')->nullable($value = true);
              $table->string('USUARIO_LOCALIDAD')->nullable($value = true);
              $table->string('USUARIO_ENTIDAD')->nullable($value = true);
              $table->string('USUARIO_TEL_CASA')->nullable($value = true);
              $table->string('USUARIO_TEL_CEL')->nullable($value = true);
              $table->string('USUARIO_CURP')->nullable($value = true);
              $table->date('USUARIO_FECHA_NAC')->nullable($value = true);
              $table->string('USUARIO_ENTIDAD_NAC')->nullable($value = true);
              $table->string('USUARIO_ESTADO_CIVIL')->nullable($value = true);
              $table->string('USUARIO_BANCO')->nullable($value = true);
              $table->string('USUARIO_CLAVE_INTERBANCARIA')->nullable($value = true);

              $table->integer('USUARIO_ID_PATROCINADOR')->nullable($value = true);
              $table->integer('USUARIO_ID_UPLINE_DIRECTO')->nullable($value = true);
              $table->string('USUARIO_BENEFICIARIO')->nullable($value = true);
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
        Schema::dropIfExists('registro_socios');
    }
}
