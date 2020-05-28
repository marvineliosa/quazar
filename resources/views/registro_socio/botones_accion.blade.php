<a href="{{route('registro_socio.edit', $id)}}" class="btn btn-warning btn-sm">Editar</a>

  <a href="{{route('registro_socio.show', $id)}}" class="btn btn-primary btn-sm">Ver Historial</a>


  <!-- <form method="post" style="display:inline" action="{{route('registro_socio.destroy', $id)}}" >
  {{csrf_field()}}
  {{ method_field('DELETE') }}
  <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('¿Borrar?');" name="button">Borrar</button>
  </form> -->

 <form method="post" style="display:inline" action="{{route('registro_socio.destroy', $id)}}" >
  {{csrf_field()}}
  {{ method_field('DELETE') }}
  <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('¿Borrar?');" name="button">Borrar</button>
  </form> 







                   