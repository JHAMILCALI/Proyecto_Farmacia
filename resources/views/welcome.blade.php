<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    {{-- Inicio la cabecera --}}
    <header class="header">
        <div class="container2">
            <div class="btdes">
                <div class="btn-menu">
                    <label for="btn-menu">☰</label>
                </div>
            </div>
            
            <div class="logo">
                <h1>
                    <a href="/">
                        <img src="{{ asset('img/logo.png') }}" alt="">
                    </a>
                </h1>
            </div>
            <nav class="menu">
                <a class="nav-link active" href="{{'/'}}" aria-current="page">INICIO<span class="visually-hidden">(current)</span></a>
                <a class="nav-link" href="{{url('proveedores')}}">PROVEEDORES</a>
                <a class="nav-link" href="{{url('medicamentos')}}">MEDICAMENTO</a>
            </nav>
        </div>
    </header>
    {{-- Final la cabecera --}}
    {{-- Inicio la parte izquierda --}}
    <div class="capa"></div>
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <nav>
                <a class="nav-link active" href="{{'/'}}" aria-current="page">INICIO<span class="visually-hidden">(current)</span></a>
                <a class="nav-link" href="{{url('proveedores')}}">PROVEEDORES</a>
                <a class="nav-link" href="{{url('medicamentos')}}">MEDICAMENTO</a>
            </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>
    {{-- Final la parte izquierda --}}

    <main class="container">
        <br>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <br><br>
                @yield('content')
            </div>
            <div class="col-md-1"></div>
        </div>
    </main>
    
    <!-- JavaScript para cambiar el color de la cabecera al hacer scroll --> 
    <script>
        window.addEventListener('scroll', function() {
    const header = document.querySelector('.header');
    const menu = document.querySelector('.menu');
    const btn_menu = document.querySelector('.btdes');

    if (window.scrollY > 50) {
        header.classList.add('scrolled');
        menu.classList.add('scrolled');
        btn_menu.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
        menu.classList.remove('scrolled');
        btn_menu.classList.remove('scrolled');
    }
});

    </script>

    <!-- Bootstrap Bundle with Popper -->
    <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"
></script>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"
></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
</body>
</html>
