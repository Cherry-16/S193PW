@extends('layouts.plantilla')
@section('contenido')

<div class="container mt-5 col-md-8">
    @if(session('exito'))
    <script>
        Swal.fire({
            title: "¡Acción Exitosa!",
            text: "{{ session('exito') }}",
            icon: "success",
            confirmButtonText: "Aceptar"
        });
    </script>
    @endif
    @foreach($consultaclientes as $cliente)
    <div class="card text-justify font-monospace mt-4">
        <div class="card-header fs-5 text-primary">{{ $cliente->nombre }}</div>
        <div class="card-body">
            <h5 class="fw-bold">{{ $cliente->correo }}</h5>
            <h5 class="fw-medium">{{ $cliente->telefono }}</h5>
        </div>
        <div class="card-footer text-muted">
            {{-- Botón para actualizar --}}
            <a href="{{ route('rutaEditar', $cliente->id) }}" class="btn btn-warning btn-sm">{{ __('Actualizar') }}</a>
            {{-- Botón para eliminar con confirmación de SweetAlert --}}
            <button type="button" class="btn btn-danger btn-sm" 
                    onclick="eliminarCliente('{{ route('rutaEliminar', $cliente->id) }}')">
                {{ __('Eliminar') }}
            </button>
        </div>
    </div>
    @endforeach

</div>
<script>
function eliminarCliente(url) {
    Swal.fire({
        title: "¿Estás seguro?",
        text: "No podrás recuperar este registro.",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Sí, eliminar",
        cancelButtonText: "Cancelar"
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = url;
        }
    });
}
</script>
@endsection