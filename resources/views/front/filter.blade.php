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
				    	@foreach($article->images as $image)	
				      	<img src="{{  asset('storage/'.$image->name)  }}" 
										 
									style="width: 350px; height: 250px" 
									class="img-responsive" 
									alt="">
						@endforeach			
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
			  	

				@include('front.partials.aside')

			  
				
			  </div>


	</div>
</div>




@endsection