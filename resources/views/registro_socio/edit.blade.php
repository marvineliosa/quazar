<!-- seccion para editar registro del socio -->
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

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
  </head>
  <body>




          <div class="Content justify-content-center">
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="form-group text-center font-weight-bold">
                    <strong>Modificar datos de socio</strong> <small> QUASAR</small>
                  </div>
                </div>
                <!-- Credit Card -->
                <div id="registro_socio">
                  <div class="card-body">
                    <div id="registro_socio">

              <!-- AQUI EMPIEZA EL FORMULARIO -->
            <form class="" action="{{ url('/registro_socio/'.$usuario->id) }}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              {{method_field('PATCH')}}
              <!-- enviamos por el petodo patch el id del usuario al metodo update para que se actualice la informacion del usuario -->
            <!-- incluimos lo que tenemos en form para ponerlo en edit -->
@include('registro_socio.form',['muestraform'=>'editar'])
            <div class="row">
                  <!-- <div class="row">
                      <div class="col-md-6">
                        <button type="submit" value="Modificar" class="btn btn-warning">
                           <span>EDITAR</span>
                        </button>
                      </div>
                      <div class="col-md-6">
                          <a href="{{url('registro_socio')}}" class="btn btn-success">Regresar</a>
                      </div>
                    </div> -->
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>
