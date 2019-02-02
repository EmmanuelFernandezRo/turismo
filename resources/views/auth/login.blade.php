@extends('layouts.app')

@section('Titulo-pag', 'Inicio de Sesión')

@section('body-class', 'signup-page')

@section('log-reg')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}"><i class="fa fa-plus-circle"></i>{{ __('Registrarse') }}</a>
    </li>
@endsection

@section('content')
<div class="header header-filter" style="background-image: url('{{asset ('img/city.jpg')}}'); background-size: cover; background-position: top center;">
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
            <div class="card card-signup">
                <form class="form" method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="header header-primary text-center">
                    <i class="fa fa-user fa-2x"></i><br><br>
                        <h4>Inicia Sesión</h4>
                        <div class="social-line">
                        </div>
                    </div>
                    <p class="text-divider"></p>
                    <div class="content">

                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">email</i>
                            </span>
                            <input id="email" type="email"class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Correo electrónico" autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock_outline</i>
                            </span>
                            <input id="password" type="password" placeholder="Contraseña" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="footer text-center">
                        <button type="submit" class="btn btn-primary btn-md">
                                    {{ __('Iniciar sesión') }}
                        </button>
                        @if (Route::has('password.request'))
                            <a class="btn btn-md" href="{{ route('password.request') }}">
                                {{ __('¿Olvidaste tu contraseña?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="http://www.creative-tim.com">
                        Creado por
                    </a>
                </li>
                <li>
                    <a href="http://presentation.creative-tim.com">
                        Acerca de
                    </a>
                </li>
                <li>
                    <a href="http://blog.creative-tim.com">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="http://www.creative-tim.com/license">
                        Licencias
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright pull-right">
            &copy; 2019 <i class="fa fa-map-marker"></i>
        </div>
    </div>
</footer>

</div>
@endsection
