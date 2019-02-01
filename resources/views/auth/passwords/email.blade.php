@extends('layouts.app')

@section('Titulo-pag', 'Recuperar Contraseña')

@section('body-class', 'signup-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{asset ('img/city.jpg')}}'); background-size: cover; background-position: top center;">
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
            <div class="card card-signup">
                <form class="form" method="POST"  action="{{ route('password.email') }}">
                @csrf
                    <div class="header header-primary text-center">
                        <i class="fa fa-envelope-square fa-2x"></i><br><br>
                        <h4>¡Recuperar Contraseña!</h4>
                        <div class="social-line">
                        <p class="text-divider"></p>
                        </div>
                    </div>
                    <div class="content">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">email</i>
                            </span>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="footer text-center">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Enviar Reseteo de Contraseña') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
