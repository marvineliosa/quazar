@extends('plantillas.menu')
@section('content')

    <div class="col-lg-12 col-md-12">
        <div >
            <h3 >Arbol 3</h3>
        </div>
        <div class="card">
            <div class="card-body">
              <div class="chart" id="collapsable-example3"></div>
              <div class="chart" id="OrganiseChart-simple3"></div>
            </div>
        </div>
    </div>

@endsection
@section('script')
  <script type="text/javascript">

  tree = new Treant( chart_config3 );
  line = new Treant( simple_chart_config3 );

  </script>
@endsection
