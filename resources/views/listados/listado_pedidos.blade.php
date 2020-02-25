@extends('plantillas.menu')
@section('content')
	
  <div class="col-md-12">
      <div class="card">
          <div class="card-header">
              <strong class="card-title">Pedidos</strong>
          </div>
			<div class="card-body">
				<table id="tabla_datos" class="table table-bordered">
                  <thead>
                      <tr>
                          <th>Pedido</th>
                          <th>Socio</th>
                          <th>Nombre</th>
                          <th>Fecha</th>
                          <th>Concepto</th>
                          <th>Acumulado</th>
                          <th>Acciones</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr class="table-success">
                          <td>15</td>
                          <td>Q18</td>
                          <td>Marvin Eliosa Abaroa</td>
                          <td>09/11/2019</td>
                          <td>PEDIDO</td>
                          <td>$ 2,000</td>
                          <td></td>
                      </tr>
                      <tr>
                          <td>14</td>
                          <td>Q21</td>
                          <td>Javier Sánchez Vázquez</td>
                          <td>09/11/2019</td>
                          <td>PEDIDO</td>
                          <td>$ 1,300</td>
                          <td></td>
                      </tr>
                      <tr class="table-success">
                          <td>13</td>
                          <td>Q32</td>
                          <td>Isaac Lemus Tetzopa</td>
                          <td>09/11/2019</td>
                          <td>PEDIDO</td>
                          <td>$ 2,000</td>
                          <td></td>
                      </tr>
                      <tr class="">
                          <td>12</td>
                          <td>Q18</td>
                          <td>Kevin Gutierrez López</td>
                          <td>09/11/2019</td>
                          <td>PEDIDO</td>
                          <td>$ 800</td>
                          <td></td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
@endsection