@extends('layouts.app')

@section('content')
@foreach ($a as $b)
    <img src="{{ $b->img }}" width="400px" height="400px">
    <h1>{{ $b->name }}</h1>
    <h1>{{ $b->surname }}</h1>
    @endforeach
@endsection
