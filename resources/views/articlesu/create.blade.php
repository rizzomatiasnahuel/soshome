@extends("layouts.app");

@section("content")

<div class="container white">
<h1>Agregar Articulo</h1>
<!--Formulario-->

{!! Form::open(['route' =>'articlesu.store','method' =>'POST', 'files'=>true ])!!}
	
	<div class="form-group">
		{!! Form::label('title','Titulo')!!}
		{!! Form::text('title',null, ['class'=>'form-control','placeholder'=>'Titulo del articulo','required'])!!}

	</div>

			
	<div>
			<select id="id" name="category_id" class="form-control">
				<option>------Seleccionar------</option>
				@foreach($categories as $categories)
				<option value="{{ $categories['id'] }}">{{ $categories['name'] }}</option>
				@endforeach
		</select>
			
			
	</div>

		<div class="form-group">
		  {!!Form::label('content', 'Contenido')!!}
		  {!!Form::textarea('content',null, ['class'=>'form-control','placeholder'=>'Descripcion','required'])!!}
		</div>


	<div class="form-group">
		  {!!Form::label('tags', 'Tags')!!}
		  {!!Form::select('tags[]', $tags,null, ['class'=>'form-control','multiple','required'])!!}
		</div>

			<div class="form-group">
		{!! Form::label('image','Imagen')!!}
		{!! Form::file('image')!!}

	</div>


	<div class="form-group">
		{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	
		<a href="{{url('/articlesu')}}">
		Regresar al listado  de articulos
		</a>	
	</div>

		


{!! Form::close()!!}



</div>
@endsection