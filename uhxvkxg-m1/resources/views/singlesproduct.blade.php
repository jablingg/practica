@extends('layouts.app')
@section('content')
        <div>
        <div class="catalog-item">
                <img class="logs" src="{{ $a->img }}">
                <p class="catalog-item-name">{{ $a->name }}</p>
                <p class="catalog-item-price">{{ $a->price }}</p>
                <p class="catalog-item-price">{{ $a->description }}</p>
                <p class="catalog-item-price">{{ $a->production_yaer}}</p>
            </div>
        </div>  
@endsection
