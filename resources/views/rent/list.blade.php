@extends('layouts.layout')

@section('content')
<div id="central">
    <h1>Mis alquileres</h1>
    @foreach($rows as $row)
        <div class="product">
            <img src="{{$row->image}}" alt="">
            <h2>{{$row->adid}} {{$row->uid}}</h2>
            <p>{{$row->bail}}€/día</p>
            <a href="{{route('showrent', ['rent'=>$row->rentid])}}" class="button">Ver más información</a>
        </div>
    @endforeach
    </div>
    </div>
    <div class="pagination">{{$rows->render()}}</div>
</div>
@endsection