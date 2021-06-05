@extends('layout')
@section('title','Portafolio') 
@section('content')
    <h1>Projects</h1>  
    <ul>        
        @forelse($projects as $item)            
            <li>
                {{$item->title}}<br>
                <small>{{$item->descripcion}}</small><br>
                {{$item->created_at->format('Y-m-d')}}<br>
                {{$item->created_at->diffForHumans()}}<br>
            </li>
        @empty
            <li>No hay proyectos</li>
        @endforelse
    </ul>
    {{$projects->links()}}
@endsection