<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="card mb-4">
        <div class="card-header fs-5 text-center text-primary">
            Registrar Prenda
        </div>
        <div class="card-body">
            <form action="{{ route('guardarPrenda') }}" method="POST"> 
                @csrf

                <div class="mb-3">
                    <label for="prenda" class="form-label">{{__('Prenda:')}}</label>
                    <input type="text" class="form-control" id="prenda" name="prenda" value="{{old('prenda')}}">
                    <small class="text-danger fst-italic">{{ $errors->first('prenda') }}</small>
                </div>
                <div class="mb-3">
                    <label for="color" class="form-label">{{__('Color:')}}</label> 
                    <input type="text" class="form-control" id="color" name="color" value="{{old('color')}}">
                    <small class="text-danger fst-italic">{{ $errors->first('color') }}</small>
                </div>
                <div class="mb-3">
                    <label for="cantidad" class="form-label"> {{__('Cantidad:')}}</label>
                    <input type="text" class="form-control" id="cantidad" name="cantidad" value="{{old('cantidad')}}">
                    <small class="text-danger fst-italic">{{ $errors->first('cantidad') }}</small>
                </div>
                <button type="submit" class="btn btn-primary">{{__('Guardar Prenda')}}</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>