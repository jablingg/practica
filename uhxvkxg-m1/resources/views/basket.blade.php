
@extends('layouts.app')

@section('content')

<h1>Корзина</h1>

<div>
    @foreach ($p as $j)

            <div class="catalog-item">
                <img src="{{$j->products->img}}" alt="*">
                
                <p class="catalog-item-name">{{ $j->products->name}}</p>
                <p class="catalog-item-price">{{ $j->products->price}}руб.</p>
                <p class="catalog-item-price">{{$j->quantity}}шт.</p>
                    <button type="submit" class="btn btn-primary"><a class="nav-link" href="/public/basket/{{$j->id}}/delete"> Удалить</a></button>
                    <form action="{{ route('cartUpadate', $j->id) }}" method="POST">
                            @csrf
                            <div>
                                <button type="submit" name="quantity" class="btn btn-primary" value="{{ $j->quantity - 1 }}"><a class="nav-link">-</a></button>
                                {{$j->quantity}}шт.
                                <button type="submit" class="btn btn-primary" name="quantity" value="{{ $j->quantity + 1 }}"> <a class="nav-link">+</a></button>
                            </div>
                        </form>

                </div>
                        @endforeach

</div>

@endsection
