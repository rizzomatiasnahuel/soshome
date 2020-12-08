@extends("layouts.app");

@section("content")

<div class="big-padding text-center blue-grey white-text">
	
<h1>Mi Perfil</h1>
						<br>

						<td align="center">
							<a href="{{route('perfil.edit',$user->id)}}" class="btn btn-warning" >Editar</a>
						</td>
						<br>

</div>

<div class="container">

<div class="row" align="center">
						
  <div class="col-md-2 col-xs-12 col-sm-6">
  
  
  
  
  </div>
  <div class="col-md-4 col-xs-12 col-sm-6">
  <br>
  				<table class="table table-bordered" style=" background: black; color: white;" align="center">
			
						<tr><td><p> Nombre :</p> {{$user->name}}</td></tr>
						<tr><td> <p> Apellido: </p> {{$user->apellido}}</td></tr>
						<tr><td><p> Email :</p> {{$user->email}}</td></tr>

						<tr><td><p> DNI:</p> {{$user->DNI}}</td></tr>
						<tr><td> <p> Celular: </p> {{$user->celular}}</td></tr>
						<tr><td><p> Barrio:</p> {{$user->barrio}}</td></tr>
						
						

						
				</table> 
				

  
  </div>
			<div class="col-md-4 col-xs-12 col-sm-6">
			<br>
			<table class="table table-bordered" style=" background: black; color: white;" align="center">
						
						
						<tr><td> <p> GPS: </p> {{$user->GPS}}</td></tr>
						<tr><td><p> Certificacion:</p> {{$user->certificacion}}</td></tr>
						<tr><td> <p> Matricula: </p> {{$user->matricula}}</td></tr>
						<tr><td> <p> Horario de Atencion: </p> {{$user->horario_atencion}}</td></tr>
						<tr><td> <p> Perfil: </p> {{$user->type}}</td></tr>

						
				</table> 

			</div>

  <div class="col-md-2 col-xs-12 col-sm-6">
  
  
  
  
 </div>
</div>
</div>



@endsection