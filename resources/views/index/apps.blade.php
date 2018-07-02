@extends('index.template.main')

@section('title', 'Nuestras Apps')

@section('section')


<div class="container-fluid" id="apps">
  <div class="container">
    <div class="col-md-12">
      <center>
        <h3>Nuestras apps</h3>
        <p>Conoce las aplicaciones que te ayudarán a desarrollar y creear actividades para tus alumnos.</p>
      </center>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-8">
          <center>
            <img src="{{url('img/apps.png')}}" class="img-responsive" style="width: auto; height: 320px;">
          </center>
        </div>
        <div class="col-md-2" style="vertical-align: middle;">
          <br><br>
          <center>
              <a href="" ><img src="{{url('img/google.png')}}" class="img-responsive" style="width: auto; height: 45px;"></a>
              <br>
              <a href="" ><img src="{{url('img/apple.png')}}" class="img-responsive" style="width: auto; height: 45px;"></a>
          </center>
        </div>

        <div class="col-md-1"></div>

      </div>
      <hr>
      <div class="row">
        <div class="col-md-4">
          <p>
          "EVALÚA" una aplicación confiable y de fácil manejo que permita mediante una serie de mediciones conocer el estado nutricional, de crecimiento y desarrollo de los niños, como para el desarrollo de las  habilidades y capacidades físicas mediante la aplicabilidad de pruebas y/o test específicos para los diferentes estadios de desarrollo.</p>
        </div>
        <div class="col-md-4">
          <p>
          "EDUCOOR" es una aplicación confiable de fácil manejo y didáctica que sirva de guía al profesor para diseñar y planificar una serie de actividades, secuencias, rutinas y programas de actividad física que permitan el desarrollo de habilidades y capacidades coordinativas dependiendo del estadio de desarrollo de los estudiantes.</p>
        </div>
        <div class="col-md-4">
          <p>
          "EDUCORD" es una herramienta tecnológica confiable de fácil manejo y didáctica que sirva de guía al profesor para diseñar y planificar  una serie de actividades, secuencias, rutinas y programas de actividad física que permitan el desarrollo y capacidades condicionantes dependiendo del estadio de desarrollo de los estudiantes..</p>
        </div>
      </div>

    </div>
  </div>
</div>

@endsection

   