<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ela Admin - HTML5 Admin Template</title>
        <meta name="description" content="Ela Admin - HTML5 Admin Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
        <!-- <script src="{{asset('jquery-3.4.1.js')}}"></script> -->
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
        <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
        <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

        <!-- DATA TABLES -->
        <link rel="stylesheet" href="{{asset('assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">

        <!-- <link href="{{asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet"> -->

       <style>
        #weatherWidget .currentDesc {
            color: #ffffff!important;
        }
            .traffic-chart {
                min-height: 335px;
            }
            #flotPie1  {
                height: 150px;
            }
            #flotPie1 td {
                padding:3px;
            }
            #flotPie1 table {
                top: 20px!important;
                right: -10px!important;
            }
            .chart-container {
                display: table;
                min-width: 270px ;
                text-align: left;
                padding-top: 10px;
                padding-bottom: 10px;
            }
            #flotLine5  {
                 height: 105px;
            }

            #flotBarChart {
                height: 150px;
            }
            #cellPaiChart{
                height: 160px;
            }

        </style>
    </head>

    <body>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @include('plantillas.navbar')
        <!-- Right Panel -->
        <div id="right-panel" class="right-panel">
            <!-- Header-->
            <header id="header" class="header">
                <div class="top-left">
                    <div class="navbar-header">
                        <!-- <a class="navbar-brand" href="./"><img src="images/logo3.png" alt="Logo"></a> -->
                        <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo" style="width: 40%; height: auto;"></a>
                        <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                        <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
                <div class="top-right">
                    <div class="header-menu">
                        <div class="header-left">
                            <button class="search-trigger"><i class="fa fa-search"></i></button>
                            <div class="form-inline">
                                <form class="search-form">
                                    <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                    <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                                </form>
                            </div>

                            <div class="dropdown for-notification">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bell"></i>
                                    <span class="count bg-danger">3</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="notification">
                                    <p class="red">You have 3 Notification</p>
                                    <a class="dropdown-item media" href="#">
                                        <i class="fa fa-check"></i>
                                        <p>Server #1 overloaded.</p>
                                    </a>
                                    <a class="dropdown-item media" href="#">
                                        <i class="fa fa-info"></i>
                                        <p>Server #2 overloaded.</p>
                                    </a>
                                    <a class="dropdown-item media" href="#">
                                        <i class="fa fa-warning"></i>
                                        <p>Server #3 overloaded.</p>
                                    </a>
                                </div>
                            </div>

                            <div class="dropdown for-message">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-envelope"></i>
                                    <span class="count bg-primary">4</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="message">
                                    <p class="red">You have 4 Mails</p>
                                    <a class="dropdown-item media" href="#">
                                        <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                        <div class="message media-body">
                                            <span class="name float-left">Jonathan Smith</span>
                                            <span class="time float-right">Just now</span>
                                            <p>Hello, this is an example msg</p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item media" href="#">
                                        <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                        <div class="message media-body">
                                            <span class="name float-left">Jack Sanders</span>
                                            <span class="time float-right">5 minutes ago</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item media" href="#">
                                        <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                        <div class="message media-body">
                                            <span class="name float-left">Cheryl Wheeler</span>
                                            <span class="time float-right">10 minutes ago</span>
                                            <p>Hello, this is an example msg</p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item media" href="#">
                                        <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                        <div class="message media-body">
                                            <span class="name float-left">Rachel Santos</span>
                                            <span class="time float-right">15 minutes ago</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="user-area dropdown float-right">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                            </a>

                            <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                            </div>
                        </div>

                    </div>
                </div>
            </header>
            <!-- /#header -->
            <!-- Content -->
            <div class="content">
                <!-- Animated -->
                <div class="animated fadeIn">
                    <!-- Widgets  -->
                    <div class="row">
                      @yield('content')
                    </div>
                <!-- /#add-category -->

                </div>
                <!-- .animated -->
            </div>
            <!-- /.content -->
            <div class="clearfix"></div>
            <!-- Footer -->
            <footer class="site-footer">
                <div class="footer-inner bg-white">
                    <div class="row">
                        <!-- <div class="col-sm-6">
                            Copyright &copy; 2018 Ela Admin
                        </div>
                        <div class="col-sm-6 text-right">
                            Designed by <a href="https://colorlib.com">Colorlib</a>
                        </div> -->
                    </div>
                </div>
            </footer>
            <!-- /.site-footer -->
        </div>
        <!-- /#right-panel -->

        <!-- Scripts -->
        <script src="{{asset('jquery-3.4.1.js')}}"></script>
        <!-- <script src="{{asset('jquery/jquery.min.js')}}"></script> -->
        <!-- <script src='http://code.jquery.com/jquery-2.1.3.js'></script> -->
        <!-- <script src="{{asset('public_inicio/vendor/jquery/jquery.min.js')}}"></script> -->
        <!-- <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script> -->
        <!-- <script src="{{asset('arboles_1/jquery.min.js')}}"></script> -->

        <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script> -->

        <!-- =========================================================== -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>

        <!-- Este JS causa conflictos con jquery pero corresponde al menu -->
        <script src="assets/js/main.js"></script>

        <!--  Chart js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

        <!--Chartist Chart-->
        <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
        <script src="assets/js/init/fullcalendar-init.js"></script>

        <!-- DATA TABLES -->
        <script src="{{asset('jquery-3.4.1.js')}}"></script>
        <script src="{{asset('assets/js/lib/data-table/datatables.min.js')}}"></script>
        <script src="{{asset('assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/lib/data-table/jszip.min.js')}}"></script>
        <script src="{{asset('assets/js/lib/data-table/vfs_fonts.js')}}"></script>
        <script src="{{asset('assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
        <script src="{{asset('assets/js/lib/data-table/buttons.print.min.js')}}"></script>
        <script src="{{asset('assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
        <script src="{{asset('assets/js/init/datatables-init.js')}}"></script>

        <!-- <link href="{{asset('arboles_1/Treant.css')}}" rel="stylesheet">
        <link href="{{asset('arboles_1/collapsable.css')}}" rel="stylesheet">
        <link href="{{asset('arboles_1/perfect-scrollbar.css')}}" rel="stylesheet"> -->

        <!-- <script src="{{asset('arboles_1/collapsable.js')}}"></script> -->
        <!-- <script src="{{asset('arboles_1/raphael.js')}}"></script>
        <script src="{{asset('arboles_1/Treant.js')}}"></script>
        <script src="{{asset('arboles_1/jquery.easing.js')}}"></script> -->

        <!--Local Stuff-->

    </body>
