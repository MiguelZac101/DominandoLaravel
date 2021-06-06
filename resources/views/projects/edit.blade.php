@extends('layout')
@section('title','Portafolio') 
@section('content')
    <h1>Editar proyecto</h1>  

    @include('parts.errores')

    <form method="POST" action="{{ route('projects.update',$project)}}">        
        @method('PATCH')
        @include('projects._form',['textBoton'=>"Actualizar"])
    </form> 
@endsection