@extends("layouts.app");

@section("content")


<script src="{{ asset('public/js/main.js') }}"></script>

<div class="big-padding text-center blue-grey white-text">
	
<h1>Detalle de Orden</h1>
</div>
<div class="container" style=" background: black; color: white;" >

		<table class="table table-bordered">

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
						<td>Precio</td>   
						<td>Cantidad</td>
						<td>Articulo</td>
						<td>Categoria</td>
                        <td>Precio</td>
						
					</tr>
				</thead>
							<tbody style=" background: black; color: white;" >
								@foreach ($ordenitem as $item)
									<tr>
										<td>{{$item->id}}</td>
										<td>{{$item->pricing}}</td>
										<td>{{$item->quantity}}</td>
										<td>{{$item->product_id }}</td>
										<td>awd</td>
										<td>
										
										{{number_format( $item->pricing * $item->quantity, 2 )}}
										
										
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