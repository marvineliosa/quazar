


@extends('plantillas.menu')
@section('content')


@if(Session::has('Mensaje')){{
		Session::get('Mensaje')
}}
@endif
<a href="{{url('usuario_socio/create')}}" class="btn btn-success">Agregar Socio Quasar</a>
<br>
<br>
<div class="col-md-12">
		<div class="card">
				<div class="card-header">
						<strong class="card-title">Socios Registrados</strong>
				</div>
					<div class="card-body">
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
                  @foreach ($usuario_socio as $usuario)
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


                        <a class="btn btn-warning" href="{{ url('/usuario_socio/'.$usuario->id.'/edit')}}">Editar

                      	</a>
												|

                      <!-- aqui uso este form para borrar el registro seleccionado  CON ESTA LINEA NO QUEDO -->
                      <!-- <form method="post" action= "{{ url('/usuario_socio'.$usuario->id) }}"> -->
                      <!-- CON ESTA LINEA DE CODIGO SI BORRO EL REGISTRO SELECCIONADO  -->
                        <form method="post" style="display:inline" action="{{ url('/usuario_socio', ['usuario' => $usuario->id]) }}" >
                        {{csrf_field()}}
                        <!-- solicitud unica que identifica el tipo de solicitud que envio a traves del formulario -->
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');" name="button">Borrar</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach


								</tbody>
						</table>
				</div>
		</div>
</div>


@endsection

@section('script')
<script>

</script>
@endsection
