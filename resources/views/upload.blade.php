<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>upload file</h1>
    @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    @if(session('fail'))
        <h1>{{session('fail')}}</h1>
    @endif
    <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Product name" />
        <input type="text" name="description" placeholder="product description"/>
        <input type="file" name="file">
        <input type="submit" value="save">
    </form>
</body>
</html>