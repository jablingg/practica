@extends('layouts.app')
@section('content')

<div class="abouts">
        Девиз бла бла бла
        @foreach ($a as $b)
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">

                    <div class="catalog-item">
                        <img class="d-block w-100" src="{{ $b->img }}">
                        <p class="catalog-item-name">{{ $b->name }}</p>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
            @endforeach
        </div>
    </div>
@endsection
