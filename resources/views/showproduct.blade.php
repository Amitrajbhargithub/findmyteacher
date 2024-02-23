<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>show all data</h1>
    <table border="1">
            <tr>
                <th>Name</th>
                <th>description</th>
                <th>View</th>
                <th>Download</th>
            </tr>
        @foreach($data as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
                <td><a href="{{url('view',$item->id)}}">View</a></td>
                <td><a href="{{url('/download',$item->file)}}">Download</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>