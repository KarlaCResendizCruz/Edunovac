<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
		<title>
			Edunovac | @yield('title', 'Default')
		</title>
		<link rel="icon" href="{{asset('img/favicon.png')}}" type="image/png" />
		<link rel="stylesheet" href="{{asset('bootstrap-3.3.7/css/bootstrap.min.css')}}"/>
	    <link rel="stylesheet" href="{{asset('css/main.css')}}"/>
		<!--Start of Tawk.to Script-->
		<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/5ae10a8b227d3d7edc24be28/default';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
		</script>
		<!--End of Tawk.to Script-->  
	</head>
	<body>
		@include('index.template.partials.nav')
		@yield('section')
		@include('index.template.partials.footer')
		<script src="{{asset('font-awesome-5.0.1/js/fontawesome-all.min.js')}}"></script>    
	    <script src="{{asset('jquery-3.3.1/jquery-3.3.1.min.js')}}"></script>
	    <script src="{{asset('bootstrap-3.3.7/js/bootstrap.min.js')}}"></script>
	</body>
</html>

