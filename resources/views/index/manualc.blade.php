<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Manual Capacitación</title>
	<link rel="icon" href="{{asset('img/favicon.png')}}" type="image/png" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="{{asset('js/jquery.min.1.7.js')}}"></script>
	<script src="{{asset('js/turn.js')}}"></script>
	<style type="text/css">
		body {
			background-color: #e7e7e7 !important;
		}
		#flipbook{
			width:800px;
			height:600px;
			/* margin: 0 auto; */
			display:block;
			margin-left: auto;
  			margin-right: auto;
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
	<div id="flipbook" >
		<div class="hard"><img class="paginas" src="{{asset('manuales/capacitacion/1.jpg')}}"></div>
		<div class="hard"><img class="paginas" src="{{asset('manuales/capacitacion/2.jpg')}}"></div>
		<div><img class="paginas" src="{{asset('manuales/capacitacion/3.jpg')}}"></div>
		<div><img class="paginas" src="{{asset('manuales/capacitacion/4.jpg')}}"></div>
		<div><img class="paginas" src="{{asset('manuales/capacitacion/5.jpg')}}"></div>
		<div><img class="paginas" src="{{asset('manuales/capacitacion/6.jpg')}}"></div>
		<div><img class="paginas" src="{{asset('manuales/capacitacion/7.jpg')}}"></div>
		<div><img class="paginas" src="{{asset('manuales/capacitacion/8.jpg')}}"></div>
		<div class="hard"><img class="paginas" src="{{asset('manuales/capacitacion/9.jpg')}}"></div>
		<div class="hard"><img class="paginas" src="{{asset('manuales/capacitacion/10.jpg')}}"></div>
	</div>
</body>
</html>