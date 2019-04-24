@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listado de productos</div>
                @foreach ($listas as $ele)
                    <div class="card-body">
                        {{ $ele['name'] }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection