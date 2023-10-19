<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Document</title>
</head>

<body>
    <div>
        <x-cv />
    </div>
  <div class="container">
    <div>
        <h2 class="mb-5 mt-5 text-center">Iniciar sesion</h2>
        <div>
            <div class="row">
                <div class="col pt-5"> <img src="{{ asset('img/lign.svg') }}" alt="" width="70%" height="50%"></div>
                <div class="col">
                    <form>
                        <div class="mb-3">
                            <label for="inputcorreo" class="form-label">Correo electronico</label>
                            <input type="text" class="form-control" id="inputcorreo" >
                        </div>

                        <div class="mb-3">
                            <label for="inputpassword" class="form-label">Contraseña</label>
                            <input type="text" class="form-control" id="inputpassword">
                        </div>
                        <button type="submit" class="btn btn-primary ">Enviar</button>
                        <a href="{{route('register')}}" class="ps-4">Crear cuenta</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
</body>

</html>