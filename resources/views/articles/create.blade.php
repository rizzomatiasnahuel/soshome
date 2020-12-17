@extends("layouts.app");

@section("content")

<div class="container white">
<h1>Agregar Articulos y Servicios</h1>
<!--Formulario-->

{!! Form::open(['route' =>'articles.store','method' =>'POST', 'files'=>true ])!!}
	
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

		<div id="pricing" class="form-group">
		{!! Form::label('pricing','Precio')!!}
		{{Form::number('pricing',null,['class' => 'form-control', 'placeholder' => 'Precio de tu producto  en centavos  de dolar...' ]) }}
		</div>


		
			
		

		<div class="form-group">
		  {!!Form::label('content', 'Contenido')!!}
		  {!!Form::textarea('content',null, ['class'=>'form-control','placeholder'=>'Descripcion','required'])!!}
		</div>


	<div class="form-group"  >
		  {!!Form::label('tags', 'Tags')!!}
		  {!!Form::select('tags[]', $tags,null, ['class'=>'form-control','multiple','required','size' => 12])!!}
		</div>
<br>
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