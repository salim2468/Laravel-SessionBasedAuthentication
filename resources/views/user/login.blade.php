<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <form action="/login" method="POST">
        @csrf
        <div class="container">
            <h4>Login</h4>
            
            @if (session('err'))
                <div class="error-bg">
                    {{ session('err') }}
                </div>
            @endif
            <label> Email</label>
            <input type="text" name="email"/>
            @error('email')
                    <div>
                        <li class="error-text">
                            {{$message}}
                        </li>
                    </div>
                    @enderror
            <label> Password</label>
            <input type="text" name="password"/>
            @error('password')
                    <div >
                        <li class="error-text">
                            {{$message}}
                        </li>
                    </div>
                    @enderror
            <button class="button-23">Login</button>
        </div>
    </form>

</body>

</html>