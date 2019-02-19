@extends('template')

@section('title')
    Anotações
@stop

@section('content')
    <h1>Notas</h1>
    <lu>
        @foreach($notas as $nota)
        <li>{{ $nota }}</li>
        @endforeach
    </lu>
@stop