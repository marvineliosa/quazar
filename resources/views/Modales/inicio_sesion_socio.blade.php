
@yield('inicio_sesion')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


   
</head>
  <body>
    <div class="modal fade bannerformmodal" tabindex="-1" role="dialog" aria-labelledby="bannerformmodal" aria-hidden="true" id="bannerformmodal">                       
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header p-3 mb-2 bg-info text-white" style="text-align: center;">
                    <h5 class="modal-title" id="smallmodalLabel">Bienvenido a Quasar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="text-align: center;">
                    <div class="container-fluid">
                        <img src="{{asset('images/usuario.png')}}" style="width:150px; height:150px;" class="img-fluid" alt="Responsive image">
                        <h3>¿Eres Administrador o Socio?</h3>
                    </div>
                </div>
                
                <div class=" row justify-content-center" style=" border-bottom-width: 30px; margin-bottom: 30px;">
                    <div class="fa-hover col-lg-5 col-lg-4">
                      <a href="#" class="btn btn-primary btn-lg btn-sm btn-block"><i class="fa fa-users"></i>  Administrador</a>
                    </div>

                    <div class="fa-hover col-lg-5 col-lg-4">
                        <a href="{{ route('login') }}" class="btn btn-dark btn-lg btn-sm btn-block"><i class="fa fa-user"></i>  Socio</a>
                      </div>
                </div>             
            </div>
        </div>
    </div>
  </body>
</html>



