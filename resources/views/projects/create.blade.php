@extends('layout')
@section('title','Portafolio') 
@section('content')
    <h1>Nuevo proyecto</h1>  

    @include('parts.errores')

    <form method="POST" action="{{ route('projects.store')}}">
        @include('projects._form',['textBoton'=>"Guardar"])
    </form> 
@endsection