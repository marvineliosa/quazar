@extends('plantillas.menu')
@section('content')

    <div class="col-lg-12 col-md-12">
      <div >

          <h3 style= "content-center">Arbol 1</h3>

      </div>
        <div class="card">
            <div class="card-body">
              <div class="chart" id="collapsable-example1"></div>


              </div>
              <div 	class="chart" id="OrganiseChart-simple1">


              </div>
        </div>
    </div>

@endsection
@section('script')

  <script type="text/javascript">

  tree = new Treant( chart_config1 );
  line = new Treant( simple_chart_config1 );

  </script>

@endsection
