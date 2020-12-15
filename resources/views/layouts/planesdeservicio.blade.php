@extends('layouts.app')

@section('content')

<br>

<br>

<h2  style="font-family:cursive" align="center"> 
<b> Planes de Servicios
 </b>

</h2>
<br>
<h5><p  align="center">

Ofrecemos un "Partnership" ,<br> 
de  maxima calidad en nuestros servicios  dando la oportunidad de formar parte de algo mucho mas grande.<br>
 Una comunidad de  servicios exclusivos a  largo plazo. 
 <br>
 <br>Para esto, ofrecemos  un lazo de confianza a futuro,<br>
  donde damos la posibilidad de no cobrar por nuestros servicios de  intereelacion entre "solicitante" y "solicitado",<br>
   con suma inicial dependiendo del lapso,<br>
     a partir de esto damos diferentes Planes de Servicios" 



</p>
</h5>

<div class="container">

<div class="row" align="center">
  <div class="col-md-4">
  
  
  
  <div class="card" style=" background: black; color: white; ">
          <img  class="borderproducts" src="img/bronze1.jpg" alt="Plan Bronce" style="width:100%">
          <div class="container">
            <h2>Plan Bronce</h2>
            <h4>
            <p> 3 meses -> $3000</p>
            </h4>
            <p>Contactanos</p>
            <p><a href="{{url('contacto')}}" target="_blank"><button class="button">Hace Click!</button></a></p>
          </div>
    </div>
  
  
  
  
  </div>
  <div class="col-md-4">
  
  
  
  
  <div class="card" style=" background: black; color: white; " >
      <img class="borderproducts" src="img/silver1.jpg" alt="Plan Plata" style="width:100%">
      <div class="container">
        <h2>Plan Plata</h2>
       
            <h4>
            <p> 6 meses ->  $5000</p>
            </h4>       
             <p>Contactanos</p>
        <p> <a href="{{url('contacto')}}" target="_blank"><button class="button">Hace Click!</button></a></p>
      </div>
    </div>
  
  
  
  </div>
  <div class="col-md-4">
  
  
  
  
  <div class="card" style=" background: black; color: white; " >
      <img class="borderproducts" src="img/gold1.jpg" alt="Plan Oro" style="width:100%">
      <div class="container">
        <h2>Plan Oro</h2>
       
            <h4>
            <p> 12 meses ->$10000</p>
            </h4>      
        <p>Contactanos</p>
         <p> <a href="{{url('contacto')}}" target="_blank"><button class="button">Hace Click!</button></a></p>
      </div>
    </div>
  
  
  
  </div>
</div>

</div>
<h5 align="center">
<p>
Si deseas ser parte!!!
<br>
Escribinos por  el plan de tu comidad!
<br>
Un asesor se contactara con usted!
<br>
<br>
La elite esta a tus pies!
</p>
</h5>



 @endsection