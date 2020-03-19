@extends("layouts.app");

@section("content")

<div class="container white">
<h1>Agregar Categoria</h1>
<!--Formulario-->

{!! Form::open(['route' =>'cate.store','method' =>'POST'])!!}
	
	<div class="form-group">
		{!! Form::label('name','Nombre')!!}
		{!! Form::text('name',null, ['class'=>'form-control','placeholder'=>'Nombre Categoria','required'])!!}

	</div>

	
	<div class="form-group">
		{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	
		<a href="{{url('/cate')}}">
		Regresar al listado  de Categorias
		</a>	
	</div>

		


{!! Form::close()!!}



</div>
@endsection