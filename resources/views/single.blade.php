<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single</title>
    <link rel="stylesheet" href="{{ asset('try.css') }}">
</head>
<body>
<div class="div">
    <a href="{{route('index')}}"><input type="button" value="Ana Sayfa"></a><br><br>
    <form action="{{route('getImage')}}" method="post">
        @csrf
        <input type="text" name="cid" id="cid"/>
        <input type="submit" value="Getir"/>
    </form>
</div>
</body>
</html>
