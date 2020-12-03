@extends("layouts.app");

@section("content")
<script src="{{ asset('public/js/main.js') }}"></script>

<div class="big-padding text-center blue-grey white-text">
	
<h1>Detalle de Orden</h1>
</div>
<div class="container">
@if(count($cart))

<table class="table table-bordered">

	
				

	<div class="page " >
	<h2>Datos del Usuario</h2>
		<div class="table-responsive" style="text-align:center; background: black; color: white;"  >
						<div class="big-padding text-center " >

							

							<tr><td  style="text-align:center; background: black; color: white;" >Id:</td><td  style="text-align:center; background: black; color: white;">{{Auth::user()->id}}</tr>
							<tr><td  style="text-align:center; background: black; color: white;" >Nombre:</td><td  style="text-align:center; background: black; color: white;">{{Auth::user()->name}}</tr>	
							<tr><td  style="text-align:center; background: black; color: white;" >Email:</td><td  style="text-align:center; background: black; color: white;">{{Auth::user()->email}}</tr>		
				
				

						</div>
		</div>
	</div>


</table>
<table class="table table-bordered">
<div class="page ">
	<h2>Datos del Pedido</h2>

</table>

<table class="table table-bordered" style=" background: black; color: white;">

	
	<thead>
		<tr>
			<td>N</td>
			<td>Titulo</td>
			<td>Categoria</td>
			<td>Precio</td>
            <td>Cantidad</td>
            <td>Subtotal</td>    
			
		</tr>
	</thead>
	<tbody>
		@foreach ($cart as $item)
			<tr>
				<td>{{$item->id}}</td>
				<td>{{$item->title}}</td>
				<td>{{$item->category->name }}</td>
                <td>{{number_format ($item->pricing, 2 )}}</td>
				<td >{{$item->quantity}}</td>
                <td>{{number_format( $item->pricing * $item->quantity, 2 )}}</td>
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
<div class="floating" align="center"> 
	 <p>
     
    <a href="{{url('/')}}" class="btn btn-primary btn-fab">
		<i class="material-icons">Seguir Comprando</i>
	</a>
    
    <a  href="{{route('cart-trash')}}" class="btn btn-danger btn-fab" >
		<i class="material-icons">Vaciar el Carrito</i>
	</a>
    
    <a href="{{route('payment')}}" class="btn btn-primary btn-fab">
		<i class="material-icons">Continuar</i>
	</a>


</div>





@endsection