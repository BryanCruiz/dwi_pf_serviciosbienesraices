
@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded" style="margin: 50px auto; max-width: 600px background-color: #000F">
        @auth
        <h1 style="text-align: center; margin-bottom: 20px;">SERVICIOS DE BIENES RAÍCES</h1>
        <p class="lead" style="text-align: center; margin-bottom: 20px;">Solo usuarios ya autentificados pueden acceder correctamente a esta sesión</p>
        <div style="text-align: center;">
            <a class="btn btn-lg btn-success" href="https://codeanddeploy.com" role="button">Ver más</a>
        </div>
        @endauth

        @guest
        <h1 style="text-align: center; margin-bottom: 20px; ">SERVICIOS DE BIENES RAÍCES</h1>
        <p class="lead" style="text-align: center; margin-bottom: 20px;">Explora nuestro sitio hoy mismo y comienza tu viaje hacia la propiedad de tus sueños. ¡Estamos aquí para convertir tus sueños en realidad!</p>
        @endguest
    </div>
@endsection
