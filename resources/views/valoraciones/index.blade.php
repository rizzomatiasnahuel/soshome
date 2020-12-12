@extends("layouts.app");

@section("content")


<script src="{{ asset('public/js/main.js') }}"></script>

<div class="big-padding text-center blue-grey white-text">
	
<h1>Mis Valoraciones</h1>
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
						<td>Total</td>
                        <td>Puntaje</td>

						<td>Detalle de Orden</td>
                        <td>Dar Puntaje ( 1 al 10)</td>     	  
					
						
					</tr>
				</thead>
							<tbody style=" background: black; color: white;" >
								@foreach ($orders as $order)
									<tr>
										<td>{{$order->id}}</td>
										<td>{{$order->updated_at}}</td>
									
										<td>
										{{number_format( $order->subtotal + $order->shipping, 2 )}}
										<td>
                                        @php 
                                             $valoracion = \App\valoracion::where("order_id","=",$order->id)->pluck("puntaje")->last();

											@endphp
											{{preg_replace("/\((.*?)\)/i", "", $valoracion)}}

                                        </td>
										
										</td>

                                            <td>
                                            <a href="{{route('detalledesordenes',$order->id)}}" class="btn btn">Ver Mas</a>
                                            </td>

                                           <td>
										   {!! Form::open(['route' =>'valoraciones.store','method' =>'POST'])!!}
				
											<div class="form-group">
											<input type="number" name="puntaje"
														min="1"
														max="10"
														value="{{$order->puntaje}}"		
														id="article_{{$order->id}}"
												>
												{!! Form::hidden('id',$order->id)!!}
												{!! Form::submit('Dar',['class'=>'btn btn-primary'])!!}
											</div>

										{!! Form::close()!!}

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