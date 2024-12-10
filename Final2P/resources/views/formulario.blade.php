@extends('layouts.plantillaNav') 
@section('contenido') 

    <div class="container">
        @if(session('exito'))
        <script>
            Swal.fire({
                title: "Respuesta del servidor!",
                text: "{{ session('exito') }}",
                icon: "success",
            });
        </script>
        @endif
    <h1 class="display-1 text-prmiary text-center">Gestión de Contactos </h1>

    <form action="/procesarcontacto" method="POST">
        @csrf
        <div  class="mb-3" >
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="txtnombre" >
            <small class="text-danger fst-italic">{{ $errors->first('txtnombre') }}</small>
        </div>

        <div  class="mb-3" >
            <label for="correo" class="form-label" >Correo:</label>
            <input type="mail" class="form-control" name="txtcorreo" >
            <small class="text-danger fst-italic">{{ $errors->first('txtcorreo') }}</small>
        </div>

        <div class="mb-3" >
            <label for="telefono" class="form-label" >Telefono:</label>
            <input type="text" class="form-control" name="txttelefono" >
            <small class="text-danger fst-italic">{{ $errors->first('txttelefono') }}</small>
        </div>

        <button type="submit" class="btn btn-danger">Agregar Contacto</button>
    </form>

    @endsection