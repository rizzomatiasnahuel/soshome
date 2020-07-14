@extends("layouts.app");

@section("content")
<script src="{{ asset('public/js/main.js') }}"></script>

<div class="big-padding text-center blue-grey white-text">
	
<h1>Carrito</h1>
</div>
<div class="container">
@if(count($cart))
	<!-- Buscador de articulos-->
		<!-- <form action="{{ url('/searchArticles') }}" method="GET">
						<div class="input-group" >
							<input type="searchArticles" name="searchArticles" class="form-control">
							<span class="input-group-prepend">
								<button type="submit" class="btn btn-primary">Search</button>
								
							</span>		


						</div>
					
				</form> -->
				<!--  Fin del Buscador de articulos-->
<table class="table table-bordered">

	<div class="floating" align="center"> 
	 <p>
     
    <a href="{{url('/')}}" class="btn btn-primary btn-fab">
		<i class="material-icons">Seguir Comprando</i>
	</a>
    
    <a  href="{{route('cart-trash')}}" class="btn btn-danger btn-fab" >
		<i class="material-icons">Vaciar el Carrito</i>
	</a>
    
    <a href="{{route('cart-trash')}}" class="btn btn-primary btn-fab">
		<i class="material-icons">Continuar</i>
	</a>
    
    
    </p>
	</div>
	<thead>
		<tr>
			<td>Titulo</td>
			<td>Categoria</td>
			<td>Precio</td>
            <td>Cantidad</td>
            <td>Subtotal</td>    
			<td>Quitar</td>
			
		</tr>
	</thead>
	<tbody>
		@foreach ($cart as $item)
			<tr>
				<td>{{$item->title}}</td>
				<td>{{$item->category->name }}</td>
                <td>{{number_format ($item->pricing, 2 )}}</td>
				<td >
					<input type="number"
						    min="1"
							max="100"
							value="{{$item->quantity}}"		
							id="article_{{$item->id}}"
					>
					<a href="{{route('cart-update',$item->id  )}}"
						class="btn btn-warning btn-update-item"
						data-href="{{route('cart-update', $item->id)}}"
						data-id="{{$item->id}}"
					
					>
					<i class="fa fa-refresh">Refresh</i>
					
					</a>
    		
				</td>
				
                <td>{{number_format( $item->pricing * $item->quantity, 2 )}}</td>
					
				<td>
					
					<a href="{{route('cart-destroy', $item->id) }}" class="btn btn-danger">quitar</a>
					
				</td>
				
			</tr>
		@endforeach
	
	</tbody>
</table>
    <hr>
        <h3><span class="label labe-succes">
                Total: ${{number_format($total,2) }}
            </span>
        </h3>
@else
    <h3><span class="label label-warning">No hay Productos en el carrito</span></h3>
@endif



</div>





@endsection