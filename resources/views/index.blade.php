<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
    <link rel="stylesheet" href="{{ asset('try.css') }}">
</head>
<body>
<div class="div">
    <h1>Ana Sayfa</h1>
    <form action="{{route('look')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="file"><br><br>
        <input type="submit" value="Ekle">
        <a href="{{route('list')}}">
            <input type="button" value="Listeleme"/>
        </a>
        <a href="{{route('single')}}">
            <input type="button" value="Tekli getirme"/>
        </a>
    </form>
    <br>
</div>
</body>
</html>
