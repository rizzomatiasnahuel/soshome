@extends("layouts.app");

@section("content")

<div class="container white">
<h1>Valoracion / Puntaje</h1>
<!--Formulario-->



<br>
{!! Form::open(['route' => 'valoraciones.store','method' =>'POST', 'files'=>true ])!!}
	

    
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Seleccionar Valoracion</label>
                    <select class="form-control" id="puntaje" name="puntaje">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    </select>
                </div>

	


                <br>
                        <div class="form-group">
                            {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
                        
                            <a href="{{url('/valoraciones')}}">
                            Regresar al listado  de valoraciones
                            </a>	
                        </div>

		


{!! Form::close()!!}



</div>
@endsection