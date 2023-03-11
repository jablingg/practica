@extends('layouts.app')

@section('content')
<div class="forn-admin">
<div class="form">
<form class="form-horizontal" role="form" method="POST" action="{{route ('add-form') }}" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <div class="form-group">
    <label for="name" class="col-sm-2 control-label"></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Наименование" name="name">
    </div>
  </div>
  <p>
  <div class="form-group">
    <label for="img`" class="col-sm-2 control-label">Изображение</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" name="img">
    </div>
  </div>

  <div class="form-group">
    <label for="price" class="col-sm-2 control-label"></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Цена" name="price">
    </div>
  </div>

  <div class="form-group">
    <label for="contry" class="col-sm-2 control-label"></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Страна производства" name="contry">
    </div>
  </div>

  <div class="form-group">
    <label for="production_yaer" class="col-sm-2 control-label"></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Год производства" name="production_yaer">
    </div>
  </div>

  <div class="form-group">
    <label for="description" class="col-sm-2 control-label"></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Описание" name="description">
    </div>
  </div>

  <div class="form-group">
    <label for="category" class="col-sm-2 control-label"></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Категория" name="category">
    </div>
  </div>

   <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default btn-sm">отправить</button>
    </div>
  </div>
</form>
</div>

@endsection
