@extends('layouts.master')
@section('header')
    @parent
    <h2>{{$titulo}}</h2>
@endsection

@section('content')
<ul>
    @foreach ($libros as $libro)
        <li>{{$libro}}</li>
    @endforeach
</ul>
@endsection




