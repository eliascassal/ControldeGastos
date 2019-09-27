@extends('layout')

@section('title', 'Ingresos')

@section('title1', 'nuevo Ingreso')
@section('contenido')

<H2>mes de septiembre</H2>
<span>detalle de los Ingresos</span>

@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif
<div class="card text-center" Style= "width: 18rem; margin-top:50px;">

	<form class="form-control" method="POST" action="/ingresos" enctype="multipart/form-data">
			@csrf
		<div class="form-group">
        <label for=""> Nombre del Ingreso</label>
			<input type="text" name="nombreingreso" id="nombreingreso" class="form-control">
		</div>
		<div class="form-group">
			<label for=""> Descripcion del ingreso</label>
			<input type="text" name="descripcion" id="descripcion" class="form-control">
        </div>
        <div class="form-group">
			<label for=""> fecha del ingreso</label>
			<input type="date" name="fechaingreso" id="fechaingreso" class="form-control">
        </div>

        <div class="form-group bg-light">
			<label>Monto del ingreso</label>
            <input type="text" name="monto" id="monto" class="form-control">
		</div>
        
		<button type="submit" class="btn btn-primary">Guardar</button>
		
	</form>
</div>
@endsection

