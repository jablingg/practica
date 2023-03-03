
@extends('layouts.app')

@section('content')


        <div class="catalog">
            @foreach ($a as $b)
            <div class="catalog-item">
                <img class="logs" src="{{ $b->img }}">
                <p class="catalog-item-name">{{ $b->name }}</p>
                <p class="catalog-item-price">{{ $b->price }}</p>
                <a class="catalog-item-links" href="/public/catalog/{{$b->id}}"></a>
            </div>
            @endforeach
        </div>

@endsection
