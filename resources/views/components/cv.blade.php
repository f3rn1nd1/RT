<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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


    <div class="container text-center">
        <h3 class="pt-5">PRESENTACION FORMAL</h3>
    </div>

    <!-- Nav tabs -->
    <nav class="mx-5">
        <nav class="mx-5 px-4">
            <ul class="nav nav-tabs pt-4">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#datosPersonales">Datos personales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#formacionAcademica">Formación Académica</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#experiencia">Experiencia</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane container active" id="datosPersonales">
                    <form class="pt-5">
                        <!-- Aquí colocas tus campos de datos personales -->
                        <div class="form-group pb-3">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Esteban Luis">
                        </div>
                        <div class="form-group pb-3">
                            <label for="rut">RUT</label>
                            <input type="text" class="form-control" id="rut" placeholder="12.345.678-9">
                        </div>
                        <div class="form-group pb-3">
                            <label for="apellido">Apellido</label>
                            <input type="text" class="form-control" id="apellido" placeholder="Apellido">
                        </div>
                        <div class="form-group pb-3">
                            <label for="Fecha_nacimiento">Fecha_nacimiento</label>
                            <input type="date" class="form-control" id="Fecha_nacimiento" >
                        </div>
                        <div class="form-group pb-3">
                            <label for="direccion">Dirección</label>
                            <input type="text" class="form-control" id="direccion" placeholder="Dirección">
                        </div>
                        <div class="form-group pb-3">
                            <label for="email">Correo electronico</label>
                            <input type="email" class="form-control" id="email" placeholder="correo@example.com">
                        </div>
                        <div class="form-group pb-5">
                            <label for="celular">Celular</label>
                            <input type="text" class="form-control" id="celular" placeholder="123456789">
                        </div>

                        <!-- Otros campos -->
                        <div class="pb-4">
                          <button type="button" class="btn btn-primary "
                            onclick="cambiarPestana('formacionAcademica')">Siguiente</button>  
                        </div>
                        
                    </form>
                </div>
                <div class="tab-pane container fade" id="formacionAcademica">
                    <form class="pt-5">
                        <!-- Aquí colocas tus campos de formación académica -->
                        <div class="form-group pb-3">
                            <label for="tituloLicenciatura">Título de licenciatura</label>
                            <input type="text" class="form-control" id="tituloLicenciatura" >
                               
                        </div>
                        <div class="form-group pb-3">
                            <label for="nombreInstitucion">Nombre de la Universidad/Instituto</label>
                            <input type="text" class="form-control" id="nombreInstitucion"
                                placeholder="Nombre de la Universidad/Instituto">
                        </div>
                        <div class="form-group pb-3">
                            <label for="especialidad">Especialidad</label>
                            <input type="text" class="form-control" id="carrera" >
                        </div>
                        <div class="form-group pb-5">
                            <label for="formaiacion_adicional">Formacion adicional</label>
                            <input type="text" class="form-control" id="carrera" >
                        </div>
                        <!-- Otros campos -->
                        <button type="button" class="btn btn-primary"
                            onclick="cambiarPestana('experiencia')">Siguiente</button>
                    </form>
                </div>
                <div class="tab-pane container fade" id="experiencia">
                    <form class="pt-5">
                        <!-- Aquí colocas tus campos de experiencia laboral -->
                        <div class="form-group pb-3">
                            <label for="resumenProfesional">Resumen Profesional</label>
                            <input type="text" class="form-control" id="resumenProfesional">
                        </div>
                        <div class="form-group pb-3">
                            <label for="nombreEmpresa">Nombre de la Empresa</label>
                            <input type="text" class="form-control" id="nombreEmpresa">
                        </div>
                        <div class="form-group pb-3">
                            <label for="cargo">Cargo</label>
                            <input type="text" class="form-control" id="cargo" >
                        </div>

                        <div class="form-group pb-3">
                            <label for="fechaInicio">Fecha de Inicio</label>
                            <input type="date" class="form-control" id="fechaInicio">
                        </div>
                        <div class="form-group pb-3">
                            <label for="fechaTermino">Fecha de Término</label>
                            <input type="date" class="form-control" id="fechaTermino">
                        </div>
 
                        
                        <!-- Otros campos -->
                        <button type="button" class="btn btn-primary"
                            onclick="cambiarPestana('datosPersonales')">Enviar</button>
                        <!-- Puedes agregar un botón para ir hacia atrás si lo necesitas -->
                    </form>
                </div>
            </div>

            </div>
        </nav>
    </nav>



    <script>
        function cambiarPestana(pestana) {
            $('.nav-link').removeClass('active');
            $('.tab-pane').removeClass('active');
            $('.tab-pane').removeClass('show');
            $(`a[href="#${pestana}"]`).addClass('active');
            $(`#${pestana}`).addClass('active');
            $(`#${pestana}`).addClass('show');
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
