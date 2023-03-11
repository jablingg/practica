
@extends('layouts.app')

@section('content')


        <div class="catalog">
            <p>Каталог</p>
            <div class="catalog_sort">
                <p>Сортировка:</p>
                <div class="sort_">
                    По году:
                    <a class="nav-links" href="{{ url('/catalog/sort/production_yaer/asc') }}">По возрастанию</a>
                    <a class="nav-links" href="{{ url('/catalog/sort/production_yaer/desc') }}">По убыванию</a>
                </div>
                <div class="sort_">
                    По наименованию:
                    <a class="nav-links" href="{{ url('/catalog/sort/name/asc') }}">По возрастанию</a>
                    <a class="nav-links" href="{{ url('/catalog/sort/name/desc') }}">По убыванию</a>
                </div>
                <div class="sort_">
                    По цене:
                    <a class="nav-links" href="{{ url('/catalog/sort/price/asc') }}">По возрастанию</a>
                    <a class="nav-links"  href="{{ url('/catalog/sort/price/desc') }}">По убыванию</a>
                </div>
            </div>
            @foreach ($a as $b)
            <div class="catalog-item">
                <a class="catalog-item-links" href="/public/catalog/{{$b->id}}"></a>
                <img src="{{ $b->img }}">
                <p class="catalog-item-name">{{ $b->name }}</p>
                <p class="catalog-item-price">{{ $b->price }}руб.</p>

                <button type="submit" class="btn btn-primary"><a class="nav-link" href="/public/basket/{{$b -> id  }}"> Заказать</a></button>
            </div>
            @endforeach
        </div>
      
        
@endsection
