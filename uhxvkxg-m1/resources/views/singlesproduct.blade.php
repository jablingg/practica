@extends('layouts.app')
@section('content')
        <div class="single">
                <div class="single-item">
                        <img class="img_prod" src="{{ $a->img }}">
                        <p class="single-item-name">Наименование:{{ $a->name }}</p>
                        <p class="single-item-price">Описание:{{ $a->description }}</p>
                        <p class="single-item-price">Год выпуска:{{ $a->production_yaer}}</p>
                        <p class="single-item-price">Цена:{{ $a->price }}</p>
                        <button type="submit" class="btn btn-primary"><a class="nav-link" href="/public/basket/{{$a -> id  }}"> Заказать</a></button>
                </div>
        </div>
@endsection
