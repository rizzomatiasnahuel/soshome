@extends("layouts.app");

@section("content")

<div class="container-fluid">
<div class="row">
  <div class="col-md-12">
  
</div>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
                <div class="item active">
                <img src="img/a3.jpg" alt="..."
                                                style="width: 1400; height: 200px" 
                                                class="img-responsive" 
                
                >
                <div class="carousel-caption">
                    
                </div>
                </div>
   

				<h1 class="titu"> <b> Ofrecemos el mejor servicio </b></h1>
                    La publicidad gráfica ya no la ve nadie <br>

  	</div>
        
</div>
<br>

<br>


<!-- .col-md-8
 -->



</div>



<h1 align="CENTER">SOSHOME</h1>

<hr>
<div class="container">
	<div class="row">
			
			  <div class="col-md-10">
			  <div class="panel panel-primary" >
			 
			  <div class="row">
				@foreach($articles as $article)
				  <div class="col-sm-6 col-xs-6">
				    <div class="thumbnail" >
				    	<a href="{{ route('showArticles', $article->id) }}">
				    	@foreach($article->images as $image)	
				      	<img src="{{  asset('storage/'.$image->name)  }}" 
										 
									style="width: 350px; height: 250px" 
									class="img-responsive" 
									alt="">
						@endforeach			
						</a>
				      <div class="caption">
				        <h3> 
						<a href="{{ route('showArticles', $article->id) }}">


				        	{{$article->title }}
						</a>	
				        </h3>
				        <p>{{$article->content }}</p>
				        <p><a href="#" class="btn btn-primary" role="button">{{$article->category->name }}</a>
				    
						<a href="{{ route('cart-add', $article->id ) }}" class="btn btn-danger" role="button">Agregar a carrito</a>
						<a href="{{ route('cart-add', $article->id ) }}" class="btn btn-success" role="button">$ {{$article->pricing }}</a>
						<div clas="thumbnail">
						@foreach($article->tags as $tags)	
						<a href="{{ route('cart-add', $article->id ) }}" class="" role="button">{{$tags->name}}</a>
						
						@endforeach	
						</div>
						</p>
						
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