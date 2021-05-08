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
    @foreach($ads as $ad)
        <div class="product">
            <img src="../{{$ad->image}}" alt="Vehículo">
            <h2>{{$ad->brand}} {{$ad->model}}</h2>
            <p>{{$ad->price}} €/día</p>
            <a href="{{route('update_form.ad', ['ad'=>$ad->adid])}}" class="button">Actualizar</a>
        </div>
    @endforeach
</div>

<script>
    document.getElementById("login").style.display = "none";
</script>
@endsection