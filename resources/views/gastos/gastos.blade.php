@extends('layout')

@section('title', 'Gastos')
@section('title1', 'lista de Gastos')


@section('contenido')

<H2>SEPTIEMBRE</H2>
<span><a href="gastos/create">NUEVO GASTO</a></span>

<H3>DETALLE DE LOS GASTOS DEL MES</H3>

    <div class="row">
		@foreach($gastos as $gasto)
			<div class="col-sm">
				<div class="card text-center" Style= "width: 18rem; margin-top:50px;">
						<img Style= "width: 100px; height: 100px; background-color:#EFEFEF; margin: 20px;" class="card-img-top rounded-circle mx-auto d-block"  src="/images/qm9897332054.jpg" alt="">
					<div class="card-body text-center">
						<h5 class="card-title">{{$gasto->nombregasto}}</h5>
						<p class="card-text"> {{$gasto->descripcion}} </p>
						<a href="/aula/{{$gasto->id}}" class="btn btn-primary">Ver mas...</a>
					</div>
				</div>
			</div>
		@endforeach
	</div>

@endsection

