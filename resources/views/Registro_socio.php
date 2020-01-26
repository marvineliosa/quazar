
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro de socio</title>

      <!--- CSS BOOTSTRAP 4.3-->
      <!---
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 --->

        <!--- JS BOOTSTRAP 4.3-->
        <!---
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
--->
<!-- Headers de dashboard forms advanced -->

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
    <section class="page-section" id="Registro_socio">
      <div class="container-fluid slider b-flex justify-content-center align-items-baseline">
        <div class="animated fadeIn">




        <!-- REGISTRO  SOCIO -->
          <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Registro de un nuevo socio QUASAR</h2>
        <div class="row justify-content-center">

          <form action="/Registro_socio.devuelverespuesta" method="POST" name="sentMessage" id="contactForm">
          <!---  @csrf --->
            <div class="col-md-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                      <strong>Registro de un nuevo socio</strong> <small> QUASAR</small>
                    </div>
                    <div class="card-body card-block">






                    <!---AQUI EMPIEZA EL FORMULARIO ---------------------------------->
                        <div class="form-group"><label for="nombre" class=" form-control-label">Nombre</label><input  class="form-control"  id="nombre" type="text" placeholder="Ingrese su nombre completo" required="required" data-validation-required-message="Porfavor ingrese un nombre valido" ></div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Sexo</label></div>
                            <div class="col col-md-9">
                                <div class="form-check">
                                    <div class="radio">
                                        <label for="radio1" class="form-check-label ">
                                            <input type="radio" id="masc" name="radios" value="option1" class="form-check-input">Masculino
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="radio2" class="form-check-label ">
                                            <input type="radio" id="fem" name="radios" value="option2" class="form-check-input">Femenino
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group"><label for="correo" class=" form-control-label">Correo Electronico</label><input  class="form-control"  id="correo" type="email" placeholder="Ingrese su correo Porfavor" required="required" data-validation-required-message="Porfavor ingrese un correo valido" ></div>
                        <div class="form-group"><label for="calle" class=" form-control-label">Calle</label><input  class="form-control"  id="calle" type="text" placeholder="Domicilio" required="required" data-validation-required-message="Porfavor ingrese un domicilio valido" ></div>
                        <div class="form-group"><label for="N° ext." class=" form-control-label">N° ext.</label><input  class="form-control"  id="num.ext" type="number" placeholder="Numero exterior" required="required" data-validation-required-message="Porfavor ingrese un numero exterior valido" ></div>
                          <div class="form-group"><label for="N° int." class=" form-control-label">N° int.</label><input  class="form-control"  id="numn.int" type="number" placeholder="Numero interior" required="required" data-validation-required-message="Porfavor ingrese un numero interior valido" ></div>
                        <div class="form-group"><label for="CP" class=" form-control-label">CP</label><input  class="form-control"  id="cp" type="text" placeholder="Ingrese su codigo postal" required="required" data-validation-required-message="Porfavor ingrese un codigo postal valido a 5 digitos" ></div>



                              <div class="col-8">
                                  <select data-placeholder="Seleccione su colonia de procedencia" class="standardSelect" tabindex="1">
                                    <option value="" label="Seleccione su Colonia"></option>
                                    <option value="Francisco I Madero">Francisco I Madero</option>
                                    <option value="Centro">Centro</option>
                                    <option value="Bugambilias">Bugambilias</option>
                                    <option value="Agua Azul">Agua azul</option>
                                  </select>
                              </div>

                              <div class="form-group">
                                <select data-placeholder="Seleccione su localidad de procedencia" class="standardSelect" tabindex="1">
                                  <option value="" label="Seleccione su Localidad"></option>
                                  <option value="Puebla">Puebla</option>
                                  <option value="Xilotzingo">Xilotzingo</option>
                                  <option value="Cuautlancingo">Cuautlancingo</option>
                                  <option value="San Ramon">San Ramon</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <select data-placeholder="Seleccione su estado" class="standardSelect" tabindex="1">
                                  <option value="" label="Seleccione su Estado"></option>
                                  <option value="Puebla">Puebla</option>
                                  <option value="Tlaxcala">Tlaxcala</option>
                                  <option value="Veracruz">Veracruz</option>
                                  <option value="Mexico (CDMX)">Mexico (CDMX)</option>
                                </select>
                              </div>
