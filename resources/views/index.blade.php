<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
	 <meta charset="utf-8"/>
        <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <link rel="stylesheet" href="{{ url('assets/css/app.v1.css')}}" type="text/css"/>
        <link rel="stylesheet" href="{{ url('assets/js/calendar/bootstrap_calendar.css')}}" type="text/css"/>
</head>


<body>

    @include('header')

<section class="hbox ">
    @include('sidebar')
 <div>
    @yield('content')
</div>

</section>	

   	<script src="assets/js/app.v1.js"></script>
        <script src="{{ url('assets/js/charts/easypiechart/jquery.easy-pie-chart.js')}}"></script>
        <script src="{{ url('assets/js/charts/sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{ url('assets/js/charts/flot/jquery.flot.min.js')}}"></script>
        <script src="{{ url('assets/js/charts/flot/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{ url('assets/js/charts/flot/jquery.flot.spline.js')}}"></script>
        <script src="{{ url('assets/js/charts/flot/jquery.flot.pie.min.js')}}"></script>
        <script src="{{ url('assets/js/charts/flot/jquery.flot.resize.js')}}"></script>
        <script src="{{ url('assets/js/charts/flot/jquery.flot.grow.js')}}"></script>
        <script src="{{ url('assets/js/charts/flot/demo.js')}}"></script>
        <script src="{{ url('assets/js/calendar/bootstrap_calendar.js')}}"></script>
        <script src="{{ url('assets/js/calendar/demo.js')}}"></script>
        <script src="{{ url('assets/js/sortable/jquery.sortable.js')}}"></script>
        <script src="{{ url('assets/js/app.plugin.js')}}"></script>
</body>
</html>