@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">inicio de sesión</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="form-group">
                                <input id="email" placeholder="correo" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            </div>
                            <div class="form-group">
                                <input id="password" placeholder="contraseña" type="password" class="form-control" name="password" value="" required>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="Remember Me" name="remember" {{ old('remember') ? 'checked' : '' }}>recordar sesión
                                </label>
                            </div>
                            <button type="submit" class="btn btn-lg btn-primary btn-block">ingresar</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
