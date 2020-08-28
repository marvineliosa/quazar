<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Quasar</title>
  
  <link rel="icon" href="images/nuevos logos/Q-1.ico">

  <!-- Custom fonts for this theme -->
   {{-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">  --}}
  <link href="{{asset('public_inicio/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <!-- <link href="css/freelancer.min.css" rel="stylesheet"> -->
  <link href="{{asset('public_inicio/css/freelancer.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger"  href="#page-top">
        <img src="{{asset('img/pagina_inicio/logo blanco PNG Ch.png')}}" width="260px" height="110px">
      </a>
      {{-- <a class="navbar-brand js-scroll-trigger" href="#page-top">Quasar</a> --}}
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Portafolio</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Nosotros</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contáctanos</a>
            </li>
          

         {{-- para que quede todo junto en el navbar   --}}
        {{-- <div class="flex-center position-ref full-height">   --}}

          {{-- Parte de la vista login --}}
            {{-- <div> --}}
              @if (Route::has('login'))
            {{-- <div class="top-right links"> --}}
                @auth
                <li id="home" class="nav-item mx-0 mx-lg-1"> 

                    <a class="nav-link py-3 px-0 px-lg-3" href="{{ url('/home') }}">Mi Backoffice</a>
                  </li>

                @else
                  <li id="login" class="nav-item mx-0 mx-lg-1"> 

                      @extends('Modales/inicio_sesion_socio')
                      @section('inicio_sesion')  
                      @endsection
                      {{-- <a class="nav-link py-3 px-0 px-lg-3  js-scroll-trigger" href="{{ route('login') }}">Iniciar Sesion</a> --}}
                      <a class="nav-link py-3 px-0 px-lg-3" href="#bannerformmodal" data-toggle="modal" data-target="#bannerformmodal">Iniciar Sesion</a>


                  </li>
                    @if (Route::has('register'))
                  <li id="registro" class="nav-item mx-0 mx-lg-1">
                   
                   
                     @extends('Modales/registro_socio')
                      @section('registro')  
                      @endsection
                      {{-- <button type="button">Registro</button> --}}
                      <a class="nav-link py-3 px-0 px-lg-3"  data-toggle="modal" onclick="mostrarModal()" >Registro</a>

    
                    
                  </li>
                    @endif
                @endauth
            {{-- </div> --}}
            @endif
            {{-- </div> --}}
        </ul>
      </div>
        {{-- </div> --}}
      
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead bg-primary text-white text-center"  style="background-image: url(img/pagina_inicio/fondo.jpg);">
  <!-- <img class="img-fluid rounded mb-5" src="{{asset('img/pagina_inicio/')}}" alt=""> -->
  <!-- <header class="masthead bg-primary text-white text-center" style="background-image: url(img/logo.jpg);"> -->
    <!-- <img class="" src="img/logo.jpg" alt="" > -->
    <img src="{{asset('img/pagina_inicio/logo_sin_fondo.png')}}" class="img-fluid" alt="Responsive image">

  </header>

  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="portfolio">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Abundancia y Bienestar</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
          <!--- <div class="divider-custom-icon">
            <i class="fas fa-star"></i>
          </div> --->
        <div class="divider-custom-line"></div>
      </div>

      <!-- Portfolio Grid Items -->
      <div class="row">

        <!-- Portfolio Item 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
                <h5>¿BUSCAS UNA OPORTUNIDAD? Clic Aqui</h5>
              </div>
            </div>
            <img class="img-fluid" src="{{asset('img/pagina_inicio/Dinero.jpeg')}}" alt="">
          </div>
        </div>

        <!-- Portfolio Item 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
                <h5>¿QUIÉNES SOMOS?</h5>
              </div>
            </div>
            <img class="img-fluid" src="{{asset('img/pagina_inicio/Lider.jpeg')}}" alt="">
          </div>
        </div>

        <!-- Portfolio Item 3 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{asset('img/pagina_inicio/QH.jpeg')}}" alt="">
          </div>
        </div>

        <!-- Portfolio Item 4 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
                <h5>PLAN DE COMPENSACIÓN</h5>
              </div>
            </div>
            <img class="img-fluid" src="{{asset('img/pagina_inicio/Red.jpeg')}}" alt="">
          </div>
        </div>

        <!-- Portfolio Item 5 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{asset('img/pagina_inicio/Engranes.jpeg')}}" alt="">
          </div>
        </div>

        <!-- Portfolio Item 6 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{asset('img/pagina_inicio/Diamante.jpeg')}}" alt="">
          </div>
        </div>

        <!-- Portfolio Item 7 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal7">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{asset('img/pagina_inicio/8.jpg')}}" alt="">
          </div>
        </div>

        <!-- Portfolio Item 8 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal8">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{asset('img/pagina_inicio/9.jpg')}}" alt="">
          </div>
        </div>


        </div>

      </div>
      <!-- /.row -->

    </div>
  </section>

  <!-- About Section -->
  <section class="page-section bg-secondary text-white mb-0" id="about">
    <div class="container">

      <!-- About Section Heading -->
      
        <h2 class="page-section-heading text-center text-uppercase text-white">Nosotros</h2>
      
      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- About Section Content -->
      <div class="row">
        <div class="col-lg-4 ml-auto">
          <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime incidunt officia cumque reprehenderit, tempora quis sit sint laborum! Reprehenderit repudiandae a aliquid praesentium molestias aperiam, hic minus nulla aliquam sed!.</p>
        </div>
        <div class="col-lg-4 mr-auto">
          <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quae enim odit sequi. Repellendus, quod eum? Quidem suscipit illo quibusdam magnam, dolor quod exercitationem in architecto. Porro similique soluta asperiores.</p>
        </div>
      </div>

      <!-- About Section Button -->
      <!-- <div class="text-center mt-4">
        <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/themes/freelancer/">
          <i class="fas fa-download mr-2"></i>
          Free Download!
        </a>
      </div> -->

    </div>
  </section>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contáctanos</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Contact Section Form -->
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <form name="sentMessage" id="contactForm" novalidate="novalidate">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Nombre</label>
                <input class="form-control" id="contacto_nombre" type="text" placeholder="Nombre" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Correo electrónico</label>
                <input class="form-control" id="email" type="email" placeholder="Correo electrónico" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Celular</label>
                <input class="form-control" id="phone" type="tel" placeholder="Celular" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Mensaje</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Mensaje" required="required" data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Enviar</button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Location</h4>
          <p class="lead mb-0">2215 John Daniel Drive
            <br>Clark, MO 65243</p>
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Siguenos en / Conocenos mejor en</h4>
          <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/Quasar-Abundancia-y-Bienestar-oficial-103419347889292/">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-twitter"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-linkedin-in"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-dribbble"></i>
          </a>
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">Sobre Quasar</h4>
          <p class="lead mb-0">Freelance is a free to use, MIT licensed Bootstrap theme created by
            <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
        </div>

      </div>
    </div>
  </footer>

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; Your Website 2019</small>
    </div>
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Portfolio Modals -->

  <!-- Portfolio Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
  <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">VIVIENDO UN ESTILO DE VIDA CON ABUNDANCIA Y BIENESTAR.</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                 <!--- <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                    </div> --->
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="{{asset('img/pagina_inicio/Dinero.jpeg')}}" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">
                  
                    Sabías qué... Hoy en día tener una segunda fuente de ingresos no es un lujo sino una
                    necesidad. ¿Verdad?
                    En QUASAR somos ese trampolín financiero que ayudará a ti y a tu familia a vivir un estilo
                    de vida con ABUNDANCIA Y BIENESTAR.</p>
                  
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Cerrar
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">¡OTRO DATO DE GRAN INTERÉS!</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <!---<div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div> --->
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="{{asset('img/pagina_inicio/Lider.jpeg')}}" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-10">
                  
                    Somos una empresa de la nueva era de los negocios Multinivel, hecha por networkers para networkers.
                    Creemos firmemente que para brindarte una gran oportunidad inigualable debemos
                    desarrollar 3 pilares para garantizar el bienestar tuyo y el de tu familia:
                  
                  </p>
                    
                        <li class="text-align:center">Plan de compensacion</li>
                        <li class="text-align:center">Producto</li>
                        <li class="text-align:center">Sistema</li>

                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Cerrar
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">SI TE HUBIERAN INVITADO A INICIAR CON ELLOS SUS COMPAÑÍAS (SIN SABER LO QUE HOY SON)</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                   <!--- <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div> --->
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <!-- <img class="img-fluid rounded mb-5" src="img/4.jpg" alt=""> -->
                <img class="img-fluid rounded mb-5" src="{{asset('img/pagina_inicio/QH.jpeg')}}" alt="">
                <img class="img-fluid rounded mb-5" src="{{asset('img/pagina_inicio/QM.jpeg')}}" alt="">

                <!-- Portfolio Modal - Text -->
                <p class="mb-5">
                  
                    ¿HUBIERAS ACEPTADO?
                  
                </p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Cerrar
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">¡NUESTROS PRODUCTOS!</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <!--- <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div> --->
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="{{asset('img/pagina_inicio/Red.jpeg')}}" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">
                  Desarrollamos un plan el cual se adapta a los 3 fundamentos que hacen que un plan sea <br>
                 <strong>sólido, rentable y con gran potencial de crecimiento.</strong>
                    <table style="width:100%" class="text-justify">
                      <tr>
                        <td><li><strong>Explosividad: </strong>Con QUASAR recuperas tu inversión desde tus primeros 2 patrocinios.</li></td> 
                      </tr>
                      <tr>
                        <td><li><strong>Profundidad: </strong>Te damos la oportunidad de cobrar de todas las personas que tengas en tu organización, generando apalancamiento, derrama y trabajo en equipo.</li></td>
                      </tr>
                      <tr>
                        <td><li><strong>Frontalidad: </strong>En QUASAR también tienes la oportunidad de patrocinar a todos los frontales que quieras y con esto generar cheques más grandes al mismo tiempo que apalancas a tu equipo.</li></td>
                      </tr>
                    </table>
                    <br>
                  <strong>
                    ¡Contacta a la persona que te invitó!
                  </strong>
                </p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Cerrar
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">¿Cómo inicio?</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <!--- <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div> --->
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="{{asset('img/pagina_inicio/Engranes.jpeg')}}" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-0">Nuestro sistema se fundamenta en el <strong> SER, HACER Y TENER </strong> ayudándote a convertirte en
                  un gran líder a través de la capacitación, el entrenamiento y la motivación en 2 mercados de desarrollo:
                </p>
                <p class="mb=0">
                  <li class="text-align:justify"><strong>Mercado Caliente</strong></li>
                  <li class="text-align:justify"><strong>Mercado Frio</strong></li>
                </p>
                <p class="mb=">
                  En los cuales te enseñamos a utilizar sistemas de prospección, presentación, cierre y
                  duplicación masivos, apalancado de las redes sociales.
                </p>
                <br>

                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Cerrar
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">BONO RÁPIDO</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <!---<div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div> --->
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="{{asset('img/pagina_inicio/Diamante.jpeg')}}" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5"> <strong>¡El momento es ahora!</strong>
                  <br>
                  Contacta a la persona que te invitó para que te brinde más información sobre ésta gran
                  oportunidad.
                </p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Cerrar
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 7 -->
  <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-labelledby="portfolioModal7Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">RESIDUAL POR GENERACIONES</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <!---<div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div> --->
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="{{asset('img/pagina_inicio/8.jpg')}}" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">De la segunda compra de tu gente en adelante también cobrarás por c/u de las personas activas en 3 generaciones: $50 primer generación $150 segunda generación $500 tercera generación</p>
                <p class="mb-5">Tus ganancias se potencializarán y ¡mientras más gente invites, más ayudas a tu equipo y lo mejor de todo es que ganarás más!</p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Cerrar
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 7 -->
  <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-labelledby="portfolioModal8Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">OLVIDATE DE PAGAR GASTOS FIJOS: RENTA,OFICINA LOCAL, NÓMINA, ETC.</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <!--- <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div> --->
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="{{asset('img/pagina_inicio/9.jpg')}}" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">Con Quasar tienes un negocio llave en mano, además de que una vez siendo socio Quasar te daremos todo el know how para que puedas obtener ganancias inmediatas y residuales duraderos.</p>
                <p class="mb-5">Esto es posible gracias a nuestro poderoso plan de pagos el cual, genera explosividad, retención, volumen a profundidad infinita, apalancamiento, derrama y la oportunidad de generar altos cheques en corto tiempo gracias a nuestro bono generacional.</p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Cerrar
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <!-- <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

  <script src="{{asset('public_inicio/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('public_inicio/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->
  <script src="{{asset('public_inicio/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Contact Form JavaScript -->
  <!-- <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script> -->
  <script src="{{asset('public_inicio/js/jqBootstrapValidation.js')}}"></script>
  <script src="{{asset('public_inicio/js/contact_me.js')}}"></script>

  <!-- Custom scripts for this template -->
  <!-- <script src="js/freelancer.min.js"></script> -->
  <script src="{{asset('public_inicio/js/freelancer.min.js')}}"></script>

</body>

</html>

<script type="text/javascript">

// para pasarle  un nombre ficticio
  // $("#contacto_nombre").val('algo');



 

</script>
