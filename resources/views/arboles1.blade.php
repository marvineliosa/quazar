@extends('plantillas.menu')
@section('content')

    <!--arbol-->
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
              <!--arbol-->
              <h2> Gráfica de Arbol</h2>
              <hr>
              <div class="chart" id="collapsable-example3">

              </div>
            </div>

        </div>
    </div>
    <!--linea de tiempo-->

    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
              <h2> Gráfica de linea</h2>
              <hr>
              <div id="myfirstchart" >
              </div>
              <button type="button" id="botonData" class="btn btn-primary">Cagar Data</button>
            </div>

          </div>
    </div>

@endsection
@section('script')

  <script type="text/javascript">

  tree = new Treant( chart_config3 );
  line = new Treant( myfirstchart );

  </script>

@endsection
