<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- CSS de Bootstrap -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link rel="stylesheet" href="styles.css">
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
                        <a class="nav-link active" aria-current="page" href="login.html">Crea cuenta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('home.__invoke')}}">Inicio</a>
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
    <nav class="mx-5 my-5 ">
            <nav class="px-4 pt-3 ps-5">
            <label for="inputoral" class="form-label">Empresas</label>
                <select class="form-select" name="id">
                  <option selected disabled>Selecciona un nivel</option>
                  <option value="1">Banco Santander</option>
                  <option value="2">Lider</option>
                </select>
            </nav>
        </nav>


  <div class="row">
    <div class="col-4">


      <div class="card border-light mb-3 mx-5 mt-4 pt-5" style="max-width: 18rem;">
        <div class="card-header">JOSEFINA LOPEZ LOPEZ</div>
        <div class="card-body">
          <h5 class="card-title pb-3">Datos personales </h5>
          <p class="card-text">Nacionalidad: XXXXXXX</p>
          <p class="card-text">Fecha de nacimiento: XXXXX</p>
          <p class="card-text">Genero:XXXXX</p>
          <p class="card-text">Estado civil: XXXXXXX</p>
          <p class="card-text">R.U.T: XXXXXXXXX</p>
        </div>
      </div>
      <div class="card border-light mb-3 mx-5 mt-4" style="max-width: 18rem;">
        <div class="card-header">Datos de contacto</div>
        <div class="card-body">
          <p class="card-text"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-envelope " viewBox="0 0 16 16">
              <path
                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
            </svg> XXXXXXXXXXXXXXXXXX</p>
          <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-house" viewBox="0 0 16 16">
              <path
                d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
            </svg>XXXXXXXXXXXX</p>
          <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-phone" viewBox="0 0 16 16">
              <path
                d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
              <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
            </svg>XXXXXXXXXXXXXXXX</p>
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="container my-5 pt-4">
        <nav>
          <div class="nav nav-tabs " id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-educacion-tab" data-bs-toggle="tab" data-bs-target="#nav-educacion"
              type="button" role="tab" aria-controls="nav-educacion" aria-selected="true">Educacion</button>
            <button class="nav-link " id="nav-experiencia-tab" data-bs-toggle="tab" data-bs-target="#nav-experiencia"
              type="button" role="tab" aria-controls="nav-experiencia" aria-selected="false">Experiencia</button>
            <button class="nav-link " id="nav-idioma-tab" data-bs-toggle="tab" data-bs-target="#nav-idioma"
              type="button" role="tab" aria-controls="nav-idioma" aria-selected="false">Idiomas</button>
          </div>
        </nav>
        <div class="tab-content " id="nav-tabContent">
          <div class="tab-pane fade show active p-3" id="nav-educacion" role="tabpanel"
            aria-labelledby="nav-educacion-tab">
            <div class="d-flex mb-4 pb-5">
              <h6 class="mt-4 col-8 flex-grow-1 p-2">Formación académica</h6>
            </div>
            <form class="row g-3">
              <div class="col-md-6">
                <label for="inputtitulo" class="form-label">Titulo/Carrera</label>
                <input type="titulo" class="form-control" name="titulo">
              </div>
              <div class="col-md-6">
                <label for="inputestudio" class="form-label">Tipo de estudio</label>
                <input type="estudio" class="form-control" name="tipo_estudio">
              </div>
              <div class="col-md-6">
                <label for="inputuni" class="form-label">Universidad/Institucion
                </label>
                <input type="uni" class="form-control" name="universidad" placeholder="UNAP">
              </div>
              <div class="col-md-6">
                <label for="inputinicio" class="form-label">Fecha de obtencion</label>
                <input type="date" class="form-control" name="fecha_obtencion">
              </div>
              <div class="d-grid gap-2 d-md-block ms-2">
                <button class="btn btn-primary" type="submit">Guardar</button>
              </div>
            </form>
          </div>
          <div class="tab-pane fade p-3" id="nav-experiencia" role="tabpanel" aria-labelledby="nav-experiencia-tab">
            <div class="d-flex mb-4 pb-5">
              <h6 class="mt-4 col-8 flex-grow-1 p-2">Experiencia Laboral</h6>
            </div>
            <form class="row g-3">
              <div class="col-md-6">
                <label for="inputempresa" class="form-label">Empresa</label>
                <input type="empresa" class="form-control" name="razon_social">
              </div>
              <div class="col-md-6">
                <label for="inputpuesto" class="form-label">Puesto</label>
                <input type="puesto" class="form-control" name="puesto">
              </div>
              <div class="col-md-6">
              <label for="inputexperiencia" class="form-label">Nivel de experiencia</label>
                <select class="form-select" name="nivel_experiencia">
                  <option selected disabled>Selecciona </option>
                  <option value="basico">Training</option>
                  <option value="intermedio">Junior</option>
                  <option value="avanzado">Semisenior</option>
                  <option value="avanzado">Senior</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="inputinicio" class="form-label">Fecha de inicio</label>
                <input type="date" class="form-control" name="f_inicio">
              </div>

              <div class="col-md-6">
                <label for="inputfin" class="form-label">Fecha de finalizacion</label>
                <input type="date" class="form-control" name="f_fin">
              </div>
              <div class="d-grid gap-2 d-md-block ms-2">
                <button class="btn btn-primary" type="submit">Guardar</button>
              </div>
            </form>
          </div>
          <div class="tab-pane fade  p-3" id="nav-idioma" role="tabpanel" aria-labelledby="nav-idioma-tab">
            <div class="d-flex mb-4 pb-5">
              <h6 class="mt-4 col-8 flex-grow-1 p-2">¿Que idioma manejas?</h6>
            </div>
            <form class="row g-3">
              <div class="col-md-6">
                <label for="inputescrito" class="form-label">Idioma</label>
                <select class="form-select" name="idioma">
                  <option selected disabled>Selecciona un idioma</option>
                  <option value="basico">Ingles</option>
                  <option value="intermedio">Portugués</option>
                  <option value="avanzado">Alemán</option>
                  <option value="avanzado">Japonés</option>
                  <option value="avanzado">Español</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="inputescrito" class="form-label">Nivel escrito</label>
                <select class="form-select" name="nivel_escrito">
                  <option selected disabled>Selecciona un nivel</option>
                  <option value="basico">Básico</option>
                  <option value="intermedio">Intermedio</option>
                  <option value="avanzado">Avanzado</option>
                </select>
              </div>

              <div class="col-md-6">
                <label for="inputoral" class="form-label">Nivel oral</label>
                <select class="form-select" name="nivel_oral">
                  <option selected disabled>Selecciona un nivel</option>
                  <option value="basico">Básico</option>
                  <option value="intermedio">Intermedio</option>
                  <option value="avanzado">Avanzado</option>
                </select>
              </div>
              <div class="d-grid gap-2 d-md-block ms-2">
                <button class="btn btn-primary" type="submit">Guardar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
</body>

</html>