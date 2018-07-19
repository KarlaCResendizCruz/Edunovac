<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Manual Profesionalización</title>
	<link rel="icon" href="{{asset('img/favicon.png')}}" type="image/png" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="{{asset('js/jquery.min.1.7.js')}}"></script>
	<script src="{{asset('js/turn.js')}}"></script>
	<style type="text/css">
		body {
			background-color:#fcfcfc !important;

		}

		#flipbook{
			width:800px;
			height:600px;
			margin: 0 auto;
		}
		#flipbook .page{
			width:400px;
			height:600px;
		}

		#flipbook .shadow,
		#flipbook.shadow{
		-webkit-box-shadow: 0 4px 10px #666;
		-moz-box-shadow: 0 4px 10px #666;
		-ms-box-shadow: 0 4px 10px #666;
		-o-box-shadow: 0 4px 10px #666;
		box-shadow: 0 4px 10px #666;
		}

		#flipbook .page-wrapper{
		-webkit-perspective:2000px;
		-moz-perspective: 2000px;
		-ms-perspective: 2000px;
		perspective: 2000px;
		}
		

		#flipbook .page-wrapper{
			-webkit-perspective:2000px;
			-moz-perspective: 2000px;
			-ms-perspective: 2000px;
			perspective: 2000px;
		}

		#flipbook .p2,
		#flipbook .p3{
			width:300px;
			height:500px;
		}

		.paginas{
			width:100%; 
			height: auto;
		}
	</style>
	<link rel="stylesheet" href="{{asset('css/main.css')}}"/>
	<script type="text/javascript">
	 $(document).ready(function(){
		$("#flipbook").turn({
		width: 922,
		height: 600,
		autoCenter: true
		});

	
	 });
	</script>
</head>
<body>
	<div class="container">
	<div id="flipbook" >
		<div class="hard"><img class="paginas" src="{{asset('manuales/profesionalizacion/1.jpg')}}"></div>
		<div class="hard"><img class="paginas" src="{{asset('manuales/profesionalizacion/2.jpg')}}"></div>
		<div><img class="paginas" src="{{asset('manuales/profesionalizacion/3.jpg')}}"></div>
		<div><img class="paginas" src="{{asset('manuales/profesionalizacion/4.jpg')}}"></div>
		<div><img class="paginas" src="{{asset('manuales/profesionalizacion/5.jpg')}}"></div>
		<div><img class="paginas" src="{{asset('manuales/profesionalizacion/6.jpg')}}"></div>
		<div><img class="paginas" src="{{asset('manuales/profesionalizacion/7.jpg')}}"></div>
		<div><img class="paginas" src="{{asset('manuales/profesionalizacion/8.jpg')}}"></div>
		<div class="hard"><img class="paginas" src="{{asset('manuales/profesionalizacion/9.jpg')}}"></div>
		<div class="hard"><img class="paginas" src="{{asset('manuales/profesionalizacion/10.jpg')}}"></div>
	</div>
	</div>
</body>
</html>