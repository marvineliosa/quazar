<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro de socio</title>


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


    <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>

  <section class="page-section" id="Registro_socio">
    <div class="container-fluid slider b-flex justify-content-center align-items-baseline">
      <div class="animated fadeIn">



    <div class="Content justify-content-center">
      <div class="col-lg-6 col-md-12">
        <div class="card">
          <div class="card-header">

            <div class="form-group text-center font-weight-bold">
              <strong>Registro de un nuevo socio</strong> <small> QUASAR</small>
            </div>

          </div>
      	<!-- Credit Card -->
          <div id="registro_socio">
              <div class="card-body">
                  <div id="registro_socio">








                      <!-- aqui empieza el formulario -->
                    <form  action="{{url('/usuario_socio')}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}

<!--  se esta incluyendo desde form.blade.php -->
<!-- La variable muestraform nos dice desde donde nos esta incluyendo el formulario
  variable modo que tiene el valor de crear-->
 @include('usuario_socio.form',['muestraform'=>'crear'])

                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </body>
      </html>




  <script>
     // $("#cc-payment").val(123456);
     // window.onload=function() {
  		// 	$("#nombre").val('Leonardo Axel de la Sagrada Concepción de Jisus');
  		// }

      function autollenado(){
        // var nombre = campo nombre
        //'datos';
        // var nombre = document.getElementById('nombre').value;
        $("#nombre").val('Marvin Eliosa');
        var sexo = 'MASCULINO';
        $("#correo").val();
        $("#calle").val();
        $("#num.ext").val();
        $("#num.int").val();
        $("#cp").val();
        var colonia = $("#colonia").val();
        var localidad = $("#localidad").val();
        var telcasa = $("#tel.casa").val();
        var telcelular= $("#tel.cel").val();
        var curp = $("#tel.curp").val();
        var FechaNac = $("#fecha.nac").val();
        var entidad = $("#entidad.nac").val();
        var EstadoCivil = 'SOLTER@';
        var banco = $("#banco").val();
        var clave = $("#clave.interbancaria").val();
        var patrocinador = $("#id.patrocinador").val();
        var upline = $("#id.up.line.directo").val();
        var beneficiario = $("#beneficiario").val();
      }

    function RegistrarSocio(){
      // var nombre = campo nombre
      var marvin = 'datos';
      // var nombre = document.getElementById('nombre').value;
      var nombre = $("#nombre").val();
      var sexo = 'MASCULINO';
      var mail = $("#correo").val();
      var calle = $("#calle").val();
      var numext = $("#num.ext").val();
      var numint = $("#num.int").val();
      var cp = $("#cp").val();
      var colonia = $("#colonia").val();
      var localidad = $("#localidad").val();
      var telcasa = $("#tel.casa").val();
      var telcelular= $("#tel.cel").val();
      var curp = $("#tel.curp").val();
      var FechaNac = $("#fecha.nac").val();
      var entidad = $("#entidad.nac").val();
      var EstadoCivil = 'SOLTER@';
      var banco = $("#banco").val();
      var clave = $("#clave.interbancaria").val();
      var patrocinador = $("#id.patrocinador").val();
      var upline = $("#id.up.line.directo").val();
      var beneficiario = $("#beneficiario").val();


      console.log(mail);
      alert(mail);



/*
      var json;
      var url = "/socios/registrar_socio";
      var dataForm = new FormData();
      dataForm.append('p1',"p1");
      dataForm.append('p2','p2');
      dataForm.append('marvin',marvin);
      //lamando al metodo ajax
      metodoAjax(url,dataForm,function(json){
        //aquí se escribe todas las operaciones que se harían en el succes
        //la variable success es el json que recibe del servidor el método AJAX
        MensajeModal("TITULO DEL MODAL","MENSAJE DEL MODAL");
      });//*/
    }


        function RegistrarSocio2(){
          // alert('entra');
          var url = "/socios/registrar_socio";
          var dataForm = new FormData();
          var resultado = null;

          $.ajax({
          // jQuery.ajax({
          url :url,
          data : dataForm,
          contentType:false,
          processData:false,
          headers:{
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
          type: 'POST',
          dataType : 'json',
          beforeSend: function (){
            $("#modalCarga").modal();
          },
          success : function(json){
            //resultado = json;
            //callback(json);
            //$("#nombre_producto").focus();
          },
          error : function(xhr, status) {
            $("#textoModalMensaje").text('Existió un problema con la operación');
            $("#modalMensaje").modal();
            MensajeModal('¡ERROR!','Existió un problema, intentelo de nuevo, si el problema persiste favor de reportarlo al número --.')
          },
          complete : function(xhr, status){
             $("#modalCarga").modal('hide');
          }
          });//*/
        }


  </script>
