@extends("layouts.app");

@section("content")

<div class="container white">
<h1>Editar Articulo</h1>
<!--Formulario-->

{!! Form::open(['route' => ['articles.update',  $articles] ,'method' =>'PUT'])!!}


	
	<div class="form-group">
		{!! Form::label('title','Titulo')!!}
		{!! Form::text('title', $articles->title , ['class'=>'form-control','placeholder'=>'Titulo del articulo','required'])!!}

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

			{{Form::number('pricing',$articles->pricing,['class' => 'form-control', 'placeholder' => 'Precio de tu producto  en centavos  de dolar...' ]) }}
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
	
		<a href="{{url('/articles')}}">
		Regresar al listado  de articulos
		</a>	
	</div>

		


{!! Form::close()!!}



</div>
@endsection