@extends("layouts.app");

@section("content")

<div class="big-padding text-center blue-grey white-text">
	
<h1>Lista de Imagenes</h1>
</div>

 
<div class="container">
		<div class="row">
				@foreach($images as $image)			
						<div class="col-md-4">
							<div class="panel panel-default">
								<div class="panel-body">
									<img src="{{ asset('storage/'.$image->name) }}" 
									class="img-fluid"
									style="width: 350px; height: 250px; border: 2px solid black" class="img-responsive" alt="">
								</div>
								<div class="panel-footer"> {{$image->article->title }}</div>
							</div>
						</div>
				@endforeach
		</div>




</div>
@endsection