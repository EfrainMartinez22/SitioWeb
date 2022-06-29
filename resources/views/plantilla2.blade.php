<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    <link rel="stylesheet" type="text/css" href="css/diseño2.css">
    <title>Sitio Web</title>
</head>
<body>
    <nav class="menu navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="media/Doc.png" width="100" height="100" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/somos">Somos</a>
                    </li>
                    <li class="nav-item dropdown lista">
                        <a class="nav-link dropdown-toggle" href="/paquetes" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Galeria
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/rino">Rinoplastía</a></li>
                            <li><a class="dropdown-item" href="/otop">Otoplastía</a></li>
                            <li><a class="dropdown-item" href="/blefaro">Blefaroplastía</a></li>
                            <li><a class="dropdown-item" href="/biche">Bichectomía</a></li>
                            <li><a class="dropdown-item" href="/lifting">Lifting de labios</a></li>
                            <li><a class="dropdown-item" href="/lipo">Liposucción Cervical</a></li>
                            <li><a class="dropdown-item" href="/marcaje">Marcaje de cara</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/agendar_cita">Agendar Cita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/contactanos">Contactanos</a>
                    </li>
                    
                    @guest
                    
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                </ul>
            </div>
            <div>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <nav>
        @yield('bread')
    </nav>
    <section class="section section1-content">
        <div>
            @yield('index')
            @yield('somos')
            @yield('galeria')
            @yield('agendar_cita')
            @yield('mapa_sitio')
            @yield('contactanos')
            @yield('login')

        </div>
    </section>
    <footer class="footer1">
		<div class="container-footer-all">
            <div class="container-body">
                <div class="colum1">
                    <h1>Mas informacion del sitio</h1>
                    <p>
                        Somos un equipo de otorrinolaringologos certificados, especializados en cirugía tanto funcional como estética de nariz, es agradable una nariz bonita, pero mas agradable es respirar, esa es nuestra premisa, tu bienestar.
                        Estamos a tus ordenes en los mejores hospitales de Tepic y Colima, trabajamos con aseguradoras.
                        genda una cita y conoce cual es la mejor opción para tu rostro.
                    </p>
                </div>
                <div class="colum2">
                    <h1>Redes Sociales</h1>
                    <div class="row1">
                        <a href="#"><img src="media/facebook1.png" /></a>
                        <label>Siguenos en Facebook</label>
                    </div>
                    <div class="row1">
                        <a href="#"><img src="media/instagram.png" /></a>
                        <label>Siguenos en Instagram</label>
                    </div>
                    <div class="row1">
                        <a href="#"><img src="media/twitter.png" /></a>
                        <label>Siguenos en Twitter</label>
                    </div>
                </div>
                <div class="colum3">
                    <h1>Informacion Contactos</h1>
                    <div class="row2">
                        <img src="media/house.png" />
                        <label>
                            Calle #, Colonia,
                            0000 Tepic, Nay., 0000
                            Tepic, Mexico
                        </label>
                    </div>
                    <div class="row2">
                        <img src="media/smartphone.png" />
                        <label>
                            +52-311-211-6174
                            +52-311-210-0464
                            +52-312-323-5545
                        </label>
                    </div>
                    <div class="row2">
                        <img src="media/contact.png" />
                        <label>
                            miguel3994@hotmail.com
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-footer">
            <div class="footer">
                <div class="copyright">
                	<p>
                    	Copyright &copy; Web Coding Pro. All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
	</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
</body>
</html>
