@extends("layouts.app");

@section("content")

<div class="container text-center">
	<div class="card product text-center">
		
	@if(Auth::check() && $products->user_id == Auth::user()->id)
			<div class="row">

			<div  class="col-sm-6 col-xs-12" >
				<a class="btn btn-info btn-sm "
				 href="{{url('/products/'.$products->id.'/edit')}}"> Editar</a>
				</div>	
					<!--<a href="{{url('/products/'.$products->id.'/delete')}}"> Eliminar</a>-->	
			<div class="col-sm-6 col-xs-12">	
				@include("products.delete",['products'=> $products])
			</div>
			</div>
	@endif
		<h1>{{$products->title}}</h1>
		<p><--------------------------------------------></p>
		<br>
		<div class="row">
			<div class="col-sm-6 col-xs-12"></div>
			<div class="col-sm-6 col-xs-12">
			<p>
				<strong>Descripcion</strong>
			</p>			
			<p>
				{{$products->descríption}}
			</p>
			<a href="" class="btn btn-success" > Agregar al carrito</a>

		</div>
		</div>
		<br>
	</div>
</div>

@endsection