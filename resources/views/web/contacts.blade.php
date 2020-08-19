@extends('web.base')

@section('content')


<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Contactos</h2>
        <ol>
          <li><a href="{{route('index')}}">Inicio</a></li>
          <li>Contactos</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <div class="map-section">
    <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.306338923341!2d-78.63507788524642!3d-0.917894599330407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d460483c1c1a3b%3A0x694a140aab02b1c!2sUniversidad%20T%C3%A9cnica%20de%20Cotopaxi!5e0!3m2!1ses-419!2sec!4v1597096589874!5m2!1ses-419!2sec" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" frameborder="0" allowfullscreen></iframe>
  </div>

  <section id="contact" class="contact">
    <div class="container">

      <div class="row justify-content-center" data-aos="fade-up">

        <div class="col-lg-10">

          <div class="info-wrap">
            <div class="row">
              <div class="col-lg-4 info">
                <i class="icofont-google-map"></i>
                <h4>Localización:</h4>
                <p>Av Simón Rodríguez, Latacunga<br>Latacunga, Ecuador</p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>pablo.herrera0259@utc.edu.ec<br></p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="icofont-phone"></i>
                <h4>Teléfono:</h4>
                <p>0998397454<br></p>
              </div>
            </div>
          </div>

        </div>

      </div>

      <div class="row mt-5 justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
          <form action="{{route('enviar-mensaje')}}" method="post" role="form" class="php-email-form">
            @csrf
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Ingrese un nombre válido" />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder=" Email" data-rule="email" data-msg="Ingrese un correo válido" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Tema" data-rule="minlen:4" data-msg="El tema de contener minímo 8 caracteres" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Escriba un mensaje" placeholder="Mensaje"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Tu mensaje ha siso enviado con exito!</div>

            </div>
            <div class="text-center"><button type="submit">Enviar</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main>

@endsection
