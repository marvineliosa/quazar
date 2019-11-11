@extends('plantillas.menu')
@section('content')
	
  <div class="col-md-12">
      <div class="card">
          <div class="card-header">
              <strong class="card-title">Registros</strong>
          </div>
			<div class="card-body">
				<table id="tabla_datos" class="table table-bordered">
                  <thead>
                      <tr>
                          <th>Fecha</th>
                          <th>Nombre</th>
                          <th>Socio</th>
                          <th>Concepto</th>
                          <th>Ingresos</th>
                          <th>Egresos</th>
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