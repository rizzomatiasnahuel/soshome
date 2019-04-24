@extends("layouts.app");

@section("content")

<div class="container white">
<h1>Editar Tag</h1>
<!--Formulario-->

{!! Form::open(['route' => ['tags.update', $tag],'method' =>'PUT'])!!}
	
	<div class="form-group">
		{!! Form::label('name','Nombre')!!}
		{!! Form::text('name',$tag->name, ['class'=>'form-control','placeholder'=>'Nombre Completo','required'])!!}

	</div>

	
	
	<div class="form-group">
		{!! Form::submit('Editar',['class'=>'btn btn-primary'])!!}
	
		<a href="{{url('/tags')}}">
		Regresar al listado  de tag
		</a>	
	</div>

		


{!! Form::close()!!}



</div>
@endsection