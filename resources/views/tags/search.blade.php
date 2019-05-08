{!! Form::open(['method'=>'GET','url'=>'offices','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
			 
			<div class="input-group custom-search-form">
			    <input type="text" class="form-control" name="search" placeholder="Search...">
			    <span class="input-group-btn">
			        <button class="btn btn-default-sm" type="submit">
			            <i class="fa fa-search">search </i>
			        </button>
			    </span>
			</div>
		{!! Form::close() !!}