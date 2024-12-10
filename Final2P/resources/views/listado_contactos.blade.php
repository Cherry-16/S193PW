@extends('layouts.plantillaNav')
@section('contenido')



    <h1 class="display-1 text-warning text-center"> Listado de Contactos </h1>
    <br>
    <a href="{{route('rutaForm')}}" class="btn btn-primary"> Regresa al formulario </a>
    <a href="{{route('rutaInicio')}}" class="btn btn-danger"> Regresa al inicio </a>


@endsection