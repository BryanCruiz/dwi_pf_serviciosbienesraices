@extends('layouts.auth-master')

@section('content')
    <form method="post" action="{{ route('register.perform') }}" style="max-width: 400px; margin: 0 auto;">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <img class="mb-4" src="{!! url('./images/bienes.jpg') !!}" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal" style="text-align: center;">Registrar</h1>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="nombre" required="required" autofocus>
            <label for="floatingName">Nombre</label>
            @if ($errors->has('name'))
                <span class="text-danger text-left">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="nombre@ejemplo.com" required="required" autofocus>
            <label for="floatingEmail">Correo electronico</label>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Nombre de usuario" required="required" autofocus>
            <label for="floatingName">Nombre de usuario</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Contraseña" required="required">
            <label for="floatingPassword">Contraseña</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirmar contraseña" required="required">
            <label for="floatingConfirmPassword">Confirmar contraseña</label>
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-success" type="submit">Registrar</button>

        <a class="w-100 btn btn-lg btn-dark mt-2" href="{{ route('home.index')}}" style="display: block; text-align: center;">Regresar</a>

        @include('auth.partials.copy')
    </form>
@endsection
