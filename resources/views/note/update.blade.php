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
<form action="{{route("note.update",$note->id)}}" method="post">
    @csrf
    <input type="text" name="title" placeholder="nhap title" value="{{$note->title}}">
    <input type="text" name="content" placeholder="nhap content" value="{{$note->content}}">
    <input type="text" name="type_id" placeholder="nhap type_id" value="{{$note->type_id}}">
    <button>Update</button>
</form>
</body>
</html>
