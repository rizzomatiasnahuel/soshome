@extends('layouts.app')

@section('content')


<br>
<div class="container">


@if(\Session::has('message'))
		@include('partials.message')
	@endif
<div class="row">
            <div class="col-md-4">
                <div class="card">
                            <div class="card-header" style=" background: black; color: white;">Tablero</div>
                                    <div class="card-body">
                                    <div>
                                    <ul class="navbar-nav ml-auto" alig="center" >

                                    <!-- Navegation Links -->
                                    <li class="nav-item">
                                            <a class="nav-link" href="{{ url('verperfil') }}">Mi Perfil</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link"  href="{{ url('articlesu') }}">Servicios y  Articulos</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link"  href="{{ url('misordenes') }}">Mis Ordenes</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link"  href="{{ url('valoraciones') }}">Valoraciones / Puntajes</a>
                                        </li>            
                                    </ul>
                                    </div>
                                    </div>
                </div>
            </div>
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" style=" background: black; color: white;">Dashbord</div>
                                <div class="card-body">
                                

                                <div class="container" style=" background: black; color: white;" >

<table class="table table-bordered table-responsive">

    <div class="floating" align="center"> 
    <p>
    
    <a href="{{url('/')}}" class="btn btn-primary btn-fab">
        <i class="material-icons">Seguir Comprando</i>
    </a>

    
    </p>
    </div>
        <thead style=" background: black; color: white;" >
            <tr>
                <td>id</td>
                <td>Fecha</td>
                <td>Subtotal</td>
                <td>Envio</td>
                <td>Total</td>
                <td>Detalle de Orden</td>    	  
            
                
            </tr>
        </thead>
                    <tbody style=" background: black; color: white;" >
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->updated_at}}</td>
                                <td>{{$order->subtotal}}</td>
                                
                                <td>{{$order->shipping}}</td>
                                <td>
                                {{number_format( $order->subtotal + $order->shipping, 2 )}}
                                
                                
                                </td>
                                <td>
                                <a href="{{route('detalledesordenes',$order->id)}}" class="btn btn">Ver Mas</a>
                                </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                                
                
                                    
                                </td>
                            
                        </tr>
                    
                
                </tbody>
</table>



</div>







                                
                                </div>
                    </div>
            </div>
</div>
</div>
@endsection
