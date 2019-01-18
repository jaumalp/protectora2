@extends('otros.plantilla')

@section('title')ADMINISTRAR @endsection

@section('content')
    <!-- ADMIN -->
    <h4 class="text-center pb-2">Bienvenid@ {{\Illuminate\Support\Facades\Auth::user()->name}}</h4>
    <h5 class="text-center">¿Que deseas hacer?</h5>

    <div class="mx-2 mt-4">
        <p class="text-center"><a href="/salir">Añadir una nueva mascota</a></p>
        <p class="text-center"><a href="/salir" class="text-danger">SALIR</a></p>
    </div>

@endsection
