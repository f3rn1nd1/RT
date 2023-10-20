<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

</head>

<body>
    <div class="container">
        <div>
            <h2 class="mb-5 mt-5 text-center">Registro</h2>
            <div>
                <div class="row">
                    <div class="col-8 pt-5"> <img src="{{ asset('img/lign.svg') }}" alt="" width="50%" height="50%"></div>
                    <div class="col-4">
                        <form>
                        <div class="mb-3">
                                <label for="inputRUT" class="form-label">RUT</label>
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" class="form-control" id="inputRUT"
                                            placeholder="12.345.678">
                                    </div>
                                    <div class="col-md-1">
                                        <input type="text" class="form-control" placeholder="0">
                                    </div>


                                </div>

                            <div class="mb-3">
                                <label for="inputNombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="inputNombre">
                            </div>

                            <div class="mb-3">
                                <label for="inputApellidoPaterno" class="form-label">Apellido Paterno</label>
                                <input type="text" class="form-control" id="inputApellidoPaterno">
                            </div>

                            <div class="mb-3">
                                <label for="inputApellidoMaterno" class="form-label">Apellido Materno</label>
                                <input type="text" class="form-control" id="inputApellidoMaterno">
                            </div>

                            <div class="mb-3">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail"
                                    placeholder="nombre@ejemplo.com">
                            </div>

                            <div class="mb-3">
                                <label for="inputDireccion" class="form-label">Dirección</label>
                                <input type="text" class="form-control" id="inputDireccion"
                                    placeholder="Av. Ejemplo #123, Ciudad">
                            </div>

                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
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