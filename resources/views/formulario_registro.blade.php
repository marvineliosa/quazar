@extends('plantillas.menu')
@section('content')


  <div class="Content justify-content-center">
    <div class="col-lg-12 col-md-12">
      <div class="card">
    	<!-- Credit Card -->
        <div id="registro_socio">
            <div class="card-body">
                <form action="/Registro_socio.devuelverespuesta" method="POST" name="sentMessage" id="registro_socio">
                    <div class="form-group text-center" "font-weight-bold">
                      <div class="card-header">
                        <strong>Registro de un nuevo socio</strong> <small> QUASAR</small>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="cc-exp" class="control-label mb-1">Nombre</label>
                                <input  class="form-control"  id="nombre" type="text" placeholder="Ingrese su nombre completo" required="required" data-validation-required-message="Porfavor ingrese un nombre valido">
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="x_card_code" class="control-label mb-1">Sexo</label>
                              <div class="form-check">
                                  <div class="radio">
                                      <label for="radio1" class="form-check-label ">
                                          <input type="radio" id="masc" name="masculino" value="option1" class="form-check-input">Masculino
                                      </label>
                                  </div>
                                  <div class="radio">
                                      <label for="radio2" class="form-check-label ">
                                          <input type="radio" id="fem" name="femenino" value="option2" class="form-check-input">Femenino
                                      </label>
                                  </div>
                              </div>
                         </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="cc-exp" class="control-label mb-1">Correo electrónico</label>
                                <input  class="form-control"  id="correo" type="text" placeholder="Ingrese su correo electronico" required="required" data-validation-required-message="Porfavor ingrese un correo valido">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="calle" class=" form-control-label">Calle</label>
                                <input  class="form-control"  id="calle" type="text" placeholder="Calle" required="required" data-validation-required-message="Porfavor ingrese un domicilio valido" >
                              </div>
                          </div>

                          <div class="col-md-2">
                              <div class="form-group">
                                <label for="calle" class="control-label mb-1">N° ext.</label>
                                <input  class="form-control"  id="num.ext" type="text" placeholder="Num exterior" required="required" data-validation-required-message="Porfavor ingrese un numero exterior valido" >
                              </div>
                          </div>

                          <div class="col-md-2">
                            <div class="form-group">
                              <label for="cc-exp" class="control-label mb-1">N° int.</label>
                              <input  class="form-control"  id="num.int" type="text" placeholder="Num interior" required="required" data-validation-required-message="Porfavor ingrese un numero interior valido" >
                            </div>
                          </div>

                          <div class="col-md-2">
                            <div class="form-group">
                              <label for="cc-exp" class="control-label mb-1">CP</label>
                              <input  class="form-control"  id="cp" type="text" placeholder="Codigo Postal" required="required" data-validation-required-message="El codigo postal debe tener 4 digitos" >
                            </div>
                          </div>
                        </div>


                        <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="calle" class=" form-control-label">Colonia</label>
                                    <input  class="form-control"  id="colonia" type="text" placeholder="Colonia" required="required" data-validation-required-message="Porfavor ingrese una colonia valida" >
                                  </div>
                              </div>

                              <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="calle" class="control-label mb-1">Localidad</label>
                                    <input  class="form-control"  id="localidad" type="text" placeholder="localidad" required="required" data-validation-required-message="Porfavor ingrese una localidad valida" >
                                  </div>
                              </div>

                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="cc-exp" class="control-label mb-1">Entidad</label>
                                  <input  class="form-control"  id=entidad type="text" placeholder="entidad" required="required" data-validation-required-message="Porfavor ingrese un estado valido" >
                                </div>
                              </div>
                            </div>



                        <div class="row">
                          <div class="col-md-6">
                                <label class=" form-control-label">Telefono de casa (con LADA)</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                      <input class="form-control" id="tel.casa" type="number" placeholder="Telefono de casa" required="required" data-validation-required-message="Porfavor ingrese el numero de telefono  a 10 digitos, empezando con la lada">
                                      <p class="help-block text-danger"></p>
                                </div>
                                <small class="form-text text-muted">(ext.) 999-9999</small>
                          </div>

                          <div class="col-md-6">
                                <label class=" form-control-label">Telefono celular</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                      <input class="form-control" id="tel.cel" type="number" placeholder="Celular" required="required" data-validation-required-message="Porfavor ingrese el numero celular  a 10 digitos">
                                      <p class="help-block text-danger"></p>
                                </div>
                                <small class="form-text text-muted">999-999-99-99</small>
                          </div>
                          </div>


                      <div class="row"><div class="col-md-12"><div class="form-group"><label for="curp" class=" form-control-label">CURP</label><input  class="form-control"  id="curp" type="text" placeholder="CURP a 18 caracteres" required="required" data-validation-required-message="Porfavor ingrese un curp valido a 18 caracteres" ></div></div></div>



                        <div class="row">
                              <div class="col-md-4">
                                  <div class="form-group">
                                    <label for="calle" class=" form-control-label">Fecha de Nacimiento</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input class="form-control" id="fecha.nac" type="date" placeholder="Fecha de Nacimiento" required="required" data-validation-required-message="Porfavor ingrese una fecha de nacimiento valida">
                                    </div>
                                    <small class="form-text text-muted">dia/mes/año</small>
                                  </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="form-group">
                                    <label for="calle" class=" form-control-label">Entidad de nacimiento</label>
                                    <input  class="form-control"  id="entidad.nac" type="text" placeholder="Estado" required="required" data-validation-required-message="Porfavor ingrese un estado valido" >
                                  </div>
                              </div>

                              <div class="col-md-4">
                                <div class="row form-group">
                                    <div class="col col-md-12"><label class=" form-control-label">Estado Civil:</label></div>
                                    <div class="col col-md-5">
                                        <div class="form-check">
                                            <div class="radio">
                                                <label for="radio3" class="form-check-label ">
                                                    <input type="radio" id="solter@" name="solter@" value="option3" class="form-check-input">Solter@
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio4" class="form-check-label ">
                                                    <input type="radio" id="casad@" name="casad@" value="option4" class="form-check-input">Casad@
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                          </div>



                          <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label for="calle" class=" form-control-label">Banco</label>
                                    <br>
                                    <select data-placeholder="Seleccione su banco preferencial " class="standardSelect" tabindex="1">
                                      <option value="Bancomer">Bancomer</option>
                                      <option value="Banco Azteca">Banco Azteza</option>
                                      <option value="Banamex">Banamex</option>
                                      <option value="Sntander">Santander</option>
                                      <option value="Otro...">Otro...</option>
                                      <!-- <div class="form-group"><label for="otro" class=" form-control-label">Ingrese su banco preferencial</label><input  class="form-control"  id="banco2" type="text" placeholder="Ingrese su Banco preferencial" required="required" data-validation-required-message="Porfavor ingrese un banco valido" ></div> -->
                                    </select>
                                  </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group">
                                      <label for="calle" class=" form-control-label">Clave Interbancaria</label>
                                      <input  class="form-control"  id="clave.interbancaria" type="text" placeholder="Clave Interbancaria" required="required" data-validation-required-message="Porfavor ingrese su clave interbancaria a 16 digitos">
                                    </div>
                                </div>
                            </div>

                          <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="calle" class=" form-control-label">ID de patrocinador</label>
                                      <input  class="form-control"  id="id.patrocinador" type="number" placeholder="ID de patrocinador" required="required" data-validation-required-message="Porfavor ingrese un ID valido" >
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="calle" class=" form-control-label">ID de up line directo</label>
                                      <input  class="form-control"  id="id.up.line.directo" type="number" placeholder="ID de up line directo" required="required" data-validation-required-message="Porfavor ingrese un ID valido" >
                                    </div>
                                </div>

                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Beneficiario</label>
                                    <input  class="form-control"  id="beneficiario" type="text" placeholder="Beneficiario" required="required" data-validation-required-message="Porfavor ingrese un nombre valido" >
                                  </div>
                                </div>
                            </div>
                          <div>
                              <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                   <i class="fa fa-lock fa-lg"></i>&nbsp; 
                                  <span id="payment-button-amount">Enviar</span>
                                  <span id="payment-button-sending" style="display:none;">Sending…</span>
                              </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


@endsection
@section('script')

  <script>



  </script>

@endsection
