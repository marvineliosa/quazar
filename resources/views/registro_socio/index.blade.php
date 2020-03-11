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
  </head>
  <body>


<a href="{{url('registro_socio/create')}}" class="btn btn-success">Agregar Socio Quasar</a>
<br>
<br>

<div class="col-md-12">
		<div class="card border-info mb-3">
				<div class="card-header ">
						<strong class="card-title">Socios Registrados</strong>
				</div>
					<div class="card-body">
 <!-- id=tabla_datos -->
						<table id="registro_socios" class="table table-striped table-bordered table-hover" >
								<thead>
                  <tr>
                    <!-- <th>#</th> -->
                    <th><strong>Nombre</strong></th>
                    <th><strong>Apellido Paterno</strong></th>
                    <th><strong>Apellido Materno</strong></th>
                    <th><strong>Sexo</strong></th>
                    <th><strong>Correo Electronico</strong></th>
                    <th><strong>Calle</strong></th>
                    <th><strong>N° Ext</strong></th>
                    <th><strong>N° Int</strong></th>
                    <th><strong>CP</strong></th>
                    <th><strong>Colonia</strong></th>
                    <th><strong>Localidad</strong></th>
                    <th><strong>Entidad</strong></th>
                    <th><strong>Telefono casa</strong></th>
                    <th><strong>Telefono Celular</strong></th>
                    <th><strong>Curp</strong></th>
                    <th><strong>Fecha de Nacimiento</strong></th>
                    <th><strong>Entidad de Nacimiento</strong></th>
                    <th><strong>Estado civil</strong></th>
                    <th><strong>Banco</strong></th>
                    <th><strong>Clave Interbancaria</strong></th>
                    <th><strong>ID de Patrocinador</strong></th>
                    <th><strong>ID de Upline Directo</strong></th>
                    <th><strong>Beneficiario</strong></th>
                    <th><strong>Acciones</strong></th>

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
  </body>
</html>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

	<script>
		$(document).ready(function() {
			  $('#registro_socios').DataTable({
        //procesa la consulta con php del lado del servidor
        "serverSide":true,
        "ajax":"{{ url('api/registro_socios') }}",
        "columns":[
          // {data:'id'},
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
