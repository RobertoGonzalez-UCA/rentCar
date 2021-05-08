@extends('layouts.layout')

@section('content')
<div id="central">
    <h1>Más populares</h1>
    @foreach($ads as $ad)
        <div class="product">
            <img src="{{$ad->image}}" alt="">
            <h2>{{$ad->brand}} {{$ad->model}}</h2>
            <p>{{$ad->price}}€/día</p>
            <a href="{{route('show', ['ad'=>$ad->adid])}}" class="button">Detalles</a>
        </div>
    @endforeach
    </div>
    </div>
    <div class="pagination">{{$ads->render()}}</div>
</div>
@endsection