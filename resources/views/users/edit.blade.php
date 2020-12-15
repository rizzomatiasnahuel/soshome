@extends("layouts.app");

@section("content")

<div class="container white">
<h1>Editar Usuario</h1>
<!--Formulario-->

{!! Form::open(['route' => ['users.update', $user],'method' =>'PUT'])!!}
	
	<div class="form-group">
		{!! Form::label('name','Name')!!}
		{!! Form::text('name',$user->name, ['class'=>'form-control','placeholder'=>'Nombre Completo','required'])!!}

	</div>
	<div class="form-group">
		{!! Form::label('apellido','Apellido')!!}
		{!! Form::text('apellido',$user->apellido, ['class'=>'form-control','placeholder'=>'Apellido','required'])!!}

	</div>
	<div class="form-group">
		{!! Form::label('DNI','DNI')!!}
		{!! Form::text('DNI',$user->DNI, ['class'=>'form-control','placeholder'=>'DNI','required'])!!}

	</div>
	<div class="form-group">
		{!! Form::label('celular','Celular')!!}
		{!! Form::text('celular',$user->celular, ['class'=>'form-control','placeholder'=>'Celular','required'])!!}

	</div>
	<div class="form-group">
		{!! Form::label('GPS','GPS')!!}
		{!! Form::text('GPS',$user->GPS, ['class'=>'form-control','placeholder'=>'GPS','required'])!!}

	</div>
	<div class="form-group">
		{!! Form::label('certificacion','certificacion')!!}
		{!! Form::text('certificacion',$user->certificacion, ['class'=>'form-control','placeholder'=>'certificacion','required'])!!}

	</div>
	<div class="form-group">
		{!! Form::label('matricula','matricula')!!}
		{!! Form::text('matricula',$user->matricula, ['class'=>'form-control','placeholder'=>'matricula','required'])!!}

	</div>
	<div class="form-group">
		{!! Form::label('horario_atencion','Horario Atencion')!!}
		{!! Form::text('horario_atencion',$user->horario_atencion, ['class'=>'form-control','placeholder'=>'Horario Atencion','required'])!!}

	</div>
	
	<div class="form-group">
		{!! Form::label('email','Email')!!}
		{!! Form::email('email',$user->email, ['class'=>'form-control','placeholder'=>'example@gmail.com','required'])!!}

	</div>

	

	<div class="form-group">
		{!! Form::label('type','Tipo')!!}
		{!! Form::select('type',['' => 'seleccione un nivel....' , 'MEMBER' => 'MEMBER' , 'ADMIN' => 'Administrador', 'TECNICO' => 'TECNICO'] , $user->type , ['class' => 'form-control' ])!!}

	</div>
	
	<div class="form-group">
		{!! Form::submit('Editar',['class'=>'btn btn-primary'])!!}
	
		<a href="{{url('/users')}}">
		Regresar al listado  de usuarios
		</a>	
	</div>

		


{!! Form::close()!!}



</div>
@endsection