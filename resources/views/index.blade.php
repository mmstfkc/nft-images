<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
</head>
<body>
<div style="margin:50px;">
    <h1>Ana Sayfadasın</h1>
    <form action="{{route('look')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="file"><br><br>
        <input type="submit" value="Click">
    </form>
</div>
</body>
</html>
