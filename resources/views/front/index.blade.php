@extends("layouts.app");

@section("content")


<h1 align="CENTER">SOSHOME</h1>

<hr>
<div class="container">
	<div class="row">
			
			  <div class="col-md-10">
			  <div class="panel panel-primary" >
			 
			  <div class="row">
				@foreach($articles as $article)
				  <div class="col-sm-6 col-md-6">
				    <div class="thumbnail" >
				    	<a href="">
				      	<img src="{{ asset('storage/'.$article->image) }}" 
										 
									style="width: 350px; height: 250px" 
									class="img-responsive" 
									alt=""
						>
						</a>
				      <div class="caption">
				        <h3>
				        	{{$article->title }}
				        </h3>
				        <p>{{$article->content }}</p>
				        <p><a href="#" class="btn btn-primary" role="button">{{$article->category->name }}</a></p>
				      </div>
				    </div>
				  </div>
				@endforeach
			  </div>
			  </div>
			  </div>
			  <div class="col-md-2">

					

					<div class="list-group">

						
								  <a href="#" class="list-group-item ">Cras justo odio</a>
								  <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
								  <a href="#" class="list-group-item">Morbi leo risus</a>
								  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
								  <a href="#" class="list-group-item">Vestibulum at eros</a>
					</div>



			  </div>
			
			
		




	</div>
</div>




@endsection