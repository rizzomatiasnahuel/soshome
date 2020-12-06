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
		{!! Form::label('email','Email')!!}
		{!! Form::email('email',$user->email, ['class'=>'form-control','placeholder'=>'example@gmail.com','required'])!!}

	</div>

	


	
	<div class="form-group">
		{!! Form::submit('Editar',['class'=>'btn btn-primary'])!!}
	
		<a href="{{url('/home')}}">
		Regresar al listado  de usuarios
		</a>	
	</div>

		


{!! Form::close()!!}



</div>
@endsection