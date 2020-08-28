<!-- INICIO despliegue de datos -->

@extends('plantillas.menu')
@section('content')

<!--- mensaje para Agregar y Eliminar registro de socio quasar --->
 @if(Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
    {{	Session::get('Mensaje')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<!--- mensaje para Modificar registro de socio quasar --->
@if(Session::has('Mensaje-Modificar'))
<div class="sufee-alert alert with-close alert-warning alert-dismissible fade show">
  {{	Session::get('Mensaje-Modificar')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- cabeceras para los DataTables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

    <!-- este es el mismo que de arriba -->
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  --}}

    <!-- librerias para DataTables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

   

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
          text-align: center;
      }

      .boton_agregar{
        float: right;
      }

      .socios_registrados{
        float: left;
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
    </head>
  <body>
  

    <div>
      {{-- <input type="button" name=""  value="ejecutar" onClick="idaleatorio()"> --}}
    </div>

{{-- @extends('Modales/bienvenida_socio')
@section('bienvenida')
    
@endsection --}}

    <div class="content">
      <div class="animated fadeIn">
        <div class="row">
          <div class="col-md-12">
            <div class="card border-info mb-3">
                <div class="card-header ">
                    <div class="socios_registrados">
                      <strong class="card-title">Socios Registrados</strong>   
                    </div>
                    


                    
                    
                    <div class="boton_agregar">
                      <a href="{{url('registro_socio/create')}}" class="btn btn-success">
                        <i class="fa fa-plus fa-md"></i>&nbsp;
                        <span id="payment-button-amount">Agregar Socio Quasar</span>
                      </a>
                    </div>

                </div>
                <div class="card-body">
                  <!-- id=tabla_datos -->
                    <table id="registro_socios" class="table table-striped table-bordered table-hover">
                      <thead class="thead-blue" >
                        <tr>
                          <th width="10px">Socio</th>
                          <th>Nombre</th>

                          {{-- <th style="text-align:center;"><strong>Q</strong></th> --}}

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
                          <th width="60px">Acciones</th>
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
</html>
{{-- script que procesa la data con ajax --}}
	<script>
		$(document).ready(function() {
			  $('#registro_socios').DataTable({
        //procesa la consulta con php del lado del servidor
        "serverSide":true,
        "ajax":"{{ url('api/registro_socios') }}",
        "columns":[


          {"render":
            function ( data, type, row ) {
                return ('<strong>Q</strong>' + row['id'] );
              }
          },
          

          {"render":
            function ( data, type, row ) {
                return (row['USUARIO_NOMBRE'] + ' ' + row['USUARIO_APELLIDOPATERNO'] + ' ' + row['USUARIO_APELLIDOMATERNO'] + ' ' );
              }
          },
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

        ],
        "language": {
          'url' : '//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
        }
        // o para mas personalizacion....
        // "language": {
        //   "info": "_TOTAL_ Registros",
        //   "search": "Buscar",
        //   "paginate": {
        //      "next": "Siguiente",
        //       "previous": "Anterior"
        //   },
        //   "lengthMenu": 'Mostrar <select>'+
        //               '<option value ="10">10</option>'+
        //               '<option value ="25">25</option>'+
        //               '<option value ="50">50</option>'+
        //               '<option value ="100">100</option>'+
        //               '<option value ="-1">Todos</option>'+
        //               '</select> Registros',
        //   "LoadingRecords": "Cargando...",
        //   "processing": "Procesando",
        //   "emptyTable": "No se encontraron registros",
        //   "zeroRecords": "No hay coincidencias",
        //   "infoEmpty": "Mostrando 0 de",
        //   "infoFiltered": "0 Registros"
        // }

      });
		});
	</script>
  @endsection

  @section('script')

    <script>



    </script>

  @endsection


