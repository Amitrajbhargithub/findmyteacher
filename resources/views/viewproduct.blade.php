<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{$data->name}}
    {{$data->description}}
    <iframe src="/assets/{{$data->file}}" height="400" width="400"></iframe>
</body>
</html>