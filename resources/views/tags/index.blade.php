@extends("layouts.app");

@section("content")

<div class="big-padding text-center blue-grey white-text">
	
<h1>Tags</h1>
</div>


<div class="container">
	<!-- Buscador de Tags-->
		<form action="{{ url('/search') }}" method="GET">
						<div class="input-group" >
							<input type="search" name="search" class="form-control">
							<span class="input-group-prepend">
								<button type="submit" class="btn btn-primary">Search</button>
								
							</span>		


						</div>
					
				</form>
				<!--  Fin del Buscador de Tags-->
<table class="table table-bordered">
		
		<a href="{{url('/tags/create')}}" class="btn btn-primary btn-fab">
			<i class="material-icons">Agregar</i>
		</a>
			
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
		
			<td>Acciones</td>
		</tr>
	</thead>
	<tbody>
		@foreach ($tags as $tag)
			<tr>
				<td>{{$tag->id}}</td>
				<td>{{$tag->name}}</td>
		
			
				<td>
					<a href="{{route('tags.destroy',$tag->id)}}" class="btn btn-danger">Eliminar</a>
					<a href="{{route('tags.edit',$tag->id)}}" class="btn btn-warning">Editar</a>
				</td>
				
			</tr>
		@endforeach
	</tbody>
</table>


</div>


@endsection