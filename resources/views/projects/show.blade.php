@extends('layout')
@section('title','Project | '.$project->title) 
@section('content')
    <h1>{{$project->title}}</h1>     
    <p>{{$project->descripcion}}</p>
    <p>{{$project->created_at->diffForHumans()}}</p>
    <a href="{{route('projects.edit',$project)}}">Editar</a> 
@endsection
