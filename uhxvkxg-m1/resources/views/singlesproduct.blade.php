@extends('layouts.app')
@section('content')
        <div>
        <div class="catalog-item">
                <img class="logs" src="{{ $a->img }}">
                <p class="catalog-item-name">Наименование:{{ $a->name }}</p>
                <p class="catalog-item-price">Цена:{{ $a->price }}</p>
                <p class="catalog-item-price">Описание:{{ $a->description }}</p>
                <p class="catalog-item-price">Год выпуска:{{ $a->production_yaer}}</p>
            </div>
        </div>  
@endsection
