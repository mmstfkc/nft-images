<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ek Sayfa</title>
    <link rel="stylesheet" href="{{ asset('try.css') }}">
</head>
<body>
<div class="div">
    <a href="{{route('index')}}"><input type="button" value="Ana Sayfa"></a><br>
    <h1>Görselin eklendi. İşte burada.</h1>
    <a href="{{"https://". $r['value']['cid'].".ipfs.dweb.link"}}">{{"https://". $r['value']['cid'].".ipfs.dweb.link"}}</a><br><br>
    <img src="{{"https://". $r['value']['cid'].".ipfs.dweb.link" }}" alt="asd">
</div>
</body>
</html>
