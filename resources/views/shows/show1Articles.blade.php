@extends("layouts.app");

@section("content")

<div class="container text-center">


    @if(Auth::check()&& $articles->user_id == Auth::user()->id )
    
    <div class="absolute actions" style=" background: black; color: white; "     >
        <a href="{{route('articles.destroy',$articles->id)}}" class="btn btn-danger">Eliminar</a>
        <a href="{{route('articles.edit',$articles->id)}}" class="btn btn-warning">Editar</a>
        
    </div>
    <br>
    
    
    @endif
	<div class="card product text left" style=" background: black; color: white; ">
        <h1>{{$articles->title}}</h1> 
        <div class="row">
                <div class="col-sm-6 col-xs-12">
                <a href="">
				    	@foreach($articles->images as $image)	
				      	<img src="{{  asset('storage/'.$image->name)  }}" 
										 
									style="width: 350px; height: 250px" 
									class="img-responsive" 
									alt="">
						@endforeach			
						</a>
                
                </div>
                <div class="col-sm-6 col-xs-12">
                 <p>
                 <strong>Descripcion</strong>
                 </p>
                 <p>
                 {{$articles->content}}
                 </p>
                 <p>
                 {{$articles->pricing}}
                 </p>


                 <p>
                 <div class="thumbnail" style=" background: black; color: white; ">
                    @foreach($articles->tags as $tags)	
                            <a href="" class="btn btn-outline-ligh" role="button">{{$tags->name}}</a>
                            
                            @endforeach	 
                            </div>
                 </p>         
                       
                <p>
                <a href="{{ route('cart-add', $articles->id ) }}" class="btn btn-success">Agregar a Carrito</a>
                </p>


                </div>
        </div>   
    </div>
</div>

<br>


@endsection