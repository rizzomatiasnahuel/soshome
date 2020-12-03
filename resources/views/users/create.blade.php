@extends("layouts.app");

@section("content")

<div class="container white">
<h1>Nuevo Usuario</h1>
<!--Formulario-->

{!! Form::open(['route' =>'users.store','method' =>'POST'])!!}
	
	<div class="form-group">
		{!! Form::label('name','Name')!!}
		{!! Form::text('name',null, ['class'=>'form-control','placeholder'=>'Nombre Completo','required'])!!}

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
		{!! Form::select('type', ['' => 'seleccione un nivel....' , 'menber' => 'Miembro' , 'admin' => 'Administrador', 'tecnico' => 'Tecnico' ] , null , ['class' => 'form-control' ])!!}

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