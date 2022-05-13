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
    @if (Session::has('success'))
        {{Session::get('success')}}
    @endif
    <form action="" method="POST">
        @csrf
        Name:
        <input type="text" name="name"><br>
        Email:
        <input type="email" name="email"><br>
        Password:
        <input type="password" name="password">
        <br>
        <input type="submit" name="submit" value="Signup">
    </form>
</body>
</html>
