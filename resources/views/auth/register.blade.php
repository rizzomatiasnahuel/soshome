@extends('layouts.app')

@section('content')

<br>
<h3 align="center">
Leer atentamente, <br>
 en el caso de ser Tecnico por favor completar todos los datos, <br>
 con los que cuenten,<br> 
tener en cuenta que  auxiliar auditor de SosHome, <br>
 se estara comunicando con usted a los efectos de validar sus datos. <br>
Desde ya muchas gracias Soshome.com.ar !

</h3>
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
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

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
                                <input id="apellido" type="text" class="form-control" name="apellido">

                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="DNI" class="col-md-4 col-form-label text-md-right">{{ __('DNI') }}</label>

                            <div class="col-md-6">
                                <input id="DNI" type="tel" pattern="[0-9]{1,9}" class="form-control{{ $errors->has('DNI') ? ' is-invalid' : '' }}" name="DNI" value="{{ old('DNI') }}" required autofocus>

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
                                <input id="celular" type="tel"  pattern="[0-9]{1,10}" class="form-control{{ $errors->has('celular') ? ' is-invalid' : '' }}" name="celular" value="{{ old('celular') }}" required autofocus>

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
                                  
                                    <div class="form-group">
                                                <select class="form-control" id="barrio" name="barrio">
                                                <option>No especifica</option>
                                                  <option>Agronomía</option>
                                                  <option>Almagro</option>
                                                  <option>Balvanera</option>
                                                  <option>Barracas</option>
                                                  <option>Belgrano</option>
                                                  <option>Boedo</option>
                                                  <option>Caballito</option>
                                                  <option>Chacarita</option>
                                                  <option>Coghlan</option>
                                                  <option>Colegiales</option>
                                                  <option>Constitución</option>
                                                  <option>Flores</option>
                                                  <option>Floresta</option>
                                                  <option>La Boca</option>
                                                  <option>La Paternal</option>
                                                  <option>Liniers</option>
                                                  <option>Mataderos</option>
                                                  <option>Monte Castro</option>
                                                  <option>Monserrat (originalmente llamado Montserrat).</option>
                                                  <option>Nueva Pompeya</option>
                                                  <option>Núñez</option>
                                                  <option>Palermo</option>
                                                  <option>Parque Avellaneda</option>
                                                  <option>Parque Chacabuco</option>
                                                  <option>Parque Chas</option>
                                                  <option>Parque Patricios</option>
                                                  <option>Puerto Madero</option>
                                                  <option>Recoleta</option>
                                                  <option>Retiro</option>
                                                  <option>Saavedra</option>
                                                  <option>San Cristóbal</option>
                                                  <option>San Nicolás</option>
                                                  <option>San Telmo</option>
                                                  <option>Vélez Sársfield</option>
                                                  <option>Versalles</option>
                                                  <option>Villa Crespo</option>
                                                  <option>Villa del Parque</option>
                                                  <option>Villa Devoto</option>
                                                  <option>Villa General Mitre</option>
                                                  <option>Villa Lugano</option>
                                                  <option>Villa Luro</option>
                                                  <option>Villa Ortúzar</option>
                                                  <option>Villa Pueyrredón</option>
                                                  <option>Villa Real</option>
                                                  <option>Villa Riachuelo</option>
                                                  <option>Villa Santa Rita</option>
                                                  <option>Villa Soldati</option>
                                                  <option>Villa Urquiza</option>
                                                

                                            
                                                </select>
                                            </div>

                                @if ($errors->has('barrio'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('barrio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="GPS" class="col-md-4 col-form-label text-md-right">{{ __('GPS ( Ingresar url )') }}</label>

                            <div class="col-md-6">
                                <input id="GPS" type="url" class="form-control{{ $errors->has('GPS') ? ' is-invalid' : '' }}" name="GPS" value="{{ old('GPS') }}" >

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
                                <input id="certificacion" type="text" class="form-control{{ $errors->has('certificacion') ? ' is-invalid' : '' }}" name="certificacion" value="{{ old('certificacion') }}" >

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
                                <input id="matricula" type="text" class="form-control{{ $errors->has('matricula') ? ' is-invalid' : '' }}" name="matricula" value="{{ old('matricula') }}" >

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
                            {!! Form::select('type', ['' => 'seleccione un nivel....' , 'MEMBER' => 'MEMBER' ,  'TECNICO' => 'TECNICO' ] , null , ['class' => 'form-control' ])!!}

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


                            <div class="form-group">
                                        <select class="form-control" id="horario_atencion" name="horario_atencion">
                                        <option>Turno Mañana 6 a 14 hs.</option>
                                        <option>Turno Tarde  14 a 20 hs.</option>
                                        <option>Turno Noche 20 a 12 hs.</option>
                                        <option>Turno Madrugada 12 a 6 hs.</option>
                                        <option>No especifica a Coordinar</option>
                                        <option>Sin detalle</option>

                                      
                                        </select>
                                    </div>



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
