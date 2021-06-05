@extends('layout')
@section('title','Portafolio') 
@section('content')
    <h1>Projects</h1>  
    <a href="{{route('projects.create')}}">Nuevo Proyecto</a>
    <ul>        
        @forelse($projects as $project)            
            <li>
                <a href="{{route('projects.show',$project)}}">{{$project->title}}</a>
                <br>
                <small>{{$project->descripcion}}</small><br>
                {{$project->created_at->format('Y-m-d')}}<br>
                {{$project->created_at->diffForHumans()}}<br>
            </li>
        @empty
            <li>No hay proyectos</li>
        @endforelse
    </ul>
    {{$projects->links()}}
@endsection