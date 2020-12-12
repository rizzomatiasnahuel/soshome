@extends('layouts.app')

@section('content')
<br>
<div class="container">
<div class="row">
            <div class="col-md-4">
                <div class="card" >
                            <div class="card-header" style=" background: black; color: white;">Tablero</div>
                                    <div class="card-body">
                                    <div>
                                    <ul class="navbar-nav ml-auto" alig="center" >

                                    <!-- Navegation Links -->
                                    <li class="nav-item">
                                            <a class="nav-link" href="{{ url('verperfil') }}">Mi Perfil</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('users') }}">Usuarios</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="{{ url('tags') }}">Tags</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link"  href="{{ url('cates') }}">Categorias</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link"  href="{{ url('ArticleAdmin') }}">Todos los Servicios y  Articulos</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link"  href="{{ url('OrdenesAdmin') }}">Todas Las ordenes</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link"  href="{{ url('ValoracionesAdmin') }}">Valoraciones / Puntajes</a>
                                        </li>    
                                    </ul>
                                    </div>
                                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-8">
                    <div class="card">
                        <div class="card-header" style=" background: black; color: white;">Dashbord</div>
                                <div class="card-body">
                                <div class=" col-md-12 col-xs-12"  >
                               <div class="row" style=" background: black; color: white" align="center">
                               
                                      @php 
											$article = \App\Article::all()->count();
    
												
											@endphp
											<h5>Cantidad de Articulos : {{preg_replace("/\((.*?)\)/i", "", $article)}} </h5>  
                                            
                                            </div>

                                            <div class="row" style=" background: black; color: white" align="center">

                                            <h5>Cantidad de Usuarios : {{$users->count()}}</h5>
                                            

                               </div>
                               </div>


                                <div class="container" >
                                                    <table class="table table-bordered table-responsive" >
                                                        <div class="floating" >
                                                        <a href="{{url('/users/create')}}" class="btn btn-primary btn-fab">
                                                            <i class="material-icons">Agregar</i>
                                                        </a>
                                                        </div>
                                                        <thead style=" background: black; color: white;">
                                                            <tr>
                                                                <td>ID</td>
                                                                <td>Name</td>
                                                                <td>Email</td>
                                                                <td>Tipo</td>
                                                                
                                                                <td>Acciones</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody style=" background: black; color: white;">
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
















                                </div>
                    </div>
            </div>
</div>
</div>
@endsection
