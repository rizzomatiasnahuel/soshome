@extends("layouts.app");

@section("content")


<script src="{{ asset('public/js/main.js') }}"></script>

<div class="big-padding text-center blue-grey white-text">
	
<h1>Detalle de Orden</h1>
</div>
<div class="container" style=" background: black; color: white;" >


<div class="row">
  <div class="col-md-3"  align="center"  ></div>
  <div class="col-md-6"  align="center" >
  
  <table class="table  table-responsive">

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
						
						<td>Articulo</td>
						<td>Categoria</td>
						<td>Precio</td>   
						<td>Cantidad</td>
                        <td>Total</td>
						
					</tr>
				</thead>
							<tbody style=" background: black; color: white;" >
								@foreach ($ordenitem as $item)
									<tr>
										<td>{{$item->id}}</td>
										
										<td>
											@php 
											$article = \App\Article::where("id","=",$item->product_id)->pluck("title")->first();
														
												
											@endphp
											{{preg_replace("/\((.*?)\)/i", "", $article)}}
											
										</td>
										<td>
										@php 
											$article = \App\Article::where("id","=",$item->product_id)->pluck("category_id")->first();
							
											$category  = \App\Category::where("id", "=", $article)->pluck("name")->first();			
												
											@endphp
											{{preg_replace("/\((.*?)\)/i", "", $category)}}
										
										
										</td>
										<td>{{$item->pricing}}</td>
										<td>{{$item->quantity}}</td>
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
  <div class="col-md-3"  align="center" ></div>
</div>


		



</div>




@endsection