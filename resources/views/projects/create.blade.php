@extends('layout')
@section('title','Portafolio') 
@section('content')
    <h1>Nuevo proyecto</h1>  
    <form method="POST" action="{{ route('projects.store')}}">
        @csrf
        <input type="text" name="title" value="{{ old('title') }}" placeholder="title..."><br>        

        <input type="text" name="url" value="{{ old('url') }}" placeholder="url..."><br>        

        <textarea name="descripcion" id="" cols="30" rows="10">{{ old('descripcion') }}</textarea><br>

        <button>@lang('Send')</button>
    </form> 
@endsection