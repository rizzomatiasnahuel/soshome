@extends("layouts.app");

@section("content")
<script src="{{ asset('public/js/main.js') }}"></script>

<div class="big-padding text-center blue-grey white-text">
	
<h1>Carrito</h1>
</div>
<div class="container "style=" background: black; color: white; "  >
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

<div class="row">
  <div class="col-md-2" align="center" ></div>
  <div class="col-md-8" align="center" ><table class="table  table-responsive   "      >

<div class="floating" align="center" > 
 <p>
 
<a href="{{url('/')}}" class="btn btn-primary btn-fab">
	<i class="material-icons">Seguir Comprando</i>
</a>

<a  href="{{route('cart-trash')}}" class="btn btn-danger btn-fab" >
	<i class="material-icons">Vaciar el Carrito</i>
</a>

<a href="{{route('order-detail')}}" class="btn btn-primary btn-fab">
	<i class="material-icons">Continuar</i>
</a>


</p>
</div>

<thead style=" background: black; color: white;   " class="center" >
	<tr>
		<td>Titulo</td>
		<td>Categoria</td>
		<td>Precio</td>
		<td>Cantidad
		<br> 
		(1 al 10) </td>
		<td>Subtotal</td>    
		<td>Quitar</td>
		
	</tr>
</thead>
<tbody style=" background: black; color: white;" >
	@foreach ($cart as $item)
		<tr>
			<td>{{$item->title}}</td>
			<td>{{$item->category->name }}</td>
			<td>{{number_format ($item->pricing, 2 )}}</td>
			<td >
		{!! Form::open(['route' =>'cart-update','method' =>'POST'])!!}
			
			<div class="form-group">
			<input type="number" name="quantity"
						min="1"
						max="10"
						value="{{$item->quantity}}"		
						id="article_{{$item->id}}"
				>
				{!! Form::hidden('id',$item->id)!!}
				{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			</div>

		{!! Form::close()!!}



		<!-- 		<input type="number"
						min="1"
						max="100"
						value="{{$item->quantity}}"		
						id="article_{{$item->id}}"
				>
				<a href="{{route('cart-update', ['id' => $item->id, 'quantity' => $item->quantity] )}}"
					class="btn btn-warning btn-update-item"
					data-href="{{route('cart-update', ['id' => $item->id, 'quantity' => $item->quantity])}}"
					data-id="{{$item->id}}"
				
				>
				<i class="fa fa-refresh">Refresh</i>
				
				</a>
		
		 -->	</td>
			
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
</div>
  <div class="col-md-2" align="center" ></div>
</div>





@endsection