<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOBQUISTER</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="img/logo.png" alt="" width="60" height="60">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">   
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('cursos.login')}}">Crea cuenta</a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="nosotros.html">Quienes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Ofertas laborales</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <section class="seccion ">
        <div class="container">
            <div class="row">
                <div class="col-6 pt-5 pe-6 mt-5">
                    <h2 class="">JOBQUISTER</h2>
                    <p class="pt-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi doloribus quos
                        deleniti alias
                        consequuntur voluptate explicabo neque, optio ipsam iusto inventore reprehenderit pariatur illum
                        iure cum! Fuga dolorum quas repudiandae!</p>
                    <p>Lorem ipsum dolor, sit amet conssectetur adipisicing elit. Placeat, assumenda. Consequuntur
                        temporibus enim doloremque dolorem earum, tempore deleniti et a vero ex dolor illum porro
                        blanditiis, eius obcaecati error doloribus.</p>
                </div>
                <div class="col-6 pt-5">
                    <img src="img/index.svg" alt="">
                </div>
            </div>
        </div>
        <nav class="mx-5 my-5 ps-4">
            <nav class="px-4 pt-5 ps-5">
                <section class="puesto">
                    <h3 class="pb-5">Ofertas Laborales</h3>
                    <div class="row py-4 ">
                        <div class="col-2">
                            <img src="img/bsantander.png" alt="" width="100" height="100">
                        </div>
                        <div class="col-8 ">
                            <a href="{{route('cursos.index')}}"><h5>¿Listo para una Carrera Bancaria Exitosa? Únete a Nosotros como Ejecutivo de Atención al Cliente en el Banco Nacional. ¡Tu Futuro Comienza Aquí! 💼🏦</h5></a>
                            <p class="pt-2">¿Eres un apasionado del servicio al cliente y las finanzas? ¡Esta es tu oportunidad de brillar! El Banco Nacional está buscando talento excepcional para unirse a nuestro equipo como Ejecutivo de Atención al Cliente.</p>
                        </div>
                    </div>
                    <div class="row py-4">
                        <div class="col-2">
                            <img src="img/collahuasi.png" alt="" width="100" height="100">
                        </div>
                        <div class="col-8 pt-3">
                            <a href="{{route('cursos.index')}}"><h5>Únete a Nuestro Equipo en la Minería: ¡Operador de Cargador Frontal Buscado! 💪🚜⛏️</h5></a>  
                            <p>¿Tienes experiencia en la operación de cargadores frontales y estás listo para un nuevo desafío emocionante? Nuestra empresa minera está en busca de un Operador de Cargador Frontal altamente calificado para formar parte de nuestro equipo.</p>
                        </div>
                    </div>
                    <div class="row py-4">
                        <div class="col-2">
                            <img src="img/hospital.jpg" alt="" width="100" height="100">
                        </div>
                        <div class="col-8 pt-3">
                            <a href="{{route('cursos.index')}}"><h5>TECNICO ENFERMERIA</h5></a>
                            <p>En ManpowerGroup, nos encontramos en la búsqueda de Asistente de Enfermería para nuestro cliente dedicado a la Residencia de Adultos Mayores.</p>
                        </div>
                    </div>
                    <div class="row py-4">
                        <div class="col-2">
                            <img src="img/telco.svg" alt="" width="100" height="100">
                        </div>
                        <div class="col-8 pt-3">
                            <a href="{{route('cursos.index')}}"><h5>ESPECIALISTA EN SISTEMA DE CONTROL</h5></a>   
                            <p>El Especialista de Sistemas de Control trabajará como parte de un equipo distribuido altamente colaborativo que soportará en conjunto diversos sistemas y tecnologías de procesamiento de minerales con enfoque en la seguridad, la fiabilidad y las mejores prácticas.</p>
                        </div>
                    </div>
                    <div class="row py-4">
                        <div class="col-2">
                            <img src="img/zofri.png" alt="" width="100" height="100">
                        </div>
                        <div class="col-8 pt-3">
                            <a href="{{route('cursos.index')}}"><h5>OPERADOR DE RODILLO COMPACTADOR</h5></a>
                            <p>Empresa de servicios a la mineria requiere Operador de Rodillo Compactador, para contrato de movimiento de tierras en faena Radomiro Tomic en la ciudad de Calama.</p>
                        </div>
                    </div>
                    
                    

                    
                </section>

            </nav>
        </nav>

        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>

</html>