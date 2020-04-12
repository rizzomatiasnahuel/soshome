@extends("layouts.app");

@section("content")

<div class="container white">
<h1>Editar Articulo</h1>
<!--Formulario-->

{!! Form::open(['route' => ['articlesu.update',  $articles] ,'method' =>'PUT'])!!}


	
	<div class="form-group">
		{!! Form::label('title','Titulo')!!}
		{!! Form::text('title', $articles->title , ['class'=>'form-control','placeholder'=>'Titulo del articulo','required'])!!}

	</div>

			
			<div class="form-group">
		  {!!Form::label('category_id', 'Categoria')!!}
		  {!!Form::select('category_id', $categories, $articles->category->id , ['class'=>'form-control','placeholder'=>'Seleccione una opcion','required'])!!}
		</div>

		<div class="form-group">
		  {!!Form::label('content', 'Contenido')!!}
		  {!!Form::textarea('content',$articles->content, ['class'=>'form-control','placeholder'=>'Descripcion','required'])!!}
		</div>


	<div class="form-group">
		  {!!Form::label('tags', 'Tags')!!}
		  {!!Form::select('tags[]', $tags,  $articles->category->id , ['class'=>'form-control','multiple','required'])!!}
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