@extends('layout')
@section('title','Contact') 
@section('content')
    <h1>Contact</h1>  
    <form method="POST" action="{{ route('contact')}}">
        @csrf
        <input type="text" name="name" value="{{ old('name') }}" placeholder="Nombre..."><br>
        {!! $errors->first('name','<small>:message</small><br>') !!}

        <input type="text" name="email" value="{{ old('email') }}" placeholder="Email..."><br>
        {!! $errors->first('email','<small>:message</small><br>') !!}
        
        <button>Enviar</button>
    </form> 
@endsection