
@yield('registro')

<!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
   <title>prueba</title>

   <style>
     .modal-footer{
      padding-bottom: 20px;
      padding-top: 20px; 
     }

     .modal-body{
      padding-bottom: 20px;
      padding-top: 20px; 
     }
   </style>
   
 <script>
  function comprobar(obj)
    {   
        var boton = document.getElementById("boton");

        if (obj.checked){
        // document.getElementById('boton').style.display = "";
        boton.disabled = false;
        } 
        else{ 
        //  document.getElementById('boton').style.display = "none";
          boton.disabled = true;
        }     
    }

      // function regresar(){
      //   var regresar = document.getElementById("boton_regresar");
      //   if($("boton_regresar").on("click"))
      //   {
      //     $("#myModal4").modal("show");
      //   }
      // }

      $(document).ready(function (e){

      $("#boton_regresar1").click(function (){
        $("#myModal4").modal("show");
      });

      $("#boton_regresar2").click(function (){
        $("#myModal3").modal("show");
      });

      $("#boton_regresar3").click(function (){
        $("#myModal2").modal("show");
      });
      
    });
 </script>
    
  </head>
 <body>
   
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header p-3 mb-2 bg-success text-white">
                    <h6 class="modal-title" id="smallmodalLabel">Registro Exitoso</h6>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}
                </div>
                <div class="modal-body">
                    <p>
                    ¡Felicidades! Ahora eres un lider de Quasar              
                    </p>
                </div>
                <div class="modal-footer col-md-12">
                  <button type="button" class="btn btn-primary col-md-6" id="boton_regresar3">
                    <i class="fa fa-arrow-left fa-md"></i>&nbsp;
                    <span id="payment-button-amount">Regresar</span>
                  </button>
    
                  <button type="button" class="btn btn-primary col-md-6" data-dismiss="modal">
                    <i class="fa fa-arrow-right fa-md"></i>&nbsp;
                    <span id="payment-button-amount">Siguiente</span>
                  </button>
                </div>
            </div>
        </div>
    </div>
    










  

  <!--- MODAL 2 --->
  
  <div class="modal fade" id="myModal2" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myModal2" aria-hidden="true" style=" overflow-y: scroll;">

    <div class="modal-dialog modal-md"  role="document">
      <div class="modal-content">
        <div class="modal-header p-3 mb-2 bg-warning text-black">
          <h5 class="modal-title" id="myModal2">Porfavor crea tu cuenta de Socio Quasar</h5>
          {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> --}}
        </div>
          
      <div class="modal-body">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse qui itaque est fugit, placeat alias similique voluptatibus soluta eum aut magnam nobis quidem consectetur, enim ex repellendus sunt doloremque dolor.
        <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse error eveniet laudantium, odit dignissimos repellat hic necessitatibus reprehenderit repellendus sint consectetur maiores dicta in officia culpa nihil nam voluptatum sed.
        <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, ullam dicta? Impedit, dolore corrupti tempore dolores quidem vel, magnam quae ad natus, magni ipsum voluptatum? Perferendis incidunt voluptas in aperiam!
        <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, beatae in tempore, est sit alias ipsam molestiae fuga nostrum animi nulla modi ab reiciendis, dignissimos fugiat similique deleniti repellendus? Beatae?
        <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur velit earum provident minus sunt fuga explicabo dolorem minima magnam cupiditate molestias accusantium porro aliquam laudantium quidem, nostrum rem tempora quasi?
        <br>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo ea ducimus laborum incidunt, totam quo, velit alias numquam commodi quas cumque beatae similique quaerat quasi consectetur, id optio? Mollitia, excepturi!
        <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, quis? Adipisci odio omnis alias, obcaecati assumenda quasi natus consequatur quos dicta hic aperiam rerum impedit vero deleniti soluta odit eligendi.
      </div>
        
        <div class="modal-footer col-md-12">
          <button type="button" class="btn btn-primary col-md-6" id="boton_regresar2">
            <i class="fa fa-arrow-left fa-md"></i>&nbsp;
            <span id="payment-button-amount">Regresar</span>
          </button>

          <button type="button" class="btn btn-primary col-md-6" data-dismiss="modal">
            <i class="fa fa-arrow-right fa-md"></i>&nbsp;
            <span id="payment-button-amount">Siguiente</span>
          </button>
        </div>
      </div>
    </div>
  </div>
  










  

    <!--- MODAL 3 --->

  <div class="modal fade" id="myModal3" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myModal3" aria-hidden="true" style=" overflow-y: scroll;">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header p-3 mb-2 bg-info text-white">
          <h5 class="modal-title" id="myModal3">Formulario de Registro</h5>
          {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> --}}
        </div>
          
        <div class="modal-body">

          <form  action="{{url('/')}}"  method="post" enctype="multipart/form-data" class="">
            {{csrf_field()}}

              <div class="form-group">
                  <label for="USUARIO_NOMBRE" class="control-label mb-1">{{'Nombre'}}</label>
                  <input  class="form-control {{$errors->has('USUARIO_NOMBRE')?'is-invalid':''}}  " name="USUARIO_NOMBRE" id="USUARIO_NOMBRE" type="text" value="{{ isset($usuario->USUARIO_NOMBRE)?$usuario->USUARIO_NOMBRE:old('USUARIO_NOMBRE') }}" placeholder="Ingrese su nombre"  data-validation-required-message="Porfavor ingrese un nombre valido">
                  {!! $errors ->first('USUARIO_NOMBRE','<div class="invalid-feedback">:message</div>') !!}
              </div>                                                                         <!--     IF ternario, donde pongo el valor de USUARIO_NOMBRE unicamente si USUARIO_NOMBRE esta lleno, de lo contrario, imprimimos vacio--->

              <div class="form-group">
                  <label for="USUARIO_APELLIDOPATERNO" class="control-label mb-1">{{'Apellido Paterno'}}</label>
                  <input  class="form-control {{$errors->has('USUARIO_APELLIDOPATERNO')?'is-invalid':''}}  " name="USUARIO_APELLIDOPATERNO" id="USUARIO_APELLIDOPATERNO" type="text" value="{{ isset($usuario->USUARIO_APELLIDOPATERNO)?$usuario->USUARIO_APELLIDOPATERNO:old('USUARIO_APELLIDOPATERNO') }}" placeholder="Ingrese su apellido paterno"  data-validation-required-message="Porfavor ingrese un nombre valido">
                  {!! $errors ->first('USUARIO_APELLIDOPATERNO','<div class="invalid-feedback">:message</div>') !!}
              </div>

              <div class="form-group">
                  <label for="USUARIO_APELLIDOMATERNO" class="control-label mb-1">{{'Apellido Materno'}}</label>
                  <input  class="form-control {{$errors->has('USUARIO_APELLIDOMATERNO')?'is-invalid':''}} " name="USUARIO_APELLIDOMATERNO" id="USUARIO_APELLIDOMATERNO" type="text" value="{{ isset($usuario->USUARIO_APELLIDOMATERNO)?$usuario->USUARIO_APELLIDOMATERNO:old('USUARIO_APELLIDOMATERNO') }}" placeholder="Ingrese su apellido materno"  data-validation-required-message="Porfavor ingrese un nombre valido">
                  {!! $errors ->first('USUARIO_APELLIDOMATERNO','<div class="invalid-feedback">:message</div>') !!}
              </div>

              <label class="control-label mb-1">{{'Genero'}}</label>
              <div class="form-check">
                <div class="radio">
                    <label for="USUARIO_SEXO" class="form-check-label ">
                        <input class="form-check-input {{$errors->has('USUARIO_SEXO')?'is-invalid':''}} " type="radio" id="Masculino" name="USUARIO_SEXO" value="Masculino" class="form-check-input" >{{'Masculino'}}
                        {!! $errors ->first('USUARIO_SEXO','<div class="invalid-feedback">:message</div>') !!}

                    </label>
                </div>

                <div class="radio">
                    <label for="USUARIO_SEXO" class="form-check-label ">
                        <input class="form-check-input {{$errors->has('USUARIO_SEXO')?'is-invalid':''}} " type="radio" id="Femenino" name="USUARIO_SEXO" value="Femenino" class="form-check-input">{{'Femenino'}}
                        {!! $errors ->first('USUARIO_SEXO','<div class="invalid-feedback">:message</div>') !!}

                    </label>
                </div>
              </div>

              <div class="form-group">
                <label for="USUARIO_CORREO" class="control-label mb-1">{{'Correo Electronico'}}</label>
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                  <input  class="form-control {{$errors->has('USUARIO_CORREO')?'is-invalid':''}} " name="USUARIO_CORREO" id="USUARIO_CORREO" type="email" value="{{ isset($usuario->USUARIO_CORREO)?$usuario->USUARIO_CORREO:old('USUARIO_CORREO')  }}" placeholder="Ingrese su correo electronico"  data-validation-required-message="Porfavor ingrese un correo valido">
                  {!! $errors ->first('USUARIO_CORREO','<div class="invalid-feedback">:message</div>') !!}
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="USUARIO_CALLE" class=" form-control-label">{{'Calle'}}</label>
                      <input  class="form-control {{$errors->has('USUARIO_CALLE')?'is-invalid':''}} " name="USUARIO_CALLE" id="USUARIO_CALLE" type="text" value="{{ isset($usuario->USUARIO_CALLE)?$usuario->USUARIO_CALLE:old('USUARIO_CALLE') }}" placeholder="Calle"  data-validation-required-message="Porfavor ingrese un domicilio valido" >
                      {!! $errors ->first('USUARIO_CALLE','<div class="invalid-feedback">:message</div>') !!}
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                      <label for="USUARIO_NUM_EXT" class="control-label mb-1">{{'N° ext.'}}</label>
                      <input  class="form-control {{$errors->has('USUARIO_NUM_EXT')?'is-invalid':'' }} " name="USUARIO_NUM_EXT" id="USUARIO_NUM_EXT" type="number" value="{{ isset($usuario->USUARIO_NUM_EXT)?$usuario->USUARIO_NUM_EXT:old('USUARIO_NUM_EXT') }}" placeholder="Num exterior"  data-validation-required-message="Porfavor ingrese un numero exterior valido" >
                      {!! $errors ->first('USUARIO_NUM_EXT','<div class="invalid-feedback">:message</div>') !!}
                    </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label for="USUARIO_NUM_INT" class="control-label mb-1">{{'N° int.'}}</label>
                    <input  class="form-control {{$errors->has('USUARIO_NUM_INT')?'is-invalid':'' }} " name="USUARIO_NUM_INT" id="USUARIO_NUM_INT" type="number" value="{{ isset($usuario->USUARIO_NUM_INT)?$usuario->USUARIO_NUM_INT:old('USUARIO_NUM_INT') }}" placeholder="Num interior"  data-validation-required-message="Porfavor ingrese un numero interior valido" >
                    {!! $errors ->first('USUARIO_NUM_INT','<div class="invalid-feedback">:message</div>') !!}
                  </div>
                </div>
              </div>

                <div class="form-group">
                  <label for="USUARIO_CP" class="control-label mb-1">{{'CP'}}</label>
                  <input  class="form-control {{$errors->has('USUARIO_CP')?'is-invalid':'' }} " name="USUARIO_CP" id="USUARIO_CP" type="number"  value="{{ isset($usuario->USUARIO_CP)?$usuario->USUARIO_CP:old('USUARIO_CP') }}" placeholder="Codigo Postal"  data-validation-required-message="El codigo postal debe tener 4 digitos" >
                  {!! $errors ->first('USUARIO_CP','<div class="invalid-feedback">:message</div>') !!}
                </div>

                <div class="form-group">
                  <label for="USUARIO_COLONIA" class=" form-control-label">{{'Colonia'}}</label>
                  <input  class="form-control {{$errors->has('USUARIO_COLONIA')?'is-invalid':'' }} " name="USUARIO_COLONIA" id="USUARIO_COLONIA" type="text"  value="{{ isset($usuario->USUARIO_COLONIA)?$usuario->USUARIO_COLONIA:old('USUARIO_COLONIA') }}" placeholder="Colonia"  data-validation-required-message="Porfavor ingrese una colonia valida" >
                  {!! $errors ->first('USUARIO_COLONIA','<div class="invalid-feedback">:message</div>') !!}
                </div>

                <div class="form-group">
                  <label for="USUARIO_LOCALIDAD" class="control-label mb-1">{{'Localidad'}}</label>
                  <input  class="form-control {{$errors->has('USUARIO_LOCALIDAD')?'is-invalid':'' }}  " name="USUARIO_LOCALIDAD" id="USUARIO_LOCALIDAD" type="text" value="{{ isset($usuario->USUARIO_LOCALIDAD)?$usuario->USUARIO_LOCALIDAD:old('USUARIO_LOCALIDAD') }}" placeholder="localidad"  data-validation-required-message="Porfavor ingrese una localidad valida" >
                  {!! $errors ->first('USUARIO_LOCALIDAD','<div class="invalid-feedback">:message</div>') !!}
                </div>

                <div class="form-group">
                  <label for="USUARIO_ENTIDAD" class="control-label mb-1">{{'Entidad'}}</label>
                  <input  class="form-control {{$errors->has('USUARIO_ENTIDAD')?'is-invalid':'' }} " name="USUARIO_ENTIDAD" id=USUARIO_ENTIDAD type="text" value="{{ isset($usuario->USUARIO_ENTIDAD)?$usuario->USUARIO_ENTIDAD:old('USUARIO_ENTIDAD') }}" placeholder="entidad"  data-validation-required-message="Porfavor ingrese un estado valido" >
                  {!! $errors ->first('USUARIO_ENTIDAD','<div class="invalid-feedback">:message</div>') !!}
                </div>


                <label for="USUARIO_TEL_CASA" class=" form-control-label">{{'Telefono de casa (con LADA)'}}</label>
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                      <input class="form-control {{$errors->has('USUARIO_TEL_CASA')?'is-invalid':'' }} " name="USUARIO_TEL_CASA" id="USUARIO_TEL_CASA" type="number" value="{{ isset($usuario->USUARIO_TEL_CASA)?$usuario->USUARIO_TEL_CASA:old('USUARIO_TEL_CASA') }}"  placeholder="Telefono de casa"  data-validation-required-message="Porfavor ingrese el numero de telefono  a 10 digitos, empezando con la lada">
                      {!! $errors ->first('USUARIO_TEL_CASA','<div class="invalid-feedback">:message</div>') !!}
                      <p class="help-block text-danger"></p>
                </div>
                <small class="form-text text-muted">(ext.) 999-9999</small>

                <label for="USUARIO_TEL_CEL" class=" form-control-label">{{'Telefono celular'}}</label>
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                      <input class="form-control {{$errors->has('USUARIO_TEL_CEL')?'is-invalid':'' }} " name="USUARIO_TEL_CEL" id="USUARIO_TEL_CEL" type="number" value="{{ isset($usuario->USUARIO_TEL_CEL)?$usuario->USUARIO_TEL_CEL:old('USUARIO_TEL_CEL') }}" placeholder="Celular"  data-validation-required-message="Porfavor ingrese el numero celular  a 10 digitos">
                      {!! $errors ->first('USUARIO_TEL_CEL','<div class="invalid-feedback">:message</div>') !!}
                      <p class="help-block text-danger"></p>
                </div>
                <small class="form-text text-muted">999-999-99-99</small>

                <div class="form-group">
                  <label for="USUARIO_CURP" class=" form-control-label">{{'CURP'}}</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-male"></i></div>
                      <input  class="form-control {{$errors->has('USUARIO_CURP')?'is-invalid':'' }} " name="USUARIO_CURP" id="USUARIO_CURP" type="text" value="{{ isset($usuario->USUARIO_CURP)?$usuario->USUARIO_CURP:old('USUARIO_CURP') }}" placeholder="CURP a 18 caracteres" data-validation-required-message="Porfavor ingrese un curp valido a 18 caracteres" >
                    </div>
                  {!! $errors ->first('USUARIO_CURP','<div class="invalid-feedback">:message</div>') !!}
                </div>

                <div class="form-group">
                  <label for="USUARIO_FECHA_NAC" class=" form-control-label">{{'Fecha de Nacimiento'}}</label>
                  <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                      <input class="form-control {{$errors->has('USUARIO_FECHA_NAC')?'is-invalid':'' }}" name="USUARIO_FECHA_NAC" id="USUARIO_FECHA_NAC" type="date" value="{{ isset($usuario->USUARIO_FECHA_NAC)?$usuario->USUARIO_FECHA_NAC:old('USUARIO_FECHA_NAC') }}" placeholder="Fecha de Nacimiento"  data-validation-required-message="Porfavor ingrese una fecha de nacimiento valida">
                      {!! $errors ->first('USUARIO_FECHA_NAC','<div class="invalid-feedback">:message</div>') !!}
                  </div>
                  <small class="form-text text-muted">Dia/Mes/Año</small>
                </div>

                <div class="form-group">
                  <label for="USUARIO_ENTIDAD_NAC" class=" form-control-label">{{'Entidad de nacimiento'}}</label>
                  <input  class="form-control {{$errors->has('USUARIO_ENTIDAD_NAC')?'is-invalid':'' }}" name="USUARIO_ENTIDAD_NAC" id="USUARIO_ENTIDAD_NAC" type="text" value="{{ isset($usuario->USUARIO_ENTIDAD_NAC)?$usuario->USUARIO_ENTIDAD_NAC:old('USUARIO_ENTIDAD_NAC') }}" placeholder="Estado"  data-validation-required-message="Porfavor ingrese un estado valido" >
                  {!! $errors ->first('USUARIO_ENTIDAD_NAC','<div class="invalid-feedback">:message</div>') !!}
                </div>

                <div class="row form-group">
                    <div class="col col-md-12"><label  class=" form-control-label">{{'Estado Civil:'}}</label></div>
                    <div class="col col-md-5">
                        <div class="form-check">

                            <div class="radio">
                                <label for="USUARIO_ESTADO_CIVIL" class="form-check-label ">
                                    <input class="form-check-input {{$errors->has('USUARIO_ESTADO_CIVIL')?'is-invalid':''}} " type="radio" id="solter@" name="USUARIO_ESTADO_CIVIL" value="soler@" class="form-check-input">{{'Solter@'}}
                                    {!! $errors ->first('USUARIO_ESTADO_CIVIL','<div class="invalid-feedback">:message</div>') !!}
                                </label>
                            </div>

                            <div class="radio">
                                <label for="USUARIO_ESTADO_CIVIL" class="form-check-label ">
                                    <input class="form-check-input {{$errors->has('USUARIO_ESTADO_CIVIL')?'is-invalid':''}} " type="radio" id="casad@" name="USUARIO_ESTADO_CIVIL" value="casad@" class="form-check-input">{{'Casad@'}}
                                    {!! $errors ->first('USUARIO_ESTADO_CIVIL','<div class="invalid-feedback">:message</div>') !!}
                                </label>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                  <label for="USUARIO_BANCO" class=" form-control-label">{{'Banco'}}</label>
                  <input  class="form-control {{$errors->has('USUARIO_BANCO')?'is-invalid':'' }}"  id="USUARIO_BANCO" name="USUARIO_BANCO" type="text" value="{{ isset($usuario->USUARIO_BANCO)?$usuario->USUARIO_BANCO:old('USUARIO_BANCO') }}" placeholder="Banco" data-validation-required-message="Porfavor ingrese su banco preferencial">
                  {!! $errors ->first('USUARIO_BANCO','<div class="invalid-feedback">:message</div>') !!}
                </div>

                <div class="form-group">
                  <label for="USUARIO_CLAVE_INTERBANCARIA" class=" form-control-label ">{{'Clave Interbancaria'}}</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                      <input  class="form-control  {{$errors->has('USUARIO_CLAVE_INTERBANCARIA')?'is-invalid':'' }}"  id="USUARIO_CLAVE_INTERBANCARIA" name="USUARIO_CLAVE_INTERBANCARIA" type="text" value="{{ isset($usuario->USUARIO_CLAVE_INTERBANCARIA)?$usuario->USUARIO_CLAVE_INTERBANCARIA:old('USUARIO_CLAVE_INTERBANCARIA') }}" placeholder="Clave Interbancaria"  data-validation-required-message="Porfavor ingrese su clave interbancaria a 16 digitos">
                    </div>
                    {!! $errors ->first('USUARIO_CLAVE_INTERBANCARIA','<div class="invalid-feedback">:message</div>') !!}
                </div>

                <div class="form-group">
                  <label for="USUARIO_ID_PATROCINADOR" class=" form-control-label">{{'ID de patrocinador'}}</label>
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                    <input  class="form-control {{$errors->has('USUARIO_ID_PATROCINADOR')?'is-invalid':'' }}"  id="USUARIO_ID_PATROCINADOR" name="USUARIO_ID_PATROCINADOR" type="number"value="{{ isset($usuario->USUARIO_ID_PATROCINADOR)?$usuario->USUARIO_ID_PATROCINADOR:old('USUARIO_ID_PATROCINADOR') }}" placeholder="ID de patrocinador"  data-validation-required-message="Porfavor ingrese un ID valido" >
                    {!! $errors ->first('USUARIO_ID_PATROCINADORr','<div class="invalid-feedback">:message</div>') !!}
                  </div>
                </div>

                <div class="form-group">
                  <label for="USUARIO_ID_UPLINE_DIRECTO" class=" form-control-label">{{'ID de upline directo'}}</label>
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                    <input  class="form-control {{$errors->has('USUARIO_ID_UPLINE_DIRECTO')?'is-invalid':'' }}"  id="USUARIO_ID_UPLINE_DIRECTO" name="USUARIO_ID_UPLINE_DIRECTO" type="number" value="{{ isset($usuario->USUARIO_ID_UPLINE_DIRECTO)?$usuario->USUARIO_ID_UPLINE_DIRECTO:old('USUARIO_ID_UPLINE_DIRECTO') }}" placeholder="ID de up line directo"  data-validation-required-message="Porfavor ingrese un ID valido" >
                    {!! $errors ->first('USUARIO_ID_UPLINE_DIRECTO','<div class="invalid-feedback">:message</div>') !!}
                  </div>
                </div>

                <div class="form-group">
                  <label for="USUARIO_BENEFICIARIO" class="control-label mb-1">{{'Beneficiario'}}</label>
                  <input  class="form-control {{$errors->has('USUARIO_BENEFICIARIO')?'is-invalid':'' }}"  id="USUARIO_BENEFICIARIO" name="USUARIO_BENEFICIARIO" type="text" value="{{ isset($usuario->USUARIO_BENEFICIARIO)?$usuario->USUARIO_BENEFICIARIO:old('USUARIO_BENEFICIARIO') }}" placeholder="Beneficiario"  data-validation-required-message="Porfavor ingrese un nombre valido" >
                  {!! $errors ->first('USUARIO_BENEFICIARIO','<div class="invalid-feedback">:message</div>') !!}
                </div>
