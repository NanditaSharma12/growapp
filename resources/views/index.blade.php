<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
	<script src="https://cdn.tiny.cloud/1/dof3jqdq1l0i25e0shdwpn92rt3887oct9ckltwz22jn9806/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	 <meta charset="utf-8"/>
        <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <link rel="stylesheet" href="{{ url('assets/css/app.v1.css')}}" type="text/css"/>
        <link rel="stylesheet" href="{{ url('assets/js/calendar/bootstrap_calendar.css')}}" type="text/css"/>
		 <link rel="stylesheet" href="{{ url('js/datatables/datatables.css')}}" type="text/css" />
		
		<style>
			
		</style>
</head>


<body>

    @include('header')

<section class="hbox ">
    @include('sidebar')

    @yield('content')


</section>	

 <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>
		<script src="{{ url('assets/js/app.v1.js')}}"></script>
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
		<script src="{{ url('js/datatables/jquery.dataTables.min.js')}}"></script>
		<script src="{{ url('js/datatables/demo.js')}}"></script>
        <script src="{{ url('assets/js/app.plugin.js')}}"></script>
</body>
</html>