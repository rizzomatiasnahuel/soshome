@extends("layouts.app");

@section("content")

<div class="big-padding text-center blue-grey white-text">
	
<h1>Categorias</h1>
</div>


<div class="container">
<table class="table table-bordered">
	<div class="floating">
	<a href="{{url('/categories/create')}}" class="btn btn-primary btn-fab">
		<i class="material-icons">Agregar</i>
	</a>
	</div>
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			
			<td>Acciones</td>
		</tr>
	</thead>
	<tbody>
		@foreach ($categories as $category)
			<tr>
				<td>{{$category->id}}</td>
				<td>{{$category->name}}</td>
			
			
				<td>
					<a href="{{route('cates.destroy',$category->id)}}" class="btn btn-danger">Eliminar</a>
					<a href="{{route('cates.edit',$category->id)}}" class="btn btn-warning">Editar</a>
				</td>
				
			</tr>
		@endforeach
	</tbody>
</table>

</div>


@endsection