@extends('layouts.master')
@section('header')
    @parent
    <h2>{{$titulo}}</h2>
@endsection
@section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <p>{{date('d-m-Y')}}</p>
    </div>
@endsection
