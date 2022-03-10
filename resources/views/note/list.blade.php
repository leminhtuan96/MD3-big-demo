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
<a href="{{route('note.create')}}">Create</a>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
        <th>Type_id</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($notes as $key=>$note)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$note->title}}</td>
            <td>{{$note->content}}</td>
            <td>{{$note->type_id}}</td>
            <td><a href="{{route('note.show',$note->id)}}">Detail</a></td>
            <td><a href="{{route('note.update',$note->id)}}">Update</a></td>
            <td><a onclick="return confirm('Are you sure ????')" href="{{route('note.destroy',$note->id)}}">Delete</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
