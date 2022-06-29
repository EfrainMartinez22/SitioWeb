@extends('plantilla2')

@section('bread')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bc">
            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Registrarse</li>
        </ol>
    </nav>
@endsection

@section('login')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md- col-lg-6">
                <div class="card mt-2 text-center bg-dark">
                    <div class="card-body bg-dark text-warning">
                        <h4 class="card-title">Registrate</h4>
                        <p class="card-text">
                            <input type="text" id="nombre" class="form-control" name="nombre"
                            placeholder="Nombre" required>
                            <input type="text" id="apellidos" class="form-control mt-1" name="apellidos"
                            placeholder="Apellidos" required>
                            <input type="email" id="correo" class="form-control mt-1" name="correo"
                            placeholder="Correo" required>
                            <input type="text" id="telefono" class="form-control mt-1" name="telefono"
                            placeholder="Telefono" data-toggle="tooltip" data-placement="top" title="El telefono debe ser de 10 digitos!">
                            <input type="text" id="usuario" class="form-control mt-1" name="usuario"
                            placeholder="Usuario" required>
                            <input type="password" id="psw" class="form-control mt-1" name="psw"
                            placeholder="Contraseña" required>
                            <input type="button" class="btn btn-block btn-outline-primary mt-3"
                            value="Registrar" id="registrar">
                        </p>
                        ¿ya tienes cuenta?<a href="#" class="card-link">Ingresa aquí</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
