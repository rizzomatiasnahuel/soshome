@extends("layouts.app");

@section("content")

<div class="container white">
<h1>Editar Producto</h1>
<!--Formulario-->


@include('products.form', ['products' => $products,'url'=> '/products/'.$products->id, 'method'=>'PATCH'])

</div>
@endsection