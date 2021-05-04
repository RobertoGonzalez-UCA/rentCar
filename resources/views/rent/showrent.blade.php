@extends('layouts.layout')

@section('content')  
<div id="central">
    <h1>Ver alquiler</h1>
    <div class="product">
        <p>Precio: {{$rent->bail}}</p>
        <p>Desde: {{$rent->date}}</p>
        <p>Hasta: {{$rent->date_expire}}</p>
    </div>
</div>
@endsection