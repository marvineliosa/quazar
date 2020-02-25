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
												<th>Bono Rápido</th>
												<th>Bono Generacional</th>
												<th>Socios</th>
												<th>Acciones</th>
										</tr>
								</thead>
								<tbody>

									<tr class="table-">
											<td>Q76</td>
											<td>Ma. Del Carmen Valencia Ponce</td>
											<td> ✓ </td>
											<td></td>
											<td>Q131 <br /> Q20 </td>
											<td></td>
									</tr>
								<tbody>

									<tr class="table-">
											<td>Q78</td>
											<td>Marvin Eliosa</td>
											<td>  </td>
											<td>✓</td>
											<td>Q131 </td>
											<td></td>
									</tr>
								</tbody>
						</table>
				</div>
		</div>
</div>
@endsection

@section('script')
<script>

</script>
@endsection
