@extends('plantillas.menu')
@section('content')

  <div class="col-md-12">
      <div class="card">
          <div class="card-header">
              <strong class="card-title">Comisiones</strong>
          </div>
      <div class="card-body">
        <table id="tabla_datos" class="table table-bordered">
                  <thead>
                      <tr>
                          <th>Socio</th>
                          <th>Nombre</th>
                          <th>Tipo de pago</th>
                          <th>Socios</th>
                          <th>Bono Rápido</th>
                          <th>Bono Generacional</th>
                          <th>Acciones</th>
                      </tr>
                  </thead>
                  <tbody>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
@endsection