</html>

<script type="text/javascript">
// $("#cc-payment").val(123456);
//señor metodo maestro ajax
function metodoAjax(url,dataForm,callback){
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
    callback(json);
    //$("#nombre_producto").focus();
  },
  error : function(xhr, status) {
    $("#textoModalMensaje").text('Existió un problema con la operación');
    $("#modalMensaje").modal();
    MensajeModal('¡ERROR!','Existió un problema, intentelo de nuevo, si el problema persiste favor de reportarlo a la extensión --.')
  },
  complete : function(xhr, status){
     $("#modalCarga").modal('hide');
     $("#nombre_producto").focus();
  }
  });//*/
  //$("#nombre_producto").focus();
  }

$("#cc-payment").val(123456);

    crearDatatable();
  function crearDatatable(dato_busqueda,numero_pagina){
    //$("#tabla_datos").dataTable().fnDestroy();
    var tabla = $('#tabla_datos').DataTable({
        //responsive: true,
        "searching": true,
        "paging":   true,
        "info":     true,
        "ordering": false,
        "pageLength": 10,
        //'displayStart': numero_pagina,
        language: {
          emptyTable: "No hay datos para mostrar en la tabla",
          zeroRecords: "No hay datos para mostrar en la tabla",
          "search": "Buscar:",
          "info":"Se muestra los registros _START_ a _END_ de _TOTAL_ totales.",
          "infoEmpty":"No se ha encontrado registros.",
          "lengthMenu":"Mostrando _MENU_ registros",
          "infoFiltered":"(Filtrado de un total de _MAX_ registros)",
          "search": "Buscar: ",
          paginate: {
            "first":      "Primero",
            "last":       "Ultimo",
            "next":       "Siguiente",
            "previous":   "Anterior"
          },
        }
      });//*/
      if(dato_busqueda){
        tabla.search( dato_busqueda ).draw();
        $( ".paginate_button  [data-dt-idx='"+numero_pagina+"']" ).trigger("click");
      }
  }

function MensajeModal(){
    console.log('algo');
}




//---------------------------- MENU --------------------------------

// $.noConflict();

// jQuery(document).ready(function($) {

//     "use strict";

//     [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
//         new SelectFx(el);
//     });

//     jQuery('.selectpicker').selectpicker;

    
    

//     $('.search-trigger').on('click', function(event) {
//         event.preventDefault();
//         event.stopPropagation();
//         $('.search-trigger').parent('.header-left').addClass('open');
//     });

//     $('.search-close').on('click', function(event) {
//         event.preventDefault();
//         event.stopPropagation();
//         $('.search-trigger').parent('.header-left').removeClass('open');
//     });

//     $('.equal-height').matchHeight({
//         property: 'max-height'
//     });

//     // var chartsheight = $('.flotRealtime2').height();
//     // $('.traffic-chart').css('height', chartsheight-122);


//     // Counter Number
//     $('.count').each(function () {
//         $(this).prop('Counter',0).animate({
//             Counter: $(this).text()
//         }, {
//             duration: 3000,
//             easing: 'swing',
//             step: function (now) {
//                 $(this).text(Math.ceil(now));
//             }
//         });
//     });


     
     
//     // Menu Trigger
//     $('#menuToggle').on('click', function(event) {
//         var windowWidth = $(window).width();         
//         if (windowWidth<1010) { 
//             $('body').removeClass('open'); 
//             if (windowWidth<760){ 
//                 $('#left-panel').slideToggle(); 
//             } else {
//                 $('#left-panel').toggleClass('open-menu');  
//             } 
//         } else {
//             $('body').toggleClass('open');
//             $('#left-panel').removeClass('open-menu');  
//         } 
             
//     }); 

     
//     $(".menu-item-has-children.dropdown").each(function() {
//         $(this).on('click', function() {
//             var $temp_text = $(this).children('.dropdown-toggle').html();
//             $(this).children('.sub-menu').prepend('<li class="subtitle">' + $temp_text + '</li>'); 
//         });
//     });


//     // Load Resize 
//     $(window).on("load resize", function(event) { 
//         var windowWidth = $(window).width();         
//         if (windowWidth<1010) {
//             $('body').addClass('small-device'); 
//         } else {
//             $('body').removeClass('small-device');  
//         } 
        
//     });
  
 
// });

</script>

@yield('script')
