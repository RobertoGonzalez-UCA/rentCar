<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Registration</title>
</head>
<body>
    
    <div class="container">
    
        <div class="row" style="margin-top: 45px;">
            <div class="col-md-4 col-md-offset-4">
                <h4>User Register</h4>
                <hr>
                <form action="{{ route('auth.create') }}" method="post">
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
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{old('name')}}">
                        <span class="text-danger">@error('name'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="surname">Surname</label>
                        <input type="text" class="form-control" name="surname" placeholder="Enter surname" value="{{old('surname')}}">
                        <span class="text-danger">@error('surname'){{$message}} @enderror</span>                    </div>
                    <div class="form-group">
                        <label for="rol">Rol</label>
                        <input type="text" class="form-control" name="rol" placeholder="Enter rol" value="{{old('rol')}}">
                        <span class="text-danger">@error('rol'){{$message}} @enderror</span>                    </div>
                    <div class="form-group">
                        <label for="birth_day">Birth Day</label>
                        <input type="date" class="form-control" name="birth_day" value="{{old('birth_day')}}"> 
                        <span class="text-danger">@error('birth_day'){{$message}} @enderror</span>                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email" value="{{old('email')}}">
                        <span class="text-danger">@error('email'){{$message}} @enderror</span>                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password">
                        <span class="text-danger">@error('password'){{$message}} @enderror</span>                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary" placeholder="Enter password">Register</button>
                    </div>
                    <br>
                    <a href="login">I alredy have account!</a>
                </form>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>