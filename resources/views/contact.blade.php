@extends('layout')
@section('title','Contact') 
@section('content')
    <h1>Contact</h1>  
    <form method="POST" action="{{ route('contact')}}">
        @csrf
        <input type="text" name="name" value="" placeholder="Nombre...">
        <input type="email" name="email" placeholder="Email...">
        <button>Enviar</button>
    </form> 
@endsection