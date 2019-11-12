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
                          <th>Socio</th>
                          <th>Nombre</th>
                          <th>Concepto</th>
                          <th>Ingresos</th>
                          <th>Acciones</th>
                      </tr>
                  </thead>

                      <tr class="table-primary">
                          <th>11/11/2019</th>
                          <th>Q131</th>
                          <th>Fátima Rodriguez Valencia</th>
                          <th>Activación</th>
                          <th>$2,000</th>
                          <th>Acciones</th>
                      </tr>

                      <tr>
                          <th>11/11/2019</th>
                          <th>Q131</th>
                          <th>Wendy Rodriguez Valencia</th>
                          <th>Recompra</th>
                          <th>$2,000</th>
                          <th>Acciones</th>
                      </tr>

		                      <tr class="table-primary">
		                          <th>11/11/2019</th>
		                          <th>Q131</th>
		                          <th>Fátima Rodriguez Valencia</th>
		                          <th>Activación</th>
		                          <th>$2,000</th>
		                          <th>Acciones</th>
		                      </tr>
                  <tbody>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
@endsection
