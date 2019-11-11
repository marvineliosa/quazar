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
                          <td></td>
                      </tr>
                  </tbody>
									<tbody>
                      <tr>
                          <td>Q19</td>
                          <td>Leonardo Axel Hernandez Rancaño</td>
                          <td>221200</td>
                          <td>Q1</td>
                          <td>Q15</td>
                          <td></td>
                      </tr>
                  </tbody>
									<tbody>
                      <tr>
                          <td>Q20</td>
                          <td>Gerardo Quechol</td>
                          <td>2212364589</td>
                          <td>Q11</td>
                          <td>Q19</td>
                          <td></td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
@endsection
