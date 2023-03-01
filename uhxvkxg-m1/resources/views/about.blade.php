@extends('layouts.app')
@section('content')

    <div class="slaiders">
        <h1>Улучшай свою игру c</h1>
        <div id="carouselExampleIndicators" class="carousel slide">
           
            <div class="carousel-inner">
                @foreach ($a as $b)
                    @if ($loop -> first)
                        <div class="carousel-item active">
                            <img  src="{{ $b -> img }}" class="d-block w-100" alt="{{ $b -> id }}" >
                            <p class="catalog-item-name">{{ $b->name }}</p>
                        </div>
                    @else
                        <div class="carousel-item">
                            <img  src="{{ $b -> img }}"  class="d-block w-100"   alt="{{ $b -> id }}">
                            <p class="catalog-item-name">{{ $b->name }}</p>
                        </div>
                    @endif
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Следующий</span>
            </button>
        </div>
    </div>


    
@endsection
