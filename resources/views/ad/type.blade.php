@extends('layouts.layout')

@section('content')
<div id="central">
    <h1>Más solicitados</h1>
    @foreach($ads as $ad)
        <div class="product">
            <img src="../{{$ad->image}}" alt="">
            <h2>{{ucfirst($ad->brand)}} {{ucfirst($ad->model)}}</h2>
            <p>{{$ad->price}} €/día</p>
            <a href="{{route('show', ['ad'=>$ad->adid])}}" class="button">Más información</a>
        </div>
    @endforeach
    </div>
    </div>
    <div class="pagination">{{$ads->render()}}</div>
    <div style="display: flex; justify-content: flex-end; ">
        <a  style="margin-right: 20px; margin-bottom: 20px; margin-top: 5px; color: white" href="/menu" class="btn btn-success btn-lg " role="button" aria-pressed="true">Volver al inicio</a>
    </div>
</div>
@endsection