@extends('plantillas.menu')
@section('content')

    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
              <div class="chart" id="collapsable-example"></div>


              </div>
              <div 	class="chart" id="OrganiseChart-simple">


              </div>
        </div>
    </div>

@endsection
@section('script')

  <script type="text/javascript">

  tree = new Treant( chart_config );
  line = new Treant( simple_chart_config );

  </script>

@endsection
