@extends("layouts.app");

@section("content")

<div class="container white">
<h1>Nuevo Tag</h1>
<!--Formulario-->

{!! Form::open(['route' =>'tags.store','method' =>'POST'])!!}
	
	<div class="form-group">
		{!! Form::label('name','Name')!!}
		{!! Form::text('name',null, ['class'=>'form-control','placeholder'=>'Nombre Completo','required'])!!}

	</div>

	
	
	
	<div class="form-group">
		{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	
		<a href="{{url('/tags')}}">
		Regresar al listado  de tags
		</a>	
	</div>

		


{!! Form::close()!!}



</div>
@endsection