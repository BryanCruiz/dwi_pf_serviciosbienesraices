<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/jumbotron/">





<link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded" style="margin: 50px auto; max-width: 600px background-color: #000">
        @auth
        <h1 style="text-align: center; margin-bottom: 20px;">SERVICIOS DE BIENES RAÍCES</h1>
        <p class="lead" style="text-align: center; margin-bottom: 20px;">Solo usuarios ya autentificados pueden acceder correctamente a esta sesión</p>
        <div style="text-align: center;">
            <a class="btn btn-lg btn-success" href="{{ route('home.index') }}" role="button">Ver más</a>
        </div>
        @endauth

        @guest
        <h1 style="text-align: center; margin-bottom: 20px; ">SERVICIOS DE BIENES RAÍCES</h1>
        <p class="lead" style="text-align: center; margin-bottom: 20px;">Explora nuestro sitio hoy mismo y comienza tu viaje hacia la propiedad de tus sueños. ¡Estamos aquí para convertir tus sueños en realidad!</p>



<main>
    <div class="container py-4">
      <header class="pb-3 mb-4 border-bottom">
      </header>

      <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
          <h1 class="display-5 fw-bold">¿Buscas comprar, vender o alquilar una propiedad?</h1>
          <p class="col-md-8 fs-4">¡Estamos aquí para ayudarte!
            En nuestros catalógos, somos tu socios confiables en el mundo de los bienes raíces. Con años de experiencia en el mercado, nos enorgullecemos de ofrecer un servicio personalizado y profesional para satisfacer todas tus necesidades inmobiliarias..</p>
          <button class="btn btn-primary btn-lg" type="button">Ver Catalógo</button>
        </div>
      </div>


      <footer class="pt-3 mt-4 text-muted border-top">
        &copy; 2024
      </footer>
    </div>
  </main>




        @endguest
    </div>
@endsection
