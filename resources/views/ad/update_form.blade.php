<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Actualizar anuncio</title>
</head>
<body>
    
    <div class="container">
    
        <div class="row" style="margin-top: 45px;">
            <div class="col-md-4 col-md-offset-4">
                <h4>Actualizar anuncio</h4>
                <hr>
                <form action="{{ route('update_put.ad', ['ad' => $ad->adid]) }}" method="POST" enctype="multipart/form-data">
                @csrf

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
                    <div class="form-group">
                        <label for="type">Tipo</label>
                        <select class="form-control" name="type" value="{{old('type')}}">
                            <option value="{{ $ad->type }}" hidden>
                                @switch($ad->type)
                                    @case('car')
                                        Coche
                                        @break
                                    @case('motorbike')
                                        Motocicleta
                                        @break
                                    @case('truck')
                                        Camión
                                        @break
                                    @default
                                        Desconocido
                                @endswitch
                            </option>
                            <option value="car">Coche</option>
                            <option value="motorbike">Motocicleta</option>
                            <option value="truck">Camión</option>
                        </select>
                        <span class="text-danger">@error('type'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="type">Marca</label>
                        <select class="form-control" name="brand" value="{{old('brand')}}">
                        <option value="{{ $ad->brand }}" hidden>
                        @switch($ad->brand)
                                    @case('audi')
                                        Audi
                                        @break
                                    @case('bmw')
                                        BMW
                                        @break
                                    @case('mercedes')
                                        Mercedes
                                        @break
                                    @case('yamaha')
                                        Yamaha
                                        @break
                                    @case('kawasaki')
                                        Kawasaki
                                        @break
                                    @case('volkswagen')
                                        Volkswagen
                                        @break
                                    @default
                                        Desconocido
                                @endswitch
                        </option>
                            <option value="audi">Audi</option>
                            <option value="bmw">BMW</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="yamaha">Yamaha</option>
                            <option value="kawasaki">Kawasaki</option>
                            <option value="volkswagen">Volkswagen</option>
                        </select>
                        <span class="text-danger">
                            @error('brand'){{$message}} @enderror
                        </span>                    
                    </div>
                    <div class="form-group">
                        <label for="model">Modelo</label>
                        <input type="text" class="form-control" name="model" value="{{ $ad->model }}">
                        <span class="text-danger">
                            @error('model'){{$message}} @enderror
                        </span>                    
                    </div>
                    <div class="form-group">
                        <label for="license_plate">Matrícula</label>
                        <input type="text" class="form-control" name="license_plate" value="{{ $ad->license_plate }}"> 
                        <span class="text-danger">
                            @error('license_plate'){{$message}} @enderror
                        </span>                    
                    </div>
                    <div class="form-group">
                        <label for="price">Precio (€/día)</label>
                        <input type="number" class="form-control" name="price" min="0" value="{{ $ad->price }}">
                        <span class="text-danger">
                            @error('price'){{$message}} @enderror
                        </span>                    
                    </div>
                    <div class="form-group">
                        <label for="color">Color</label>
                        <input type="text" class="form-control" name="color" value="{{ $ad->color }}">
                        <span class="text-danger">
                            @error('color'){{$message}} @enderror
                        </span>                    
                    </div>
                    <div class="form-group">
                        <label for="image">Imagen</label>
                        <input type="file" class="form-control-file" id="image" name="image" value="$ad->image">
                        <span class="text-danger">
                            @error('password'){{$message}} @enderror
                        </span>                    
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Actualizar</button>
                    </div>              
                </form>
                
                <br>
                <a href="/menu" class="btn btn-success btn-lg " role="button" aria-pressed="true">Volver al inicio</a>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>