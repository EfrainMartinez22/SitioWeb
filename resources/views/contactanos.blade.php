@extends('plantilla2')

@section('bread')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bc">
            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contactanos</li>
        </ol>
    </nav>
@endsection

@section('contactanos')
	<section class="section">
	    <div id="formulario" class="text-center">
            <h1 class="fw-bold">Ingresa tus datos</h1>
            <form action="">
                <label>Nombre:
                    <br>
                    <input type="text" name="nombre" class="form-control">
                </label>
                <br>
                <label>Correo:
                    <br>
                    <input type="text" name="email" class="form-control">
                </label>
                <br>
                <label>Mensaje:
                    <br>
                    <textarea name="mensaje" rows="5" class="form-control"></textarea>
                </label>
                <br>
                <button type="submit" class="btn btn-secondary btn-lg">Enviar mensaje</button>
            </form>
	  	</div>
	</section>
@endsection
