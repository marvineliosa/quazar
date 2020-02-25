<!-- INICIO despliegue de datos -->

@extends('plantillas.menu')
@section('content')


 @if(Session::has('Mensaje')){{
		Session::get('Mensaje')
}}

@endif


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <title>Menu</title>
  </head>
  <body>


<a href="{{url('registro_socio/create')}}" class="btn btn-success">Agregar Socio Quasar</a>
<br>
<br>

<!-- <div class="col-md-12">
		<div class="card">
				<div class="card-header">
						<strong class="card-title">Socios Registrados</strong>
				</div>
					<div class="card-body"> -->

						<table id="tabla_datos" class="table table-bordered table-hover">
								<thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
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
                    <th>Entidd de Nacimiento</th>
                    <th>Estado civil</th>
                    <th>Banco</th>
                    <th>Clave Interbancaria</th>
                    <th>ID de Patrocinador</th>
                    <th>ID de Upline Directo </th>
                    <th>Beneficiario</th>
                    <th>Acciones</th>
                  </tr>
								</thead>
								<tbody>
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
                      <!-- CON ESTA LINEA DE CODIGO SI BORRO EL REGISTRO SELECCIONADO  -->
                         <form method="post" style="display:inline" action="{{ url('/registro_socio', ['usuario' => $usuario->id]) }}" >
                        {{csrf_field()}}
                        {{ method_field('DELETE') }}
                         <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');" name="button">Borrar</button>

                        </form>

                    </td>
                  </tr>
                  @endforeach
					  </tbody>
		      </table>
        <!-- </div>
      </div>
    </div>   -->
  </body>
</html>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

	<script>
		$(document).ready(function() {
			$('#tabla_datos').DataTable();
		} );
	</script>

  @endsection

  @section('script')
  <script>

  </script>
  @endsection
