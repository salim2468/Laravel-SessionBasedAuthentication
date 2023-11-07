<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <form action="/register" method="post">
        @csrf
        <div class="container">
            <h4>Register</h4>
            @if($errors->any())
            <div class="error-bg">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <label> User Name</label>
            <input type="text" name="name"/>
            <label> Email</label>
            <input type="text" name="email"/>
            <label> Password</label>
            <input type="text" name="password"/>
            <button class="button-23">Register</button>
        </div>
    </form>

</body>

</html>