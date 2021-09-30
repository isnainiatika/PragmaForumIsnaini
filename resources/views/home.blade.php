<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pragma | Forum</title>
</head>

<body>
    <h1> Halaman Forum</h1>
    @auth
    Welcome back, {{auth()->user()->name}}
    <form action="/logout" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
    <!-- <a href="">logout</a> -->
    @else
    <a href="/login"></a>
    @endauth
</body>

</html>