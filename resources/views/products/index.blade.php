@extends("layouts.app");

@section("content")

<div class="big-padding text-center blue-grey white-text">
	
<h1>Productos</h1>
</div>


<div class="container">
<table class="table table-bordered">
	<div class="floating">
	<a href="{{url('/products/create')}}" class="btn btn-primary btn-fab">
		<i class="material-icons">Agregar</i>
	</a>
	</div>
	<thead>
		<tr>
			<td>ID</td>
			<td>Titulo</td>
			<td>Descripcion</td>
			<td>Precio</td>
			<td>Acciones</td>
		</tr>
	</thead>
	<tbody>
		@foreach ($products as $product)
			<tr>
				<td>{{$product->id}}</td>
				<td>{{$product->title}}</td>
				<td>{{$product->descríption}}</td>
				<td>{{$product->pricing}}</td>
				<td>
					<a class="btn btn-info btn-sm " href="{{url('/products/'.$product->id.'/edit')}}"> Editar</a>
					<br>
					<!--<a href="{{url('/products/'.$product->id.'/delete')}}"> Eliminar</a>-->	
					@include("products.delete",['products'=> $product])
				</td>
				
			</tr>
		@endforeach
	</tbody>
</table>

{!! $products->render() !!}
</div>


@endsection