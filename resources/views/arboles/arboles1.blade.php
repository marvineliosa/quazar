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
              <div class="container">
                <h1>Gráficas</h1>
                <hr>

                <div class="row">

                  <div class="col-md-6">
                    <h2>Grafica de linea</h2>
                    <hr>
                    <div id="myfirstchart" ></div>

                  </div>
                  <div class="col-md-6">
                    <h2>Grafica de area</h2>
                    <hr>
                    <div id="graph" ></div>

                  </div>
                </div>

                <button type="button" id="botData" class="btn btn-primary">Cargar</button>
              </div>
            </div>

          </div>
    </div>

@endsection
@section('script')

  <script type="text/javascript">


tree = new Treant( chart_config3 );


  var morris1 = new Morris.Line({
    // ID of the element in which to draw the chart.
    element: 'myfirstchart',
    // Chart data records -- each entry in this array corresponds to a point on
    // the chart.
    data: [
      { year: '2008', value: 0 },
      { year: '2009', value: 10 },
      { year: '2010', value: 5 },
      { year: '2011', value: 5 },
      { year: '2012', value: 50 },
      { year: '2013', value: 15 },
      { year: '2014', value: 25 },
      { year: '2015', value: 36 },
      { year: '2016', value: 10 },
      { year: '2017', value: 2 },
      { year: '2018', value: 8 },
      { year: '2019', value: 37 }
    ],
    // The name of the data record attribute that contains x-values.
    xkey: 'year',
    // A list of names of data record attributes that contain y-values.
    ykeys: ['value'],
    // Labels for the ykeys -- will be displayed when you hover over the
    // chart.
    labels: ['Value'],

    resize: true,

    lineColors: ['#C14D9F'],

    lineWidth: 1

  });

  var day_data = [
    {"period": "2012-10-01", "licensed": 3407},
    {"period": "2012-09-30", "licensed": 3351},
    {"period": "2012-09-29", "licensed": 3269},
    {"period": "2012-09-20", "licensed": 3246},
    {"period": "2012-09-19", "licensed": 3257},
    {"period": "2012-09-18", "licensed": 3248},
    {"period": "2012-09-17", "licensed": 3171},
    {"period": "2012-09-16", "licensed": 3171},
    {"period": "2012-09-15", "licensed": 3201},
    {"period": "2012-09-10", "licensed": 3215}
  ];
  Morris.Line({
    element: 'graph',
    data: day_data,
    xkey: 'period',
    ykeys: ['licensed'],
    labels: ['Licensed'],

    resize: true,

    lineColors: ['#C14D9F'],

    lineWidth: 1
  });




  $("#botData").on("click",function(){
    console.log(morris1);

    var nuevaData = [
        { year: '2008', value: 20 },
        { year: '2009', value: 10 },
        { year: '2010', value: 5 },
        { year: '2011', value: 5 },
        { year: '2012', value: 50 },
        { year: '2013', value: 15 },
        { year: '2014', value: 25 },
        { year: '2015', value: 36 },
        { year: '2016', value: 10 },
        { year: '2017', value: 2 },
        { year: '2018', value: 8 },
        { year: '2019', value: 37 }
      ];

      morris1.setData(nuevaData);
  });

  </script>

@endsection
