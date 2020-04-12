@extends('layouts.app')

@section('content')
<br>
<div class="container">
<div class="row">
            <div class="col-md-4">
                <div class="card">
                            <div class="card-header">Tablero</div>
                                    <div class="card-body">
                                    <div>
                                    <ul class="navbar-nav ml-auto" alig="center" >

                                    <!-- Navegation Links -->
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('users') }}">Usuarios</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="{{ url('tags') }}">Tags</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link"  href="{{ url('cate') }}">Categorias</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link"  href="{{ url('articles') }}">Articulos</a>
                                        </li>

                                    </ul>
                                    </div>
                                    </div>
                </div>
            </div>
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Dashbord</div>
                                <div class="card-body">
                                Dashbord
                                </div>
                    </div>
            </div>
</div>
</div>
@endsection
