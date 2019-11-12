var morris1 = new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { year: '2019', value: 0 }
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  lineWidth: 1, //ancho de la linea
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Value'],
  resize: true,
  lineColors: ['#2CB4AC'] //colores de la linea
});




$("#botonData").on("click",function(){
  console.log(morris1);
  var nuevaData = [
    { year: '2016', value: 1 },
    { year: '2017', value: 15 },
    { year: '2018', value: 50 },
    { year: '2019', value: 18 },
    { year: '2020', value: 15 },
    { year: '2021', value: 0 },
    { year: '2022', value: 2 },
    { year: '2023', value: 30 }
  ];

  morris1.setData (nuevaData);
});
