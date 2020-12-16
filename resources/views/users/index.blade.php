@extends("layouts.app");

@section("content")

<div class="big-padding text-center blue-grey white-text">
	
<h1>Usuarios</h1>
</div>


<div class="container">

<div class="row">
  <div class="col-md-1"  align="center"  ></div>
  <div class="col-md-10"  align="center" >
  <table class="table table table-responsive" style=" background: black; color: white;">
	<div class="floating">
	<a href="{{url('/users/create')}}" class="btn btn-primary btn-fab">
		<i class="material-icons">Agregar</i>
	</a>
	</div>
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Email</td>
			<td>Tipo</td>
			
			<td>Acciones</td>
		</tr>
	</thead>
	<tbody>
		@foreach ($users as $user)
			<tr>
				<td>{{$user->id}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->type}}</td>
			
				<td>
					<a href="{{route('users.destroy',$user->id)}}" class="btn btn-danger">Eliminar</a>
					<a href="{{route('users.edit',$user->id)}}" class="btn btn-warning">Editar</a>
				</td>
				
			</tr>
		@endforeach
	</tbody>
</table>

  
  
  
  </div>
  <div class="col-md-1"  align="center" ></div>
</div>




</div>


@endsection