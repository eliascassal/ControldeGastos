@extends('layout')

@section('title', 'Formulario de Contacto')

@section('title1', 'Formulario de Contacto')
@section('contenido')

<H2>mes de septiembre</H2>
<span>Formulario de contacto</span>

<div Style= "width: 18rem; margin-top:50px;">

	<form  method="POST" action="{{ route('contacto') }}" enctype="multipart/form-data">
			@csrf
			<input type="text" name="nombrecontacto" placeholder="nombres y apellidos" id="nombrecontacto" class="form-control" value="{{old('nombrecontacto')}}"><br>
			{!! $errors->first('nombrecontacto', '<small>:message</small><br>')!!}
     
            <input type="text" name="mail" id="mail" placeholder="email" class="form-control" value="{{old('mail')}}"><br>
			{!! $errors->first('mail', '<small>:message</small><br>')!!}

			<label for="">contenido del mensaje</label>
			<textarea name="contenido" id="contenido" cols="30" rows="10"></textarea><br>
			{!! $errors->first('mensaje', '<small>:message</small><br>')!!}
    
        	<button type="submit" class="btn btn-primary">Enviar</button>
		
	</form>
</div>
@endsection

