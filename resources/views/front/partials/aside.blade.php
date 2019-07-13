<div class="panel-body">	
					

					<ul class="list-group"> 
								@foreach($categories as $category)
								<li class="list-group-item">
								  
										<a href="{{ route('front.search.category', $category->id)}}">
										{{ $category->name }}
										</a>
								</li>
								@endforeach
					</ul>

				</div>