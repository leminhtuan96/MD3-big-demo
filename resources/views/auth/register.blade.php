<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    @csrf
    <input type="text" name="name" placeholder="nhap ten">
    <input type="email" name="email" placeholder="nhap email">
    <input type="password" name="password" placeholder="nhap password">
    <input type="password" name="confirmPassword" placeholder="nhap lai password">
    <button>Register</button>
    @if(\Illuminate\Support\Facades\Session::has('msg'))
        <p style="color: red">{{\Illuminate\Support\Facades\Session::get('msg')}}</p>
    @endif
</form>
</body>
</html>
