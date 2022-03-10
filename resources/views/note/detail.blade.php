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
<a href="{{route("note.index")}}">Trang chu</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
        <th>type_id</th>
    </tr>
    <tr>
        <td>{{$note->id}}</td>
        <td>{{$note->title}}</td>
        <td>{{$note->content}}</td>
        <td>{{$note->type_id}}</td>
    </tr>
</table>
</body>
</html>
