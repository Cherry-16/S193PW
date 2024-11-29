
@extends('layouts.plantilla') 
@section('contenido') 

{{-- inicia Tarjeta con formulario --}}
{{-- @dump($id) --}}

<div class="container mt-5 col-md-6">
  @if(session('exito'))
  <script>
      Swal.fire({
          title: "¡Actualización Exitosa!",
          text: "{{ session('exito') }}",
          icon: "success",
          confirmButtonText: "Aceptar"
      });
  </script>
  @endif
  
<div class="card font-monospace">

    <div class="card-header fs-5 text-center text-primary">
       {{__('Actualización de Clientes')}}
    </div>

    <div class="card-body text-justify ">

      <form action="{{ route('cliente.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="nombre" class="form-label"> {{__('Nombre:')}}</label>
          <input type="text" class="form-control" name="txtnombre" value="{{ old('txtnombre', $cliente->nombre) }}">
          <small class="text-danger fst-italic">{{ $errors->first('txtnombre') }}</small>
        </div>
        <div class="mb-3">
          <label for="Apellido" class="form-label"> {{__('Apellido:')}}</label>
          <input type="text" class="form-control" name="txtapellido" value="{{ old('txtapellido', $cliente->apellido) }}">
          <small  class="text-danger fst-italic">{{ $errors->first('txtapellido') }}</small>
        </div>
        <div class="mb-3">
          <label for="correo" class="form-label"> {{__('Correo:')}} </label>
          <input type="text" class="form-control" name="txtcorreo" value="{{ old('txtcorreo', $cliente->correo) }}">
          <small  class="text-danger fst-italic">{{ $errors->first('txtcorreo') }}</small>
        </div>
        <div class="mb-3">
          <label for="telefono" class="form-label"> {{__('Telefono:')}} </label>
          <input type="text" class="form-control" name="txttelefono" value="{{ old('txttelefono', $cliente->telefono) }}">
          <small  class="text-danger fst-italic">{{ $errors->first('txttelefono') }}</small>
        </div>
        <div class="card-footer text-muted">
          <div class="d-grid gap-2 mt-2 mb-1">
            <button type="submit" class="btn btn-success btn-sm"> {{__('Guardar Cliente')}} </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

{{-- Finaliza Tarjeta con formulario --}}

@endsection