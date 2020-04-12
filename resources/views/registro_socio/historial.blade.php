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
    <!-- cabeceras de bootstrap4  DA ERROR EN LA DELECCION ENTRADAS DE DATATABLES -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

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

  </head>
  <body>

      <input type="button" name=""  value="ejecutar" onClick="idaleatorio()">


    <a href="{{url('registro_socio/create')}}" class="btn btn-success">Agregar Socio Quasar</a>
    <br>

    <!-- empieza modal -->
    <div class="container">
      <div class="row">
        <div class="col-ls-12">

          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

          <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h1>Politicas de Seguridad Quasar</h1>
                </div>
                <div class="modal-body">
                  cual es tu nobre?
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
  <!-- aqui termina modal -->

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
</style>

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
                      <!-- <tbody>
                        @foreach ($registro_socio as $usuario)
                        <tr class="table-primary">
                          <td>{{$loop->iteration}}</td>
                          <td>{{$usuario->USUARIO_NOMBRE}} {{$usuario->USUARIO_APELLIDOPATERNO}} {{$usuario->USUARIO_APELLIDOMATERNO}}</td>
                          <td>{{$usuario->USUARIO_SEXO}}</td>
                          <td>{{$usuario->USUARIO_CORREO}}</td>
                          <td>{{$usuario->USUARIO_CALLE}}</td>
                          <td>{{$usuario->USUARIO_NUM_EXT}}</td>
                          <td>{{$usuario->USUARIO_NUM_INT}}</td>
                          <td>{{$usuario->USUARIO_CP}}</td>
                          <td>{{$usuario->USUARIO_COLONIA}}</td>
                          <td>{{$usuario->USUARIO_LOCALIDAD}}</td>
                          <td>{{$usuario->USUARIO_ENTIDAD}}</td>
                          <td>{{$usuario->USUARIO_TEL_CASA}}</td>
                          <td>{{$usuario->USUARIO_TEL_CEL}}</td>
                          <td>{{$usuario->USUARIO_CURP}}</td>
                          <td>{{$usuario->USUARIO_FECHA_NAC}}</td>
                          <td>{{$usuario->USUARIO_ENTIDAD_NAC}}</td>
                          <td>{{$usuario->USUARIO_ESTADO_CIVIL}}</td>
                          <td>{{$usuario->USUARIO_BANCO}}</td>
                          <td>{{$usuario->USUARIO_CLAVE_INTERBANCARIA}}</td>
                          <td>{{$usuario->USUARIO_ID_PATROCINADOR}}</td>
                          <td>{{$usuario->USUARIO_ID_UPLINE_DIRECTO}}</td>
                          <td>{{$usuario->USUARIO_BENEFICIARIO}}</td>

                          <td>
                            <a class="btn btn-warning" href="{{ url('/registro_socio/'.$usuario->id.'/edit')}}">
                                  Editar
                              </a>
                                |
                            CON ESTA LINEA DE CODIGO SI BORRO EL REGISTRO SELECCIONADO
                              <form method="post" style="display:inline" action="{{ url('/registro_socio', ['usuario' => $usuario->id]) }}" >
                              {{csrf_field()}}
                              {{ method_field('DELETE') }}
                              <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');" name="button">Borrar</button>

                              </form>

                          </td>
                        </tr>
                        @endforeach
                  </tbody> -->
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>



</html>



<!-- librerias para DataTables -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<!-- script para modal timing -->
<script type="text/javascript">
  $(document).ready(function(){
      setTimeout(function(){
          $("#myModal").modal('show');

//esta otra funcion es para que se quite el modal despues de 3S
        //   setTimeout(function(){
        //     $("#myModal").modal('hide');
        // },3000);
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
