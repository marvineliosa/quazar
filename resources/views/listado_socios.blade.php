@extends('plantillas.menu')
@section('content')
	
  <div class="col-md-12">
      <div class="card">
          <div class="card-header">
              <strong class="card-title">Data Table</strong>
          </div>
			<div class="card-body">
				<table id="tabla_datos" class="table table-striped table-bordered">
                  <thead>
                      <tr>
                          <th>Socio</th>
                          <th>Nombre</th>
                          <th>Teléfono</th>
                          <th>Patrocinador</th>
                          <th>Upline</th>
                          <th>Acciones</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>Q18</td>
                          <td>Marvin Eliosa Abaroa</td>
                          <td>2221924430</td>
                          <td>Q2</td>
                          <td>Q16</td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
@endsection