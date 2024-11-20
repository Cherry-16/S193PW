@extends('layouts.plantilla')
@section('contenido')


    {{-- Inicia tarjetaCliente --}}
    <div class="container mt-5 col-md-8">
        @foreach($consultaclientes as $cliente)

        <div class="card text-justify font-monospace mt-4">
            <div class="card-header fs-5 text-primary">{{ $cliente->nombre }}</div>
            <div class="card-body">
                <h5 class="fw-bold">{{ $cliente->correo }}</h5>
                <h5 class="fw-medium">{{ $cliente->telefono }}</h5>
                <p class="card-text fw-lighter"></p>
            </div>
            <div class="card-footer text-muted">
                @if(session('exito'))
    <x-Alert tipo="success">{{ session('exito') }}</x-Alert>
    @endif
    @session('exito')
    <x-Alert tipo="warning">{{ $value }}</x-Alert>
    @endsession

    @session('exito')
    {! <script> 
      Swal.fire({
     title: "Respuesta servidor!",
    text: "{{ $value }}",
    icon: "success"});
    </script> !}
    @endsession
                <a href="{{ route('rutaActualizar', $cliente->id) }}" class="btn btn-warning btn-sm">{{__('Actualizar')}}</a>
                <a href="{{ route('rutaEliminar', $cliente->id) }}" class="btn btn-danger btn-sm">{{__('Eliminar')}}</a>
            </div>
        </div>
        @endforeach
    {{-- Finaliza tarjetaCliente --}} 
    </div>

@endsection