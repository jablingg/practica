
@extends('layouts.app')

@section('content')


        <div class="catalog">
            @foreach ($a as $b)
            <div class="catalog-item">
                <a class="catalog-item-links" href="/public/catalog/{{$b->id}}"></a>
                <img src="{{ $b->img }}">
                <p class="catalog-item-name">{{ $b->name }}</p>
                <p class="catalog-item-price">{{ $b->price }}</p>

                <button type="submit" class="btn btn-primary"><a class="nav-link" href="/public/basket/{{$b -> id  }}"> Заказать</a></button>
            </div>
            @endforeach

        </div>

@endsection
