<!-- Seccion para editar datos -->

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
    <link rel="stylesheet" href="assets/css/lib/chosen/chosen.min.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>

    <div class="Content justify-content-center">
      <div class="col-lg-12 col-md-12">
        <div class="card">
        <!-- Credit Card -->
          <div id="registro_socio">
              <div class="card-body">
                  <div id="registro_socio">
                  <!-- <div action="/Registro_socio.devuelverespuesta" method="POST" name="sentMessage" id="registro_socio"> -->
                      <div class="form-group text-center font-weight-bold">
                        <div class="card-header">

                          <strong>Edicion de socio</strong> <small> QUASAR</small>
                        </div>
                      </div>



                      <form class="" action="{{ url('/usuario_socio/'.$usuario->id) }}" method="post" enctype="multipart/form-data ">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        <!-- enviamos por el petodo patch el id del usuario al metodo update para que se actualice la informacion del usuario -->
<!-- incluimos lo que tenemos en form para ponerlo en edit -->
@include('usuario_socio.form',['muestraform'=>'Editar'])



                            <div>
                                <!-- <button type="submit"  name="Editar" class="btn btn-lg btn-info btn-block" >

                                    <span>EDITAR</span>

                                </button> -->

                                 <!-- <input type="submit"  value="Modificar"> -->
                            <!--    <a href="{{url('usuario_socio')}}">Regresar</a> -->

                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </body>
          </html>
