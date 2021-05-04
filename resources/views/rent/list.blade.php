@extends('layouts.layout')

@section('content')
<div id="central">
    <h1>Más solicitados</h1>
    @foreach($rents as $rent)
        <div class="product">
            <h2>{{$rent->adid}} {{$rent->uid}}</h2>
            <p>{{$rent->bail}}€/día</p>
            <a href="{{route('showrent', ['rent'=>$rent->rentid])}}" class="button">Ver más información</a>
        </div>
    @endforeach
    </div>
    </div>
    <div class="pagination">{{$rents->render()}}</div>
</div>
@endsection