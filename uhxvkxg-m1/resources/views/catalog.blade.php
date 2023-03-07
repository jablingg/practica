
@extends('layouts.app')

@section('content')


        <div class="catalog">
            <div class="katkat">
                <button class="btn btn-sekondary dropdown-toggle" type="button" id="dropdownMenuButton1">
                    <a class="dropdown-item" href="{{url('/catalog')}}">Категории</a>
                </button>
                <ul class="drop-down" aria-labelledby=dropdownmenubutton1>
                    @foreach ($s as $c)
                    <li><a class="dropdown-item" href="{{url('/catalog/filter')}}/{{$c->id}}">{{$c->name}}</a></li>
                    @endforeach
                    <div class="dropdown-menu mb-5" >
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuBatton1" data-bs-toggle="dropdownMenu">сортировка</button>
                        <ul class="dropdown-menu " aria-labelledby="dropdownMenuBatton1">
                            <li><a class="dropdown-item" href="{{url('/catalog/sort')}}/production_yaer/desc">по году</a></li>
                            <li><a class="dropdown-item" href="{{url('/catalog/sort')}}/name/asc">по названию</a></li>
                            <li><a class="dropdown-item" href="{{url('/catalog/sort')}}/price/desc">по цене</a></li>

                        </ul>
                    </div>
            </div>
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
