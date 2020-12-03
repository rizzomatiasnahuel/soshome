@extends('layouts.app')

@section('content')


<div class="container" align="center">
<div class="alert alert-info alert-dismissible text-center" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	<h2><strong><i class="fa fa-info-circle"></i></strong> La compra fue realizada con Exito</h2>
</div>

<div>
<a href="{{url('/')}}" class="btn btn-primary btn-fab">
		<i class="material-icons">Seguir Comprando</i>
	</a>

	</div>
</div>

@endsection