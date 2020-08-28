  
  {{-- BOTONES DE ACCION --}}
  
  {{-- <div class="fa-hover col-lg-9 col-md-9"> --}}
    <a href="{{route('registro_socio.edit', $id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Editar</a>
  {{-- </div> --}}

  {{-- <div class="fa-hover col-lg-3 col-md-6"> --}}
  <a href="{{route('registro_socio.show', $id)}}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> Historial</a>
  {{-- </div> --}}

  <!---checar otra forma de que el boton "Eliminar" funcione sin quitar el csrf_field pues asi la pagina no es segura
  app/Middleware/VerifyCsrfToken.php --->

  <button type="submit" class="btn btn-danger btn-sm fa fa-trash-o" data-toggle="modal" data-target="#exampleModal2" name="button"> Borrar</button>
  
  <!-- Modal -->
  <div class="modal fade"   id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
              {{-- <div class="modal-header">
                <h5 class="modal-title" id="exampleModal2Label">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div> --}}
                <div class="modal-body" style="text-align: center;">
                  <img src="{{asset('images/caution.png')}}" class="img-fluid" alt="Responsive image">

                  <h1>¿Esta seguro que desea eliminar este registro?</h1>
                  <p class="text-muted"><h3>Esta Operacion es irreversible</h3></p>
                </div>
                <br>
              {{-- <div class="modal-footer"> --}}
                <form class="fa-hover" method="post" style="display:inline" action="{{route('registro_socio.destroy', $id)}}" >
                  {{csrf_field()}}
                  {{ method_field('DELETE') }}
                  <!-- Button trigger modal -->
                    <div class=" row justify-content-center" style=" border-bottom-width: 50px; margin-bottom: 20px;">
                      <div class="fa-hover col-lg-3 col-md-3">
                        <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar</button>
                      </div>
                      <div class="fa-hover col-lg-3 col-md-3 ">
                        <button class="btn btn-success btn-lg" type="submit"  name="button"> Confirmar</button>
                      </div>
                    </div>                  
                </form>   
              {{-- </div> --}}
            </div>
          </div>
        </div>