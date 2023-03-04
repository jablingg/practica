
@extends('layouts.app')

@section('content')

<h1>Корзина</h1>
    @foreach ($p as $j)
<div>
            <div class="catalog-item">
                <img src="{{$j->catalogs->img}}">
                <p class="catalog-item-name">{{ $j->catalogs->name}}</p>
                <p class="catalog-item-price">{{ $j->catalogs->price}}</p>
                    <a href="/public/basket/{{$j->id}}/delete" class="btn btn-primary">удалить</a>
            </div>
</div>            
            @endforeach

@endsection
