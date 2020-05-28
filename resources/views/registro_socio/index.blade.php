<!-- INICIO despliegue de datos -->

@extends('plantillas.menu')
@section('content')


 @if(Session::has('Mensaje'))
  <div class="alert alert-success" role="alert">
      {{	Session::get('Mensaje')}}
  </div>
@endif


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- cabeceras para los DataTables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

    <title>Menu</title>
        <script>
          // function idaleatorio(min,max){
          //   min=Math.ceil(min);
          //   max=Math.floor(max);
          //
          //   return Math.floor(Math.random()*(1 + max - min) + min );
          //   for(i=0;i<=500;i++){
          //     console.log(idaleatorio(4,7));
          //   }
          //   console.log(idaleatorio(4,9));
          // }

          function idaleatorio(){
            var a
            a= Math.round(Math.random()*100)
            document.write("Numero" + a)

            alert("has hecho click  en el boton");
          }
        </script>


        <!-- estilos para datatables -->
      <style>

        thead th {

          background-color: #004472;
          color: blue;

          font: #EEEEEE;
          color: white;
          font-weight: bold;

      }

      .card-header {
        padding: .75rem 1.25rem;
         margin-bottom: 0;
         background-color: rgb(239,232,81);
         border-bottom: 1px solid rgba(0,0,0,.8);
         font: #000000;
         color: black;
      }

      /* para titulos de los modales */
      .modal-header {
        padding: .75rem 1.25rem;
         margin-bottom: 0;
         background-color: rgb(239,232,81);
         border-bottom: 1px solid rgba(0,0,0,.8);
         font: #000000;
         color: black;
      }


      </style>
      
  </head>
  <body>
    
  <div class="container">
      <input type="button" name=""  value="ejecutar" onClick="idaleatorio()">
      <a href="{{url('registro_socio/create')}}" class="btn btn-success">Agregar Socio Quasar</a>

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Agregar
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Agregar datos</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <!-- AQUI EMPIEZA EL FORMULARIO -->
            <div class="modal-body">
              <!---Aqui empieza el formulario-->

              

              <form  action="{{url('/registro_socio')}}"  method="post" enctype="multipart/form-data" class="">
              {{csrf_field()}}

                    <div class="form-group">
                        <label for="USUARIO_Q" class="control-label mb-1">{{'Num° Q'}}</label>
                        <input  class="form-control {{$errors->has('USUARIO_Q')?'is-invalid':''}}  " name="USUARIO_Q" id="USUARIO_Q" type="text" value="{{ isset($usuario->USUARIO_Q)?$usuario->USUARIO_Q:old('USUARIO_Q') }}" placeholder="Ingrese su nombre"  data-validation-required-message="Porfavor ingrese un nombre valido">
                        {!! $errors ->first('USUARIO_Q','<div class="invalid-feedback">:message</div>') !!}
                    </div>                                                                         <!--     IF ternario, donde pongo el valor de USUARIO_NOMBRE unicamente si USUARIO_NOMBRE esta lleno, de lo contrario, imprimimos vacio--->

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
                            <div class="col-md-6">
                              <a href="{{url('registro_socio')}}" class="btn btn-lg btn-info btn-block">Regresar</a>
                            </div>
                          </div>
                  </form>

                   <!---Aqui termina el formulario-->
            </div>
          </div>
        </div>
      </div>
    <!---Termina el Modal-->
    </div>








  <input type="button" name=""  value="ejecutar" onClick="idaleatorio()">
      <a href="{{url('registro_socio/create')}}" class="btn btn-success">Agregar Socio Quasar</a>

    <!-- empieza modal DE POLITICAS DE PRIVACIDAD-->
    <div class="container">
      <div class="row">
        <div class="col-ls-12">

          <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button> -->

          <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h1>Politicas de Privacidad Quasar</h1>
                </div>
                <div class="modal-body">
                  Acepta los terminos y condiciones?
                  <input class="form-control" value="">
                </div>
                <div class="modal-footer">
                  <input class="btn btn-primary" data-dismiss="modal" value="Cerrar">

                </div>
              </div>
            </div>
          </div>
        <!-- <a href="#" data-toggle="modal" data-target="#myModal">Abrir Modal</a> -->
      </div>
    </div>
  </div>
  <!-- aqui termina modal DE POLITICAS DE PRIVACIDAD -->













    <div class="content">
      <div class="animated fadeIn">
        <div class="row">
          <div class="col-md-12">
            <div class="card border-info mb-3">
                <div class="card-header ">
                    <strong class="card-title">Socios Registrados</strong>
                </div>
                <div class="card-body">
                  <!-- id=tabla_datos -->
                    <table id="registro_socios" class="table table-striped table-bordered table-hover">
                      <thead class="thead-blue" >

                        <tr>
                          <th>#</th>
                          <th>Q</th>
                          <th>Nombre</th>
                          <th>Apellido Paterno</th>
                          <th>Apellido Materno</th>
                          <th>Sexo</th>
                          <th>Correo Electronico</th>
                          <th>Calle</th>
                          <th>N° Ext</th>
                          <th>N° Int</th>
                          <th>CP</th>
                          <th>Colonia</th>
                          <th>Localidad</th>
                          <th>Entidad</th>
                          <th>Telefono casa</th>
                          <th>Telefono Celular</th>
                          <th>Curp</th>
                          <th>Fecha de Nacimiento</th>
                          <th>Entidad de Nacimiento</th>
                          <th>Estado civil</th>
                          <th>Banco</th>
                          <th>Clave Interbancaria</th>
                          <th>ID de Patrocinador</th>
                          <th>ID de Upline Directo</th>
                          <th>Beneficiario</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                       <!--- <tbody>
                        {{-- @foreach ($registro_socio as $usuario) --}}
                        <tr class="table-primary">
                          <td>

                            CON ESTA LINEA DE CODIGO SI BORRO EL REGISTRO SELECCIONADO
                              {{-- <form method="post" style="display:inline" action="{{ url('/registro_socio', ['usuario' => $usuario->id]) }}" > --}}
                              {{-- {{csrf_field()}} --}}
                              {{-- {{ method_field('DELETE') }} --}}
                              <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');" name="button">Borrar</button>

                              </form>

                          </td>
                        </tr>
                        {{-- @endforeach --}}
                  </tbody>  --->
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>



        <!-- <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-12">
                        Copyright &copy; 2018 Ela Admin
                    </div>
                    <div class="col-sm-12 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer> -->
