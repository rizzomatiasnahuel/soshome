@extends("layouts.app");

@section("content")

<div class="big-padding text-center blue-grey white-text">
	
<h1>Articulos</h1>
</div>
<div class="container">
	<!-- Buscador de articulos-->
		<form action="{{ url('/searchArticles') }}" method="GET">
						<div class="input-group" >
							<input type="searchArticles" name="searchArticles" class="form-control">
							<span class="input-group-prepend">
								<button type="submit" class="btn btn-primary">Search</button>
								
							</span>		


						</div>
					
				</form>
				<!--  Fin del Buscador de articulos-->
<table class="table table-bordered">
	<div class="floating">
	<a href="{{url('/articlesu/create')}}" class="btn btn-primary btn-fab">
		<i class="material-icons">Agregar</i>
	</a>
	</div>
	<thead>
		<tr>
			<td>ID</td>
			<td>Titulo</td>
			<td>Categoria</td>
			<td>Precio</td>

			<td>User</td>
			<td>Acciones</td>
		</tr>
	</thead>
	<tbody>
		@foreach ($articles as $article)
			<tr>
				<td>{{$article->id}}</td>
				<td>{{$article->title}}</td>
				<td>{{$article->category->name}}</td>
				<td>{{$article->pricing}}</td>	

				<td>{{$article->user->name}}</td>
				<td>
					<a href="{{route('articlesu.destroy',$article->id)}}" class="btn btn-danger">Eliminar</a>
					<a href="{{route('articlesu.edit',$article->id)}}" class="btn btn-warning">Editar</a>
					
				</td>
				
			</tr>
		@endforeach
	
	</tbody>
</table>


</div>





@endsection