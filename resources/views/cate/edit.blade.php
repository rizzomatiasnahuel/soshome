@extends("layouts.app");

@section("content")

<div class="container white">
<h1>Editar Categorias</h1>
<!--Formulario-->

{!! Form::open(['route' => ['cate.update', $category],'method' =>'PUT'])!!}
	
	<div class="form-group">
		{!! Form::label('name','Nombre')!!}
		{!! Form::text('name',$category->name, ['class'=>'form-control','placeholder'=>'Nombre Completo','required'])!!}

	</div>

	
	<div class="form-group">
		{!! Form::submit('Editar',['class'=>'btn btn-primary'])!!}
	
		<a href="{{url('/cate')}}">
		Regresar al listado  de usuarios
		</a>	
	</div>

		


{!! Form::close()!!}



</div>
@endsection