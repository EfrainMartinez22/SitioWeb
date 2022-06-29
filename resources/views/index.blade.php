@extends('plantilla2')

@section('index')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb bc">
        <li class="breadcrumb-item active" aria-current="page">Inicio</li>
    </ol>
</nav>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="media/pth2.jpg" class="d-block w-80 img-fluid" alt="..." style="object-fit:cover; height:80vh; width:100%;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Bienvenido</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="media/pth1.jpg" class="d-block w-80 img-fluid" alt="..." style="object-fit:cover; height:80vh; width:100%;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Entrada lateral hacia consultorios</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="media/pth3.jpg" class="d-block w-80 img-fluid" alt="..." style="object-fit:cover; height:80vh; width:100%;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Oftalmología</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="media/pth4.jpg" class="d-block w-80 img-fluid" alt="..." style="object-fit:cover; height:80vh; width:100%;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Habitaciones</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="media/pth5.jpg" class="d-block w-80 img-fluid" alt="..." style="object-fit:cover; height:80vh; width:100%;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Departamento de imagenología</h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
	</section>
@endsection
