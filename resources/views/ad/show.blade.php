@extends('layouts.layout')

@section('content')  
<div id="central">
    <h1>Realizar alquiler</h1>
    <div class="product">
        <img src="../{{$ad->image}}" alt="">
        <p>Marca: {{$ad->brand}}</p>
        <p>Modelo: {{$ad->model}}</p>
        <p>Precio: {{$ad->price}} €/día</p>
        <p>Matrícula: {{$ad->license_plate}}</p>
        <p>Color: {{$ad->color}}</p>
        <form action="{{route('store')}}" method="POST">
            @if($errors->any())
            <div class="alert alert-danger">
            <h5>Errores</h3>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @csrf
            <label for="start">Desde: <input type="date" name="date" value="2021-07-22" min="2021-01-01" max="2035-12-31"></label>
            <label for="start">Hasta: <input type="date" name="date_expire" value="2021-07-22" min="2021-01-01" max="2035-12-31"></label>
            <input type="hidden" name="bail" value="{{$ad->price/4}}">
            <input type="hidden" name="adid" value="{{$ad->adid}}">
            <input type="hidden" name="uid" value="{{$LoggedUserInfo->id}}">
            <button type="submit" class="button">Confirmar alquiler</button>
        </form>
    </div>
</div>
@endsection