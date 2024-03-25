<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
</head>

<body>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif


    <form action="/form" method="POST">
        @csrf
        <label for="">Username :@error('username')
                {{ $message }}
            @enderror <input type="text" name="username" id=""></label><br>
        <label for="">Password ::@error('password')
                {{ $message }}
            @enderror <input type="password" name="password" id=""></label><br>
        <input type="submit" value="Login">
    </form>
</body>

</html>