<!-- botones -->
              <div class="row">
                <div class="col-md-6">
                  <!--- si es muestraform crear, se motrara agregar, si es modo editar, se mostrara modificar class="btn btn-success" class="fa fa-magic"--->
                  <button type="submit" name="" value="" id="payment-button" class="btn btn-lg btn-info btn-block" onclick="">
                        <i class="fa fa-lock fa-lg"></i>&nbsp;
                      <span id="payment-button-amount">Enviar</span>
                      <span id="payment-button-sending" style="display:none;">Sending…</span>
                  </button>
                </div>
              </div>
        </form> <!---Aqui termina el formulario-->
      </div>
      
        <div class="modal-footer col-md-12">
              <button type="button" class="btn btn-primary col-md-6" id="boton_regresar1">
                <i class="fa fa-arrow-left fa-md"></i>&nbsp;
                <span id="payment-button-amount">Regresar</span>
              </button>

              <button type="button" class="btn btn-primary col-md-6" data-dismiss="modal">
                <i class="fa fa-arrow-right fa-md"></i>&nbsp;
                <span id="payment-button-amount">Siguiente</span>
              </button>
        </div>
      </div>
    </div>
  </div>
  












  <!--- MODAL 4 --->
  <div class="modal fade" id="myModal4" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myModal4" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document" >
        <div class="modal-content">
            <div class="modal-header p-3 mb-2 bg-danger text-white">
                <h5 class="modal-title " id="myModal4" >¡Bienvenido a Quasar! Estas son las politicas de privacidad</h5>
                {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> --}}
            </div>
              <div class="modal-body">
                <strong>
                    Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. <br>

                    Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.<br>

                    Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.<br>

                    Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.<br>

                    Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.<br>

                    Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.<br>

                    Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.<br>

                    Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.<br>

                    Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.<br>

                    Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.<br>

                    Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.<br>

                    Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.<br>

                    Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.<br>

                    Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.<br>

                    Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.<br>

                    Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.<br>

                    Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.<br>

                    Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.  
                </strong>
              </div>

              <div class="modal-footer col-md-12">
                <div class="col-md-4">
                  <h6 class="text-left">
                    Acepto las condiciones
                    <label for="chec">
                      <input class="switch-input" type="checkbox" id="chec" name="chec" onChange="comprobar(this);">
                    </label> 
                  </h6>
                </div>

                <a href="{{url('/')}}" class="btn btn-primary col-md-4" role="button" aria-pressed="true">
                  <i class=" fa fa-ban fa-md"></i>&nbsp;
                  <span id="payment-button-amount">Cancelar</span>
                </a>

              <button type="button" class="btn btn-primary col-md-4" id ="boton" data-dismiss="modal" disabled>
                <i class="fa fa-arrow-right fa-md"></i>&nbsp;
                <span id="payment-button-amount">Siguiente</span>
              </button>
            </div>
        </div>
      </div>
    </div>
  </body>
</html>
 

<script>
  function mostrarModal() {
  // $("#modalTitle").html(titulo);
  $("#myModal4").modal("show");
  $("#myModal3").modal("show");
  $("#myModal2").modal("show");
  $("#myModal").modal("show");

}
</script>


