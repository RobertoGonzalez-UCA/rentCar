@extends('layouts.layout')

@section('content')
<div id="central">
    <h1>Mis alquileres</h1>
    @foreach($rows as $row)
        <div class="product">
            <img src="{{$row->image}}" alt="">
            <h2>{{ucfirst($row->brand)}} {{ucfirst($row->model)}}</h2>
            <a href="{{route('showrent', ['rent'=>$row->rentid])}}" class="button">Más información</a>
            <a href="{{route('delete.rent', ['rent'=>$row->rentid])}}" class="button btn-danger">Cancelar</a>
        </div>
    @endforeach
    </div>
    </div>
    <div class="pagination">{{$rows->render()}}</div>
</div>
@endsection