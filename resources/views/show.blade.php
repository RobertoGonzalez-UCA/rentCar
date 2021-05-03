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
        <form>
            <label for="start">Desde:</label>
            <input type="date" id="start" name="start-rent" value="2021-07-22" min="2021-01-01" max="2035-12-31">
            <label for="start">Hasta:</label>
            <input type="date" id="start" name="end-rent" value="2021-07-22" min="2021-01-01" max="2035-12-31">
            <button type="submit" class="button">Confirmar alquiler</button>
        </form>
    </div>
</div>
@endsection