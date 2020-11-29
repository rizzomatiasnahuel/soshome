@extends('layouts.app')

@section('content')

<br>

<br>

<h2  style="font-family:cursive" align="center"> 
<b> Productos </b>

</h2>
<br>


<div class="container">

<div class="row" align="center">
  <div class="col-md-4">
  
  
  
  <div class="card" style=" background: black; color: white; ">
          <img  class="borderproducts" src="img/bronze1.jpg" alt="Plan Bronce" style="width:100%">
          <div class="container">
            <h2>Plan Bronce</h2>
          
            <p> Seccion</p>
            <p>Contactanos</p>
            <p><a href="contacto.php" target="_blank"><button class="button">Hace Click!</button></a></p>
          </div>
    </div>
  
  
  
  
  </div>
  <div class="col-md-4">
  
  
  
  
  <div class="card" style=" background: black; color: white; " >
      <img class="borderproducts" src="img/silver1.jpg" alt="Plan Plata" style="width:100%">
      <div class="container">
        <h2>Plan Plata</h2>
       
        <p>Seccion Principio</p>
        <p>Contactanos</p>
        <p> <a href="contacto.php" target="_blank"><button class="button">Hace Click!</button></a></p>
      </div>
    </div>
  
  
  
  </div>
  <div class="col-md-4">
  
  
  
  
  <div class="card" style=" background: black; color: white; " >
      <img class="borderproducts" src="img/gold1.jpg" alt="Plan Oro" style="width:100%">
      <div class="container">
        <h2>Plan Oro</h2>
       
        <p>Principal</p>
        <p>Contactanos</p>
         <p> <a href="contacto.php" target="_blank"><button class="button">Hace Click!</button></a></p>
      </div>
    </div>
  
  
  
  </div>
</div>

</div>


<br>

<br>



 @endsection