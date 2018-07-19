@extends('index.template.main')

@section('title', 'Programa Educativo')

@section('section')


<div class="container-fluid" id="programa" style="padding-right: 0px; padding-left: 0px;">
  <img class="img-responsive img1" src="{{asset('img/modelo.png')}}">
</div>



<div class="container-fluid" id="modelo">
  <div class="container" style="width: 80%; height: auto; align-items: center;">
    <div class="row">
      <h3>Modelo educativo</h3>
      <div class="col-md-12">
        <p>
        La Educación Física forma parte de las ciencias de la educación, la cual se ocupa de contribuir en el desarrollo integral del ser humano, utilizando el movimiento como un medio para cumplir con unos objetivos fundamentales, dentro de los que se destacan
        </p>
        <ul>
          <li>Conocer y respetar su cuerpo</li>
          <li>Cuidar y respetar el medio ambiente </li>
          <li>Educar para el respeto y la conciliación </li>
          <li>Trabajo en equipo </li>
          <li>Promoción de los hábitos y estilos de vida saludables. </li>
        </ul>
        <p>
          Este persigue el desarrollo físico, emocional, intelectual y espiritual de los alumnos respetando las posibilidades de cada uno y potenciando el talento, apoyándose en el instinto biológico del ser humano, el cual está diseñado para aprender a través del movimiento.
        </p>
        <p>
        La educación integral tiene su fundamento en el modelo de “Aprendizaje clave para la educación integral” que se muestra a continuación: 
        </p>
        <center>
          <img class="img-responsive" src="{{asset('img/diagrama1.png')}}" style="width:650px; height: auto;">
        </center>
      </div>
      <hr><br>
      <h3>Profesionalizacíon y Capacitación</h3>
      <div class="col-md-12">
        <p>
        La profesionalización y capacitación docente  se han  convertido hoy en día en un gran reto para el magisterio, dado que engloban desde la formación inicial de los docentes, hasta llegar a la formación continua y/o permanente, es por ello que la profesionalización y capacitación docente son un camino para seguir hacia una carrera exitosa, donde los frutos se vean reflejados en su práctica con los estudiantes. 
        </p>
        <p>
        Estos manuales sobre profesionalización y capacitación docente contienen diversos elementos que pueden tener aplicabilidad inmediata con el propósito de mejorar la práctica docente y coadyuvar en los procesos de enseñanza de  la educación física de los estudiantes. 
        </p>
      <hr>
        <div class="col-md-12">
          <div class="col-md-6">
          <center>
            <a href="{{url('/manual_profesionalizacion')}}" target="_blank">
              <img class="img-responsive" src="{{asset('img/botonp.png')}}" style="width:300px; height: auto;">
            </a>
          </center>
          </div>
          <div class="col-md-6">
          <center>
            <a href="{{url('/manual_capacitacion')}}" target="_blank">
              <img class="img-responsive" src="{{asset('img/botonc.png')}}" style="width:300px; height: auto;">
            </a>
          </center>
          </div>
        </div>
      </div>
      <hr>
    </div>
  </div>
</div>

@endsection