</html>


<!-- este es el mismo que de arriba -->
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->




<!-- librerias para DataTables -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<!-- script para modal timing -->
<script type="text/javascript">
  $(document).ready(function(){
      setTimeout(function(){
          $("#myModal").modal('show');

// esta otra funcion es para que se quite el modal despues de 3S
          setTimeout(function(){
            $("#myModal").modal('hide');
        },2000);
// aqui termina esta otra funcion es para que se quite el modal despues de 3S
      },2000);
  });
</script>

	<script>
		$(document).ready(function() {
			  $('#registro_socios').DataTable({
        //procesa la consulta con php del lado del servidor
        "serverSide":true,
        "ajax":"{{ url('api/registro_socios') }}",
        "columns":[
          {data:'id'},
          {data:'USUARIO_Q'},
          {data:'USUARIO_NOMBRE'},
          {data:'USUARIO_APELLIDOPATERNO'},
          {data:'USUARIO_APELLIDOMATERNO'},
          {data:'USUARIO_SEXO'},
          {data:'USUARIO_CORREO'},
          {data:'USUARIO_CALLE'},
          {data:'USUARIO_NUM_EXT'},
          {data:'USUARIO_NUM_INT'},
          {data:'USUARIO_CP'},
          {data:'USUARIO_COLONIA'},
          {data:'USUARIO_LOCALIDAD'},
          {data:'USUARIO_ENTIDAD'},
          {data:'USUARIO_TEL_CASA'},
          {data:'USUARIO_TEL_CEL'},
          {data:'USUARIO_CURP'},
          {data:'USUARIO_FECHA_NAC'},
          {data:'USUARIO_ENTIDAD_NAC'},
          {data:'USUARIO_ESTADO_CIVIL'},
          {data:'USUARIO_BANCO'},
          {data:'USUARIO_CLAVE_INTERBANCARIA'},
          {data:'USUARIO_ID_PATROCINADOR'},
          {data:'USUARIO_ID_UPLINE_DIRECTO'},
          {data:'USUARIO_BENEFICIARIO'},
          {data:'btn'}

        ]
      });
		});
	</script>
  @endsection

  @section('script')

    <script>



    </script>

  @endsection
