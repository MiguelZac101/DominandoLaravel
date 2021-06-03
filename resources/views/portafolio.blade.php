@extends('layout')
@section('title','Portafolio') 
@section('content')
    <h1>Portafolio</h1>  
    <ul>        
        @forelse($portafolio as $item)
            <pre>{{var_dump($loop)}}</pre><!--loop: trae información del loop-->
            <li>{{$item['title']}} <pre>{{$loop->last?'es el último':''}}</pre></li>
        @empty
            <li>No hay proyectos</li>
        @endforelse
    </ul>
<!--
    otros 
    @@for()
    @@endfor

    @@while()
    @@endwhile

    @@switch($type)        
    @@endswitch
-->
@endsection