<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (Session::has('error'))
        {{Session::get('error')}}
    @endif
    <form action="" method="POST">
        @csrf
        Email:
        <input type="email" name="email">
        Password:
        <input type="password" name="password">
        <br>
        <input type="submit" name="submit" value="login">
    </form>
</body>
</html>
