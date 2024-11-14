@extends('layouts.plantilla')

@section('titulo','Componentes Blade')
@section('contenido')

<x-Card encabezado="Componente" titulo="Dinamico" textoBoton="Guardar"> 
    Soy el contenido del primero
</x-Card>
<x-Card encabezado="Componente 2" titulo="Dinamico 2" textoBoton="NO Guardar">
    Soy el contenido del segundo
</x-Card> 
<x-Alert tipo="danger"> Rojo </x-Alert>
<x-Alert tipo="warning"> Amarillo </x-Alert>
@endsection 