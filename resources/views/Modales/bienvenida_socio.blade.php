

@yield('bienvenida')

<!DOCTYPE html>
<html lang="en">
    <head>
    {{-- css --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    {{-- bootstrap cdn --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

      <style>
      /* para titulos de los modales */
      .modal-header {
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
    {{-- empieza modal DE POLITICAS DE PRIVACIDAD --}}
    <div class="container">
      <div class="row">
        <div class="col-ls-12">
           {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>  --}}
          <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h1>Bienvenido a Quasar!</h1>
                </div>
                <div class="modal-body" style="text-align: center;">
                  <h2 class="text-align:center">¡Estas a punto de unirte al mejor equipo! :3</h2>
                </div>
                <div class="modal-footer">
                  {{-- <button type="button" class="btn btn-secondary" value="Cerrar" data-dismiss="modal">Cancelar</button>
                  <button class="btn btn-primary" type="submit"  name="button"> Confirmar</button> --}}
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
    {{-- aqui termina modal DE POLITICAS DE PRIVACIDAD --}}
  </body>
</html>
<!-- script para modal timing -->
<script type="text/javascript">
  $(document).ready(function(){
      setTimeout(function(){
          $("#myModal").modal('show');

// esta otra funcion es para que se quite el modal despues de 3S
          setTimeout(function(){
            $("#myModal").modal('hide');
        },2000);
// aqui termina esta otra funcion es para que se quite el modal despues de 3S
      },2000);
  });
</script>



 