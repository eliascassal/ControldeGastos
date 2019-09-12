@extends('layout')

@section('title', 'gastos')

@section('title1', 'nuevo gasto')
@section('contenido')

<H2>mes de septiembre</H2>
<span>detalle de gastos</span>

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

	<form class="form-control" method="POST" action="/gastos" enctype="multipart/form-data">
			@csrf
		<div class="form-group">
        <label for=""> Nombre del Gasto</label>
			<input type="text" name="nombregasto" id="nombregasto" class="form-control">
		</div>
		<div class="form-group">
			<label for=""> Descripcion del Gasto</label>
			<input type="text" name="descripcion" id="descripcion" class="form-control">
        </div>
        <div class="form-group">
			<label for=""> fecha del Gasto</label>
			<input type="date" name="fechagasto" id="fechagasto" class="form-control">
        </div>

        <div class="form-group bg-light">
			<label>Monto del Gasto</label>
			<input type="text" name="monto" id="monto" class="form-control">
		</div>
        
		<button type="submit" class="btn btn-primary">Guardar</button>
		
	</form>
</div>
@endsection
