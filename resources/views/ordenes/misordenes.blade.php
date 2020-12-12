@extends("layouts.app");

@section("content")


<script src="{{ asset('public/js/main.js') }}"></script>

<div class="big-padding text-center blue-grey white-text">
	
<h1>Mis Ordenes Realizadas</h1>
</div>
<div class="container" style=" background: black; color: white;" >

		<table class="table table-bordered table-responsive">

			<div class="floating" align="center"> 
			<p>
			
			<a href="{{url('/')}}" class="btn btn-primary btn-fab">
				<i class="material-icons">Seguir Comprando</i>
			</a>
		
			
			</p>
			</div>
				<thead style=" background: black; color: white;" >
					<tr>
						<td>id</td>
						<td>Fecha</td>
						<td>Subtotal</td>
						<td>Envio</td>
						<td>Total</td>
						<td>Detalle de Orden</td>    	  
					
						
					</tr>
				</thead>
							<tbody style=" background: black; color: white;" >
								@foreach ($orders as $order)
									<tr>
										<td>{{$order->id}}</td>
										<td>{{$order->updated_at}}</td>
										<td>{{$order->subtotal}}</td>
										
										<td>{{$order->shipping}}</td>
										<td>
										{{number_format( $order->subtotal + $order->shipping, 2 )}}
										
										
										</td>
										<td>
										<a href="{{route('detalledesordenes',$order->id)}}" class="btn btn">Ver Mas</a>
										</td>
										
									</tr>
								@endforeach
							</tbody>
										
						
											
										</td>
									
								</tr>
							
						
						</tbody>
		</table>



</div>




@endsection