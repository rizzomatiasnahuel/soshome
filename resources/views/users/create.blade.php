@extends("layouts.app");

@section("content")

<div class="container white">
<h1>Nuevo Usuario</h1>
<!--Formulario-->

{!! Form::open(['route' =>'users.store','method' =>'POST'])!!}
	
	<div class="form-group">
		{!! Form::label('name','Name')!!}
		{!! Form::text('name',null, ['class'=>'form-control','placeholder'=>'Nombre ','required'])!!}

	</div>
	<div class="form-group">
		{!! Form::label('apellido','Apellido')!!}
		{!! Form::text('apellido',null, ['class'=>'form-control','placeholder'=>'Apellido','required'])!!}

	</div>
	<div class="form-group">
		{!! Form::label('DNI','DNI')!!}
		{!! Form::text('DNI',null, ['class'=>'form-control','placeholder'=>'DNI','required'])!!}

	</div>
	<div class="form-group">
		{!! Form::label('celular','Celular')!!}
		{!! Form::text('celular',null, ['class'=>'form-control','placeholder'=>'Celular','required'])!!}

	</div>
	<div class="form-group">
		{!! Form::label('GPS','GPS')!!}
		{!! Form::text('GPS',null, ['class'=>'form-control','placeholder'=>'GPS','required'])!!}

	</div>
	<div class="form-group">
		{!! Form::label('certificacion','certificacion')!!}
		{!! Form::text('certificacion',null, ['class'=>'form-control','placeholder'=>'certificacion','required'])!!}

	</div>
	<div class="form-group">
		{!! Form::label('matricula','matricula')!!}
		{!! Form::text('matricula',null, ['class'=>'form-control','placeholder'=>'matricula','required'])!!}

	</div>
	<div class="form-group">
		{!! Form::label('horario_atencion','Horario Atencion')!!}
		{!! Form::text('horario_atencion',null, ['class'=>'form-control','placeholder'=>'Horario Atencion','required'])!!}

	</div>

	
	<div class="form-group">
		{!! Form::label('email','Email')!!}
		{!! Form::email('email',null, ['class'=>'form-control','placeholder'=>'example@gmail.com','required'])!!}

	</div>

	<div class="form-group">
		{!! Form::label('password','Password')!!}
		{!! Form::password('password',['class'=>'form-control','placeholder'=>'**********','required'])!!}

	</div>

	<div class="form-group">
		{!! Form::label('type','Tipo')!!}
		{!! Form::select('type', ['' => 'seleccione un nivel....' , 'MEMBER' => 'MEMBER' , 'ADMIN' => 'Administrador', 'TECNICO' => 'TECNICO' ] , null , ['class' => 'form-control' ])!!}

	</div>
	
	<div class="form-group">
		{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	
		<a href="{{url('/users')}}">
		Regresar al listado  de usuarios
		</a>	
	</div>

		


{!! Form::close()!!}



</div>
@endsection