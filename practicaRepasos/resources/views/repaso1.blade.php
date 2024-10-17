<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>repaso1</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <form action="/enviarmensaje" method="POST">
     @csrf
    <div class="container">
        <h1>Convertidor de Unidades</h1>
            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type="number" name="cantidad" class="form-control" id="cantidad" required>
            </div>

            <div class="form-group">
                <label for="unidad">Convertir de:</label>
                <select name="unidad" id="unidad" class="form-control" required>
                    <option value="MBtoGB">MB a GB</option>
                    <option value="GBtoMB">GB a MB</option>
                    <option value="GBtoTB">GB a TB</option>
                    <option value="TBtoGB">TB a GB</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Convertir</button>
        </form>
    </div>
</body>
</html>