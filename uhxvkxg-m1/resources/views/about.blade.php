@extends('layouts.app')

@section('content')
<h1>Девиз компании</h1>
            <p>Новинки компании</p>
<link rel="stylesheet" type="text/css" src="/public/css/style.css">
<div class="aboutas">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../public/13014.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item active">
            <img src="../public/13hq.jfif" class="d-block w-100" alt="...">
          </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>
@endsection