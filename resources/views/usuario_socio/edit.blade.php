<!-- Seccion para editar datos -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Editar Datos de Usuario</title>

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/lib/chosen/chosen.min.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>

    <div class="Content justify-content-center">
      <div class="col-lg-12 col-md-12">
        <div class="card">
        <!-- Credit Card -->
          <div id="registro_socio">
              <div class="card-body">
                  <div id="registro_socio">
                  <!-- <div action="/Registro_socio.devuelverespuesta" method="POST" name="sentMessage" id="registro_socio"> -->
                      <div class="form-group text-center font-weight-bold">
                        <div class="card-header">

                          <strong>Edicion de socio</strong> <small> QUASAR</small>
                        </div>
                      </div>



                      <form class="" action="{{ url('/usuario_socio/'.$usuario->id) }}" method="post" enctype="multipart/form-data ">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        <!-- enviamos por el petodo patch el id del usuario al metodo update para que se actualice la informacion del usuario -->


                      <div class="row">
                          <div class="col-3">
                              <div class="form-group">
                                  <label for="USUARIO_NOMBRE" class="control-label mb-1 font-weight-bold">{{'Nombre'}}</label>
                                  <input  class="form-control" name="USUARIO_NOMBRE" id="USUARIO_NOMBRE" type="text" value="{{$usuario->USUARIO_NOMBRE}}" placeholder="Ingrese su nombre"  data-validation-required-message="Porfavor ingrese un nombre valido">
                              </div>
                          </div>

                          <div class="col-3">
                              <div class="form-group">
                                  <label for="USUARIO_APELLIDOPATERNO" class="control-label mb-1 font-weight-bold">{{'Apellido Paterno'}}</label>
                                  <input  class="form-control" name="USUARIO_APELLIDOPATERNO" id="USUARIO_APELLIDOPATERNO" type="text" value="{{$usuario->USUARIO_APELLIDOPATERNO}}" placeholder="Ingrese su apellido paterno"  data-validation-required-message="Porfavor ingrese un nombre valido">
                              </div>
                          </div>

                          <div class="col-3">
                              <div class="form-group">
                                  <label for="USUARIO_APELLIDOMATERNO" class="control-label mb-1 font-weight-bold">{{'Apellido Materno'}}</label>
                                  <input  class="form-control" name="USUARIO_APELLIDOMATERNO" id="USUARIO_APELLIDOMATERNO" type="text" value="{{$usuario->USUARIO_APELLIDOMATERNO}}" placeholder="Ingrese su apellido materno"  data-validation-required-message="Porfavor ingrese un nombre valido">
                              </div>
                          </div>

                          <div class="col-3">
                              <label class="control-label mb-1 font-weight-bold">{{'Sexo'}}</label>
                                <div class="form-check">

                                    <div class="radio">
                                        <label for="USUARIO_SEXO" class="form-check-label ">
                                            <input type="radio" id="Masculino" name="USUARIO_SEXO" value="Masculino" class="form-check-input" >{{'Masculino'}}
                                        </label>
                                    </div>

                                    <div class="radio">
                                        <label for="USUARIO_SEXO" class="form-check-label ">
                                            <input type="radio" id="Femenino" name="USUARIO_SEXO" value="Femenino" class="form-check-input">{{'Femenino'}}
                                        </label>
                                    </div>

                                </div>
                           </div>
                      </div>


                      <div class="row">
                          <div class="col-12">
                              <div class="form-group">
                                  <label for="USUARIO_CORREO" class="control-label mb-1 font-weight-bold">{{'Correo Electronico'}}</label>
                                  <input  class="form-control" name="USUARIO_CORREO" id="USUARIO_CORREO" value="{{$usuario->USUARIO_CORREO}}" type="email" placeholder="Ingrese su correo electronico"  data-validation-required-message="Porfavor ingrese un correo valido">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="USUARIO_CALLE" class=" form-control-label font-weight-bold">{{'Calle'}}</label>
                                  <input  class="form-control" name="USUARIO_CALLE" id="USUARIO_CALLE" type="text" value="{{$usuario->USUARIO_CALLE}}" placeholder="Calle"  data-validation-required-message="Porfavor ingrese un domicilio valido" >
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                  <label for="USUARIO_NUM_EXT" class="control-label mb-1 font-weight-bold">{{'N° ext.'}}</label>
                                  <input  class="form-control" name="USUARIO_NUM_EXT" id="USUARIO_NUM_EXT" type="text" value="{{$usuario->USUARIO_NUM_EXT}}" placeholder="Num exterior"  data-validation-required-message="Porfavor ingrese un numero exterior valido" >
                                </div>
                            </div>

                            <div class="col-md-2">
                              <div class="form-group">
                                <label for="USUARIO_NUM_INT" class="control-label mb-1 font-weight-bold">{{'N° int.'}}</label>
                                <input  class="form-control" name="USUARIO_NUM_INT" id="USUARIO_NUM_INT" type="text" value="{{$usuario->USUARIO_NUM_INT}}" placeholder="Num interior"  data-validation-required-message="Porfavor ingrese un numero interior valido" >
                              </div>
                            </div>

                            <div class="col-md-2">
                              <div class="form-group">
                                <label for="USUARIO_CP" class="control-label mb-1 font-weight-bold">{{'CP'}}</label>
                                <input  class="form-control" name="USUARIO_CP" id="USUARIO_CP" type="text" value="{{$usuario->USUARIO_CP}}" placeholder="Codigo Postal"  data-validation-required-message="El codigo postal debe tener 4 digitos" >
                              </div>
                            </div>
                          </div>


                          <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="USUARIO_COLONIA" class=" form-control-label font-weight-bold">{{'Colonia'}}</label>
                                      <input  class="form-control" name="USUARIO_COLONIA" id="USUARIO_COLONIA" type="text" value="{{$usuario->USUARIO_COLONIA}}" placeholder="Colonia"  data-validation-required-message="Porfavor ingrese una colonia valida" >
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                      <label for="USUARIO_LOCALIDAD" class="control-label mb-1 font-weight-bold">{{'Localidad'}}</label>
                                      <input  class="form-control" name="USUARIO_LOCALIDAD" id="USUARIO_LOCALIDAD" type="text" value="{{$usuario->USUARIO_LOCALIDAD}}" placeholder="localidad"  data-validation-required-message="Porfavor ingrese una localidad valida" >
                                    </div>
                                </div>

                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="USUARIO_ENTIDAD" class="control-label mb-1 font-weight-bold">{{'Entidad'}}</label>
                                    <input  class="form-control" name="USUARIO_ENTIDAD" id=USUARIO_ENTIDAD type="text" value="{{$usuario->USUARIO_ENTIDAD}}" placeholder="entidad"  data-validation-required-message="Porfavor ingrese un estado valido" >
                                  </div>
                                </div>
                              </div>


                          <div class="row">
                            <div class="col-md-6">
                                  <label for="USUARIO_TEL_CASA" class=" form-control-label font-weight-bold">{{'Telefono de casa (con LADA)'}}</label>
                                  <div class="input-group">
                                      <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input class="form-control" name="USUARIO_TEL_CASA" id="USUARIO_TEL_CASA" type="number" value="{{$usuario->USUARIO_TEL_CASA}}" placeholder="Telefono de casa"  data-validation-required-message="Porfavor ingrese el numero de telefono  a 10 digitos, empezando con la lada">
                                        <p class="help-block text-danger"></p>
                                  </div>
                                  <small class="form-text text-muted">(ext.) 999-9999</small>
                            </div>

                            <div class="col-md-6">
                                  <label for="USUARIO_TEL_CEL" class=" form-control-label font-weight-bold">{{'Telefono celular'}}</label>
                                  <div class="input-group">
                                      <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input class="form-control" name="USUARIO_TEL_CEL" id="USUARIO_TEL_CEL" type="number" value="{{$usuario->USUARIO_TEL_CEL}}" placeholder="Celular"  data-validation-required-message="Porfavor ingrese el numero celular  a 10 digitos">
                                        <p class="help-block text-danger"></p>
                                  </div>
                                  <small class="form-text text-muted">999-999-99-99</small>
                            </div>
                            </div>


                        <div class="row"><div class="col-md-12"><div class="form-group"><label for="USUARIO_CURP" class=" form-control-label font-weight-bold">{{'CURP'}}</label><input  class="form-control" name="USUARIO_CURP" id="USUARIO_CURP" type="text" value="{{$usuario->USUARIO_CURP}}" placeholder="CURP a 18 caracteres" data-validation-required-message="Porfavor ingrese un curp valido a 18 caracteres" ></div></div></div>



                          <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="USUARIO_FECHA_NAC" class=" form-control-label font-weight-bold">{{'Fecha de Nacimiento'}}</label>
                                      <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                          <input class="form-control" name="USUARIO_FECHA_NAC" id="USUARIO_FECHA_NAC" type="date" value="{{$usuario->USUARIO_FECHA_NAC}}" placeholder="Fecha de Nacimiento"  data-validation-required-message="Porfavor ingrese una fecha de nacimiento valida">
                                      </div>
                                      <small class="form-text text-muted">dia/mes/año</small>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="USUARIO_ENTIDAD_NAC" class=" form-control-label font-weight-bold">{{'Entidad de nacimiento'}}</label>
                                      <input  class="form-control" name="USUARIO_ENTIDAD_NAC" id="USUARIO_ENTIDAD_NAC" type="text" value="{{$usuario->USUARIO_ENTIDAD_NAC}}" placeholder="Estado"  data-validation-required-message="Porfavor ingrese un estado valido" >
                                    </div>
                                </div>

                                <div class="col-md-4">
                                  <div class="row form-group">
                                      <div class="col col-md-12"><label  class=" form-control-label font-weight-bold">{{'Estado Civil:'}}</label></div>
                                      <div class="col col-md-5">
                                          <div class="form-check">

                                              <div class="radio">
                                                  <label for="USUARIO_ESTADO_CIVIL" class="form-check-label ">
                                                      <input type="radio" id="solter@" name="USUARIO_ESTADO_CIVIL" value="soler@" class="form-check-input">{{'Solter@'}}
                                                  </label>
                                              </div>

                                              <div class="radio">
                                                  <label for="USUARIO_ESTADO_CIVIL" class="form-check-label ">
                                                      <input type="radio" id="casad@" name="USUARIO_ESTADO_CIVIL" value="casad@" class="form-check-input">{{'Casad@'}}
                                                  </label>
                                              </div>

                                          </div>
                                      </div>
                                  </div>
                                </div>
                            </div>



                            <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="USUARIO_BANCO" class=" form-control-label font-weight-bold">{{'Banco'}}</label>
                                    <input  class="form-control"  id="USUARIO_BANCO" name="USUARIO_BANCO" type="text" value="{{$usuario->USUARIO_BANCO}}" placeholder="Banco" data-validation-required-message="Porfavor ingrese su banco preferencial">
                                  </div>
                              </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="USUARIO_CLAVE_INTERBANCARIA" class=" form-control-label font-weight-bold">{{'Clave Interbancaria'}}</label>
                                        <input  class="form-control"  id="USUARIO_CLAVE_INTERBANCARIA" name="USUARIO_CLAVE_INTERBANCARIA"  type="text" value="{{$usuario->USUARIO_CLAVE_INTERBANCARIA}}" placeholder="Clave Interbancaria"  data-validation-required-message="Porfavor ingrese su clave interbancaria a 16 digitos">
                                      </div>
                                  </div>
                              </div>

                            <div class="row">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                        <label for="USUARIO_ID_PATROCINADOR" class=" form-control-label font-weight-bold">{{'ID de patrocinador'}}</label>
                                        <input  class="form-control"  id="USUARIO_ID_PATROCINADOR" name="USUARIO_ID_PATROCINADOR" type="number" value="{{$usuario->USUARIO_ID_PATROCINADOR}}" placeholder="ID de patrocinador"  data-validation-required-message="Porfavor ingrese un ID valido" >
                                      </div>
                                  </div>

                                  <div class="col-md-4">
                                      <div class="form-group">
                                        <label for="USUARIO_ID_UPLINE_DIRECTO" class=" form-control-label font-weight-bold">{{'ID de upline directo'}}</label>
                                        <input  class="form-control"  id="USUARIO_ID_UPLINE_DIRECTO" name="USUARIO_ID_UPLINE_DIRECTO" type="number" value="{{$usuario->USUARIO_ID_UPLINE_DIRECTO}}" placeholder="ID de up line directo"  data-validation-required-message="Porfavor ingrese un ID valido" >
                                      </div>
                                  </div>

                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="USUARIO_BENEFICIARIO" class="control-label mb-1 font-weight-bold">{{'Beneficiario'}}</label>
                                      <input  class="form-control"  id="USUARIO_BENEFICIARIO" name="USUARIO_BENEFICIARIO" type="text" value="{{$usuario->USUARIO_BENEFICIARIO}}" placeholder="Beneficiario"  data-validation-required-message="Porfavor ingrese un nombre valido" >
                                    </div>
                                  </div>
                              </div>

                            <div>
                                <!-- <button type="submit"  name="Editar" class="btn btn-lg btn-info btn-block" >

                                    <span>EDITAR</span>

                                </button> -->

                                <input type="submit"  value="Modificar">
                                <a href="{{url('usuario_socio')}}">Regresar</a>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </body>
          </html>
