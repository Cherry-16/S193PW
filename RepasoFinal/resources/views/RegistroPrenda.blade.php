<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    @if(session('exito'))
    <script>
        Swal.fire({
            title: "Respuesta del servidor!",
            text: "{{ session('exito') }}",
            icon: "success",
        });
    </script>
    @endif
    <h1>Registro de prendas </h1>
    <form action="/procesarprenda" method="POST">
    @csrf
    <label for=""> Prenda: </label>
    <input type="text" name="txtprenda">
    <small class="text-danger fst-italic">{{ $errors->first('txtprenda') }}</small>
    <label for=""> Color: </label>
    <input type="text" name="txtcolor">
    <small class="text-danger fst-italic">{{ $errors->first('txtcolor') }}</small>
    <label for=""> Cantidad: </label>
    <input type="text" name="txtcantidad">
    <small class="text-danger fst-italic">{{ $errors->first('txtcantidad') }}</small>
    <button type="submit">Guardar Prendas </button>
    </form>
</body>
</html>