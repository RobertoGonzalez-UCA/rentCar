@extends('layouts.layout')

@section('content')
<div id="central">
    <h1>Anuncios</h1>
    <div class="results">
        @if(Session::get('success'))
            <div class="alert-success alert">
                {{Session::get('success')}}
            </div>
        @endif

        @if(Session::get('fail'))
            <div class="alert-danger alert">
                {{Session::get('fail')}}
            </div>
        @endif
        </div>
    @foreach($rows as $row)
        <div class="product">
            <img src="../{{$row->image}}" alt="Vehículo">
            <h2>{{ucfirst($row->brand)}} {{ucfirst($row->model)}}</h2>
            <p>{{$row->price}} €/día</p>
            <a href="{{route('delete.rent', ['rent'=>$rent->rentid])}}" class="button">Eliminar</a>
        </div>
    @endforeach

    </div>
    </div>

    <div class="pagination">{{$rents->render()}}</div>

<script>
    document.getElementById("login").style.display = "none";
</script>


@endsection