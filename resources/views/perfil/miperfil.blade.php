@extends("layouts.app");

@section("content")

<div class="big-padding text-center blue-grey white-text">
	
<h1>Mi Perfil</h1>
</div>

<div class="container">

<div class="row" align="center">

  <div class="col-md-4 col-xs-12 col-sm-6">
  
  
  
  
  </div>
  <div class="col-md-4 col-xs-12 col-sm-6">
  				<table class="table table-bordered" style=" background: black; color: white;" align="center">
			
						<tr><td><p> Nombre de usuario:</p> {{$user->name}}</td></tr>
						<tr><td> <p> Correo Electronico: </p> {{$user->email}}</td></tr>
						<td align="center">
							<a href="{{route('perfil.edit',$user->id)}}" class="btn btn-warning" >Editar</a>
						</td>
				</table> 

  
  </div>


  <div class="col-md-4 col-xs-12 col-sm-6">
  
  
  
  
 </div>
</div>
</div>



@endsection