@extends('layouts.app')

@section('content')

<br>

<br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" >
                <div class="card-header" style=" background: black; color: white; " >{{ __('Register') }}</div>

                <div class="card-body" style=" background: black; color: white; ">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="apellido" class="col-md-4 col-form-label text-md-right">{{ __('apellido') }}</label>

                            <div class="col-md-6">
                                <input id="apellido" type="text" class="form-control{{ $errors->has('apellido') ? ' is-invalid' : '' }}" name="apellido" value="{{ old('apellido') }}" required autofocus>

                                @if ($errors->has('apellido'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('apellido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="DNI" class="col-md-4 col-form-label text-md-right">{{ __('DNI') }}</label>

                            <div class="col-md-6">
                                <input id="DNI" type="text" class="form-control{{ $errors->has('DNI') ? ' is-invalid' : '' }}" name="DNI" value="{{ old('DNI') }}" required autofocus>

                                @if ($errors->has('DNI'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('DNI') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="celular" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>

                            <div class="col-md-6">
                                <input id="celular" type="text" class="form-control{{ $errors->has('celular') ? ' is-invalid' : '' }}" name="celular" value="{{ old('celular') }}" required autofocus>

                                @if ($errors->has('celular'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('celular') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="barrio" class="col-md-4 col-form-label text-md-right">{{ __('Barrio') }}</label>

                            <div class="col-md-6">
                                <input id="barrio" type="text" class="form-control{{ $errors->has('barrio') ? ' is-invalid' : '' }}" name="barrio" value="{{ old('barrio') }}" required autofocus>

                                @if ($errors->has('barrio'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('barrio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="GPS" class="col-md-4 col-form-label text-md-right">{{ __('GPS') }}</label>

                            <div class="col-md-6">
                                <input id="GPS" type="text" class="form-control{{ $errors->has('GPS') ? ' is-invalid' : '' }}" name="GPS" value="{{ old('GPS') }}" required autofocus>

                                @if ($errors->has('GPS'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('GPS') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="certificacion" class="col-md-4 col-form-label text-md-right">{{ __('Certificacion') }}</label>

                            <div class="col-md-6">
                                <input id="certificacion" type="text" class="form-control{{ $errors->has('certificacion') ? ' is-invalid' : '' }}" name="certificacion" value="{{ old('certificacion') }}" required autofocus>

                                @if ($errors->has('certificacion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('certificacion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="matricula" class="col-md-4 col-form-label text-md-right">{{ __('Matricula') }}</label>

                            <div class="col-md-6">
                                <input id="matricula" type="text" class="form-control{{ $errors->has('matricula') ? ' is-invalid' : '' }}" name="matricula" value="{{ old('matricula') }}" required autofocus>

                                @if ($errors->has('matricula'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('matricula') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de Usuario') }}</label>

                            <div class="col-md-6">
                            {!! Form::select('type', ['' => 'seleccione un nivel....' , 'menber' => 'Miembro' ,  'tecnico' => 'Tecnico' ] , null , ['class' => 'form-control' ])!!}

                                @if ($errors->has('type'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="horario_atencion" class="col-md-4 col-form-label text-md-right">{{ __('Horario Atencion') }}</label>

                            <div class="col-md-6">
                                <input id="horario_atencion" type="text" class="form-control{{ $errors->has('horario_atencion') ? ' is-invalid' : '' }}" name="horario_atencion" value="{{ old('horario_atencion') }}" required autofocus>

                                @if ($errors->has('horario_atencion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('horario_atencion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
