@extends('layouts.app')

@section('content')


<br>
<br>

<h1 align="center" style="font-family:cursive">Dejanos tu Mensaje</h1>


<br>
<div class="container" >
<div class="row">
  <div class="col-md-4">
  <form action="envia.php" method="post" class="form-consulta"> 
  
    <label>Nombre y apellido: <span>*</span> <br>
      <input type="text" name="nombre" placeholder="Nombre y apellido" class="campo-form" required>
    </label>
    <br>
    <label>Email: <span>*</span><br>
      <input type="email" name="email" placeholder="Email" class="campo-form" required>
    </label>
    <br>
    <label>Consulta: <br>
      <textarea name="consulta" class="campo-form" rows="6"></textarea>
    </label>
    <br>
    <br>
    <input type="submit" value="Enviar" class="btn-form">
  </form>
  
  
  </div>
  <div class="col-md-8" align="left">
  
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.0095666533134!2d-58.383585634414196!3d-34.603919597664095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzTCsDM2JzEzLjEiUyA1OMKwMjInNTYuNSJX!5e0!3m2!1ses!2sar!4v1606366250921!5m2!1ses!2sar" width="600" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>  
  
  </div>
</div>



</div>









 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>




<script>
// Open the Modal
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

 @endsection