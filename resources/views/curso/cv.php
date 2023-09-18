<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <style>
        .cmp-header {
            height: 98px;
            background-color: var(--white-color);
            border-bottom: 8px solid var(--light-blue-color);
        }

        .cmp-header__container-logo {
            height: 40px;
        }
    </style>
    <div class="cmp-header">
        <div class="container">
            <div class="row">
                <div class="col cmp-header__container">
                    <h1 class=" pt-5">CURRICULUM VITAE</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- seccion datos formulario-->
    <section class="container">
        <div class="row">
            <div class="col">
                <div class="input-group mb-3 pt-5">
                    <input type="text" class="form-control" placeholder="Destinatario" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Enviar</button>
                </div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs pt-4">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home">Datos personales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#menu1">Formacion Academica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#menu2">Experiencia</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active" id="home">
                        <form>
                            <div class="col"> <!--offset-lg-1-->

                                <div class="row pt-3">
                                    <div class="col">
                                        <label class="form-label" for="nombre">Nombre</label>
                                        <input id="nombre" type="text" class="form-control" placeholder="Esteban Luis" aria-label="First name">
                                    </div>
                                    <div class="col">
                                        <label class="form-label" for="apellido">Apellido</label>
                                        <input id="apellido" type="text" class="form-control" placeholder="Robles Miranda" aria-label="Last name">
                                    </div>

                                    <div class="row g-3">

                                        <div class="col">
                                            <label class="form-label" for="apellido">Email</label>
                                            <input id="apellido" type="text" class="form-control" placeholder="jacqueline@gmail.com" aria-label="Last name">
                                        </div>
                                        <div class="col">
                                            <label class="form-label" for="apellido">Direccion</label>
                                            <input id="apellido" type="text" class="form-control" placeholder="Avenida Samaria " aria-label="Last name">

                                        </div>
                                    </div>
                                </div>


                        </form>

                    </div>
                    <div class="tab-pane container fade" id="menu1">...</div>
                    <div class="tab-pane container fade" id="menu2">...</div>
                </div>


            </div>
        </div>
        <div class="row">

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane container active" id="home">
                    <form>
                        <div class="col">
                            <div class="experiencia">
                                <h3>FORMACION ACADEMICA</h3>
                            </div>
                            <!--offset-lg-1-->

                            <div class="row pt-3">
                                <div class="col">
                                    <label class="form-label" for="nombre">Titulo de licenciatura</label>
                                    <input id="nombre" type="file" class="form-control" placeholder="Esteban Luis" aria-label="First name">
                                </div>
                                <div class="col">
                                    <label class="form-label" for="apellido">Titulo de maestria</label>
                                    <input id="apellido" type="text" class="form-control" placeholder="opcional" aria-label="Last name">
                                </div>

                                <div class="row g-3">

                                    <div class="col">
                                        <label class="form-label" for="apellido">Formacion Adicional</label>
                                        <input id="apellido" type="text" class="form-control" aria-label="Last name">
                                    </div>
                                    <div class="col">
                                        <label class="form-label" for="apellido">Idiomas</label>
                                        <input id="apellido" type="text" class="form-control" placeholder="Ingles" aria-label="Last name">

                                    </div>
                                    <!-- SECCION EXPERIENCIA LABORAL -->

                                    <div class="mb-2">
                                        <form action="">
                                            <h3 class="pt-5">EXPERIECIA LABORAL</h3>
                                            <div class="mb-2 pt-4">
                                                
                                                <label for="nombre">Resumen Profesional</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre">
                                            </div>
                                            <div class="mb-2 pt-2">
                                                <label for="nombre">Puesto de trabajo</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre">
                                            </div>
                                            <div class="mb-2 pt-2">
                                                <label for="nombre">Ciudad</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre " placeholder="">
                                            </div>
                                            <div class="mb-2 pt-2">
                                                <label for="nombre">Fecha de incio</label>
                                                <input type="date" class="form-control" id="nombre" name="nombre">
                                            </div>
                                            <div class="mb-2 pt-2">
                                                <label for="nombre">Fecha de termino</label>
                                                <input type="date" class="form-control" id="nombre" name="nombre">
                                            </div>
                                            <div class="mb-2 pt-2">
                                                <label for="nombre">Año de experiencia</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre">
                                            </div>
                                            <div class="mb-2 pt-2">
                                                <label for="nombre">Empresa</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre">
                                            </div>
                                            <div class="mb-2 pt-2">
                                                <label for="nombre">Responsabilidades</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre">
                                            </div>
                                            

                                        </form>
                                    </div>


                    </form>



                </div>
            </div>

    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body class="bg-secondary">
    <section class="d-flex justify-content-center">
        <div class="card col-sm-6 p-3 ">
            <div class="mb-3 pt-4">
                <h4>Registro de curriculum</h4>
            </div>
            <div class="mb-2">
                <form action="">
                    <div class="mb-2">
                        <label for="nombre" >Rut</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="mb-2">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="mb-2">
                        <label for="nombre">Apellido</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="mb-2">
                        <label for="nombre">Fecha_naciento</label>
                        <input type="date" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="mb-2">
                        <label for="nombre">Direccion</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="mb-2">
                        <label for="nombre" >Año de experiencia</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="mb-2">
                        <label for="nombre" >Estado civil</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="mb-2">
                        <label for="nombre" >Nacionalidad</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="mb-2">
                        <label for="nombre" >Telefono</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="mb-2">
                        <label for="nombre" >Email</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    
                    <div class="text-center pt-4">
                    <button type="button" class="btn btn-outline-primary ">Ingresar</button>
                    </div>
                </form>
            </div>
        </div> 

    </section>
</body>

</html> -->