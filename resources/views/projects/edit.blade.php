@extends('layout')
@section('title','Portafolio') 
@section('content')
    <h1>Editar proyecto</h1>  

    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error )
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('projects.update',$project)}}">
        @csrf
        @method('PATCH')
        <input type="text" name="title" value="{{ old('title',$project->title) }}" placeholder="title..."><br>        

        <input type="text" name="url" value="{{ old('url',$project->url) }}" placeholder="url..."><br>        

        <textarea name="descripcion" id="" cols="30" rows="10">{{ old('descripcion',$project->descripcion) }}</textarea><br>

        <button>@lang('Actualizar')</button>
    </form> 
@endsection