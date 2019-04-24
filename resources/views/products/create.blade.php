@extends("layouts.app");

@section("content")

<div class="container white">
<h1>Nuevo Producto</h1>
<!--Formulario-->

@include('products.form', ['products' => $products,'url'=> '/products','method'=>'POST'])






</div>
@endsection