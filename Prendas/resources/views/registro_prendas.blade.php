<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Registro de Prendas</h1>
    <div class="mb-3">
        <label for="prenda" class="form-label">Prenda: </label>
        <input type="text" class="form-control" id="prenda" name="prenda" value="{{old('isbn')}}">
        <small class="text-danger fst-italic">{{ $errors->first('prenda') }}</small>
    </div>
    <div class="mb-3">
        <label for="color" class="form-label">Color:</label> 
        <input type="text" class="form-control" id="color" name="color" value="{{old('color')}}">
        <small class="text-danger fst-italic">{{ $errors->first('color') }}</small>
    </div>
    <div class="mb-3">
        <label for="cantidad" class="form-label"> Cantidad: </label>
        <input type="text" class="form-control" id="cantidad" name="cantidad" value="{{old('autor')}}">
        <small class="text-danger fst-italic">{{ $errors->first('autor') }}</small>
    </div>
</body>
</html>