<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <title> Collapsable example </title>
    <!-- <link rel="stylesheet" href="../../Treant.css">
    <link rel="stylesheet" href="collapsable.css">

    <link rel="stylesheet" href="../../perfect-scrollbar/perfect-scrollbar.css"> -->

    <link href="{{asset('arboles_1/Treant.css')}}" rel="stylesheet">
    <link href="{{asset('arboles_1/collapsable.css')}}" rel="stylesheet">
    <link href="{{asset('arboles_1/perfect-scrollbar.css')}}" rel="stylesheet">
</head>
<body>
    <div class="chart" id="collapsable-example"></div>
    <!-- <script src="../../vendor/raphael.js"></script>
    <script src="../../Treant.js"></script>

    <script src="../../vendor/jquery.min.js"></script>
    <script src="../../vendor/jquery.easing.js"></script> -->

    <script src="{{asset('jquery-3.4.1.js')}}"></script>
    <script src="{{asset('arboles_1/collapsable.js')}}"></script>
    <script src="{{asset('arboles_1/raphael.js')}}"></script>
    <script src="{{asset('arboles_1/Treant.js')}}"></script>
    <script src="{{asset('arboles_1/jquery.easing.js')}}"></script>



    <script src="collapsable.js"></script>
    <script>
        tree = new Treant( chart_config );
    </script>
</body>
</html>
