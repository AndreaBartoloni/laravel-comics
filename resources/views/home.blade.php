{{-- 
@php 
    $comics = include('src/config/data.php');
@endphp --}}

@extends('layout.app')

@section('content')
    @foreach($comics as $comic)

        <li>{{$comic['title']}}</li>

    @endforeach

@endsection