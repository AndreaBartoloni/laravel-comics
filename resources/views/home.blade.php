

@extends('layouts.app')

@section('content')
    @foreach($comics as $comic)

        <li>{{$comic}}</li>

    @endforeach
@endsection