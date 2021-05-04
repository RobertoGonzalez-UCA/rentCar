@extends('layouts.layout')

@section('content')  
<div id="central">
    <h1>Más solicitados</h1>
    <div class="product">
        <img src="../{{$ad->image}}" alt="">
        <h2>{{$ad->brand}} {{$ad->model}}</h2>
        <p>{{$ad->price}}€/día</p>
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
            <label for="start">Desde:</label>
            <input type="date" name="date" value="2021-07-22" min="2021-01-01" max="2035-12-31">
            <label for="start">Hasta:</label>
            <input type="date" name="date_expire" value="2021-07-22" min="2021-01-01" max="2035-12-31">
            <input type="hidden" name="bail" value="{{$ad->price}}">
            <input type="hidden" name="adid" value="{{$ad->adid}}">
            <input type="hidden" name="uid" value="4">
            <button type="submit" class="button">Confirmar alquiler</button>
        </form>
    </div>
</div>
@endsection