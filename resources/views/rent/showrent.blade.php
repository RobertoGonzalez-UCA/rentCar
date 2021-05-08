@extends('layouts.layout')

@section('content')  
<div id="central">
    <h1>Ver alquiler</h1>
    <div class="product">
        <img src="../{{$ad->image}}" alt="">
        <p>Marca: {{ucfirst($ad->brand)}}</p>
        <p>Modelo: {{ucfirst($ad->model)}}</p>
        <p>Precio: {{$ad->price}} €/día</p>
        <p>Matrícula: {{$ad->license_plate}}</p>
        <p>Color: {{ucfirst($ad->color)}}</p>
        <p>Fianza: {{$rent->bail}} €</p>
        <p>Desde: {{$rent->date}}</p>
        <p>Hasta: {{$rent->date_expire}}</p>
    </div>
</div>
@endsection