<!---
                        <div class="form-group"><label for="Colonia" class=" form-control-label">Colonia</label><input  class="form-control"  id="colonia" type="text" placeholder="Ingrese su colonia de procedencia" required="required" data-validation-required-message="Porfavor ingrese una colonia valida" ></div>
                        <div class="form-group"><label for="Localidad" class=" form-control-label">Localidad</label><input  class="form-control"  id="localidad" type="text" placeholder="Ingrese su localidad de procedencia" required="required" data-validation-required-message="Porfavor ingrese ina localidad valida" ></div>
                        <div class="form-group"><label for="Entidad" class=" form-control-label">Entidad</label><input  class="form-control"  id="entidad" type="text" placeholder="Ingrese su entidad federativa de procedencia" required="required" data-validation-required-message="Porfavor ingrese una entidad federativa valida" ></div>
-->
                        <div class="form-group">
                            <label class=" form-control-label">Telefono de casa (con LADA)</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                  <input class="form-control" id="tel.casa" type="number" placeholder="Telefono de casa" required="required" data-validation-required-message="Porfavor ingrese un numero de telefono valido">
                                  <p class="help-block text-danger"></p>
                            </div>
                            <small class="form-text text-muted">(ext.) 999-9999</small>
                        </div>

                        <div class="form-group">
                            <label class=" form-control-label">Telefono celular</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                  <input class="form-control" id="tel.cel" type="number" placeholder="Telefono celular" required="required" data-validation-required-message="Porfavor ingrese un numero de celular valido">
                                  <p class="help-block text-danger"></p>
                            </div>
                            <small class="form-text text-muted">(ext.) 999-9999</small>
                        </div>

                        <div class="form-group"><label for="curp" class=" form-control-label">CURP</label><input  class="form-control"  id="curp" type="text" placeholder="CURP a 18 caracteres" required="required" data-validation-required-message="Porfavor ingrese un curp valido a 18 caracteres" ></div>

                        <div class="form-group">
                            <label class=" form-control-label">Fecha de Nacimiento</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                <input class="form-control" id="fecha.nac" type="date" placeholder="Fecha de Nacimiento" required="required" data-validation-required-message="Porfavor ingrese una fecha de nacimiento valida">
                            </div>
                            <small class="form-text text-muted">dia/mes/año</small>
                        </div>

                        <div class="form-group">
                          <select data-placeholder="Seleccione su Estado de nacimiento " class="standardSelect" tabindex="1">
                            <option value="" label="Seleccione su Estado de nacimiento"></option>
                            <option value="Puebla">Puebla</option>
                            <option value="Tlaxcala">Tlaxcala</option>
                            <option value="Veracruz">Veracruz</option>
                            <option value="Mexico (CDMX)">Mexico (CDMX)</option>
                          </select>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-10"><label class=" form-control-label">Estado Civil:</label></div>
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


                        <div class="form-group">
                          <select data-placeholder="Seleccione su banco preferencial " class="standardSelect" tabindex="1">
                            <option value="" label="Seleccione su banco"></option>
                            <option value="Bancomer">Bancomer</option>
                            <option value="Banco Azteca">Banco Azteza</option>
                            <option value="Banamex">Banamex</option>
                            <option value="Sntander">Santander</option>
                            <option value="Otro...">Otro...</option>
                            <div class="form-group"><label for="otro" class=" form-control-label">Ingrese su banco preferencial</label><input  class="form-control"  id="banco2" type="text" placeholder="Ingrese su Banco preferencial" required="required" data-validation-required-message="Porfavor ingrese un banco valido" ></div>
                          </select>
                        </div>

                        <div class="form-group">
                            <label class=" form-control-label">Clave Interbancaria</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                                  <input class="form-control" id="ban" type="text" placeholder="clave" required="required" data-validation-required-message="Porfavor digite su clave interbancaria a 18 digitos">
                                  <p class="help-block text-danger"></p>
                            </div>
                            <small class="form-text text-muted">18 digitos. 99 9999 9999 9999 9999</small>
                        </div>

                          <div class="form-group"><label for="banco" class=" form-control-label">BENEFICIARIO</label><input  class="form-control"  id="beneficiario" type="text" placeholder="Beneficiario Directo" required="required" data-validation-required-message="Porfavor ingrese su beneficiario directo" ></div>


                          <div class="form-group"><input class="btn btn-primary" type="submit" value="Submit"></div>
                  </div>
                </div>
              </div>
            </form>
          </div>


        </div>
      </div>
  </section>


  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/lib/chosen/chosen.jquery.min.js"></script>

  <script>
      jQuery(document).ready(function() {
          jQuery(".standardSelect").chosen({
              disable_search_threshold: 10,
              no_results_text: "Oops, nothing found!",
              width: "100%"
          });
      });
  </script>
  </body>
</html>
