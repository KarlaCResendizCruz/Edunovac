@extends('index.template.main')

@section('title', 'Inicio')

@section('section')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="item active">
      <center>
        <img class="img-responsive img1" src="{{asset('img/slider/slider1.jpg')}}">
      </center> 
    </div>
    <div class="item">
      <center>
        <img class="img-responsive img1" src="{{asset('img/slider/slider2.jpg')}}">
      </center> 
    </div>
    <div class="item">
      <center>
        <img class="img-responsive img1" src="{{asset('img/slider/slider3.jpg')}}">
      </center> 
    </div>
  </div>

  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        


<div class="container-fluid" id="nosotros">
  <div class="container">
    <div class="col-md-12">
      <div class="col-md-5"> 
        <center>
        <img src="{{url('img/nosotros.png')}}" class="img-responsive" style="width: 100%; height: auto;">
        </center>
      </div>
      <div class="col-md-7">
        <h3>Misión</h3>
        <p>
          Proporcionar a profesores y personas interesadas en la enseñanza de la activación física y deporte, una serie de aplicaciones móviles confiables que les ayude a diseñar y planificar sus sesiones de trabajo para la evaluación, desarrollo de habilidades como de capacidades físicas, mediante programas de actividad física diseñados, estructurados y acordes a las necesidades de alumnos de educación básica y media superior para mejorar su salud como desarrollo físico.</p>
        <br>
        <h3>Visión</h3>
        <p>
          Para el 2025 buscamos posicionar nuestro producto a nivel nacional como una herramienta tecnológica confiable y de fácil manejo que coadyude a la mejora de su práctica docente, al proceso de formación y educación de los estudiantes en la actividad física y deporte, y que les permita  mejorar su salud.</p>
      </div>
    </div>
  </div>
</div>


<div class="container-fluid" id="filosofia">
  <div class="container">
    <div class="col-md-12">
      <div class="col-md-8">
        <h3>Filosofía</h3>
        <p>
          En <strong style="color: #EF7C37;">“EDUNOVAC”</strong> buscamos educar para la activación del cuerpo y los sentidos como un medio para ayudar a los estudiantes de educación básica y media superior a mejorar su salud transformando sus vidas.</p>
        
        <h3>Origen de Edunovac</h3>
        <p>
          Edunovac ha desarrollado aplicaciones móviles dirigidas principalmente a profesores, las cuales, los guiarán para su profesionalización y proceso continuo de capacitación. Tendrán acceso a programas metodológicos, confiables y dinámicos que les sirvan de guías para las evaluaciones antropométricas y físicas, en sus procesos de planificación para estructurar sesiones y clases que busquen el desarrollo integral de sus habilidades y capacidades físicas, en estudiantes de educación básica y media superior. Con este producto se busca mejorar la salud de los estudiantes, su vida, el aprendizaje motor, y para algunos, su futuro rendimiento deportivo. </p>
      </div>
      <div class="col-md-4"> 
        <img src="{{url('img/filosofia.png')}}" class="img-responsive">
      </div>
    </div>
  </div>
</div>

<div id="contacto" ></div>


<div class="container-fluid" id="contacto">
  <div class="container">
    <div class="col-md-12">
      <center>
        <h2>Contacto</h2>
          <p> Contactanos, con gusto resolveremos tus comentarios,dudas y sugerencias, estamos para atenderte.</p>
        </center>
      <hr><br>
      <div class="col-md-6">

      <div class="form">
        <form  method="post" role="form">
          <div class="row">
            <div class="col-sm-6 form-group">
              <label for="name">Nombre</label>
              <input class="form-control" id="name" name="nombre" placeholder="Ingrese su nombre" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <label for="email">Correo electrónico</label>
              <input class="form-control" id="email" name="email" placeholder="Ingrese su correo electrónico" type="email" required>
            </div>
            <div class="col-sm-12 form-group">
              <label for="asunto">Asunto</label>
              <input class="form-control" id="asunto" name="asunto" placeholder="Escriba su asunto deseado" type="text" required>
            </div>
          </div>
            <label for="mensaje">Mensaje</label>
            <textarea class="form-control" id="comments" name="mensaje" placeholder="Escribe tu comentario, duda o sugerencia" rows="5"></textarea><br>
          <div >
            <a class="btn btn-danger" type="reset" style="background-color: #d66931;border-color: #d2522b;">Cancelar</a>
            <a class="btn btn-primary" type="submit" style="background-color: #063c5d;border-color: #063c5d;">Enviar mensaje</a>
          </div>
        </form>
      </div>

      </div>
      <div class="col-md-6">
        <center>

        <iframe width="100%" height="455" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3747.7271743101123!2d-98.72009488555253!3d20.061867186530083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1a6e3803e3ceb%3A0x6fe5abfee4b00f6c!2sLa+Providencia+Siglo+XXI!5e0!3m2!1ses!2smx!4v1524896396195"></iframe>

        </center>
      </div>


    </div>
  </div>
</div>


@endsection

   