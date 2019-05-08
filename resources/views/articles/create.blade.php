@extends("layouts.app");

@section("content")

<div class="container white">
<h1>Agregar Articulo</h1>
<!--Formulario-->

{!! Form::open(['route' =>'articles.store','method' =>'POST', 'files'=>true ])!!}
	
	<div class="form-group">
		{!! Form::label('title','Titulo')!!}
		{!! Form::text('title',null, ['class'=>'form-control','placeholder'=>'Titulo del articulo','required'])!!}

	</div>

			
			<div class="form-group">
		  {!!Form::label('category_id', 'Categoria')!!}
		  {!!Form::select('category_id', $categories,null, ['class'=>'form-control','placeholder'=>'Seleccione una opcion','required'])!!}
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
	
		<a href="{{url('/articles')}}">
		Regresar al listado  de articulos
		</a>	
	</div>

		


{!! Form::close()!!}



</div>
@endsection