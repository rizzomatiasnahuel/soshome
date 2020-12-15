<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title >{{ config('app.name', 'SOShome') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style=" background: black; ">


	

    <div id="app">
        <nav class="navbar fixed-top  navbar-expand-md navbar-light navbar-laravel" style=" background: black; ">
            <div class="container"   style=" background: black; " >

                <a class="navbar-brand" href="{{ url('/') }}" style=" color: white; ">
                    
                    
                    Sh               
                    
                    
                     </a>
                <button class="navbar-toggler"  style=" background: white; " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span  class="navbar-toggler-icon" ></span>
                </button>

                
            


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
                        <div>
                            <ul class="navbar-nav ml-auto" alig="center" >

                            <!-- Navegation Links -->
                                <li class="nav-item">
                                    <a class="nav-link" style=" color: white; " href="{{ url('/') }}">Articulos</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" style=" color: white; " href="{{ url('imagesv') }}">Galeria</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" style=" color: white; " href="{{ url('planesdeservicio') }}">Planes de Servicio</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" style=" color: white; " href="{{ url('contacto') }}">Contacto</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" style=" color: white; " href="{{ url('quienessomos') }}">Quienes Somos</a>
                                </li>
                            </ul>
                          </div>
            
            
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                        
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item"> 
                        

                        </li>
                        <li class="nav-item">
                                    <a class="nav-link" style=" color: white; "  href="{{ route('cart-show') }}">Carrito</a>
                        </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link"  style=" color: white; " href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style=" color: white; "  href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            
                        @else
                            <li class="nav-item dropdown">
                            
                                <a id="navbarDropdown"  style=" color: white; " class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            
                            

                        @endguest
                        
                    </ul>
                <div class="flex-center position-ref full-height">
                    @if (Route::has('login'))
                        <div class="top-right links" style=" color: white; " >
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                
                            @endauth
                        </div>
                    @endif
                        
                        
                        </div>
                    </div>

                    
        </nav>
        <br>


        
       




        <main class="py-4" style=" color: white; ">
            @yield('content')

         
        </main>
    </div>
</body>

<br>
<br>

<br>

<div class="container">
            <footer>

                 <div class="row quienes " align="center" >
                           
                            <div class="col-xs-12 col-md-4 " style=" color: white;  ">
                            <h4>Categorias!</H4> 
                                 
                                 
                                   <a  href="{{ url('/') }}"   target="_blank"  >Articulos</a><br>
                                    <a href="{{ url('imagesv') }}" target="_blank" >Galeria</a><br>
                                    <a href="{{ url('planesdeservicio') }}" target="_blank" >Planes de Servicio</a><br>
                                     <a href="{{ url('contacto') }}" target="_blank" >Contacto</a><br>
                                     <a href="{{ url('quienessomos') }}" target="_blank" >Quienes Somos</a><br>
                                  
                            </div>
                            <div class="col-xs-12 col-md-4 "  >
                                          
                                         <h2 >
                                            <span style=" color: white; "> 
                                                    Contactanos
                                                  <br>
                                                  </span>
                                                  </h2>
                                  
                                                <a href="{{url('contacto')}}" target="_blank">
                                                
                                        
                                                </a>                
                                              
                                              <h3><a href="{{url('contacto')}}" target="_blank">soshome@soshome.com.ar</a></h3>
                            </div>
                            <div class="col-xs-12 col-md-4 "   style=" color: white; ">
                                  <h4>Seguinos!</H4>
                                   
                                   <a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook">facebook</a><br>
                                  <a href="https://twitter.com/" target="_blank" class="fa fa-twitter">twitter</a><br>
                                   <a href="https://www.youtube.com/" target="_blank" class="fa fa-youtube">youtube</a><br>
                                   <a href="https://www.instagram.com" target="_blank" class="fa fa-instagram">instagram</a><br>
                                  
                                   <a href=" https://www.paypal.com/ar/webapps/mpp/home?kid=&gclid=EAIaIQobChMI_Pae_s-h7QIVhYCRCh3iYACSEAAYASAAEgLiN_D_BwE&gclsrc=aw.ds" target="_blank" class="fa fa-instagram">Paypal</a><br>     
                          </div>
                   </div>  
 
  </footer>
  
                  <div class="row quienes" align="center" style="font-family:cursive">
                    <div class="col-xs-12 col-md-12" style=" color: white; ">
                      © 2019 - soshome todo para el mantenimiento y los  fixes  / Se reserva <br>
                       Todos los derechos reservados - Términos y Condiciones | Políticas de Privacidad
                    </div>
  
                  </div>

                  </div>
</html>
