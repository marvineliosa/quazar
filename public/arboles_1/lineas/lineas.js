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
  labels: ['Nuevos Clientes'],
  resize: true,
  lineColors: ['#2CB4AC'] //colores de la linea
});




$("#botonData").on("click",function(){
  console.log(morris1);
  var nuevaData = [
    { year: '1', value: 1 },
    { year: '2', value: 15 },
    { year: '3', value: 50 },
    { year: '4', value: 18 },
    { year: '5', value: 15 },
    { year: '6', value: 0 },
    { year: '7', value: 2 },
    { year: '8', value: 30 }
  ];

  morris1.setData (nuevaData);
});
