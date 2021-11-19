<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
    <link rel="stylesheet" href="{{ asset('try.css') }}">
</head>
<body>
<div class="div">
    <a href="{{route('index')}}"><input type="button" value="Ana Sayfa"></a>
    <table>
        @foreach($r as $k => $res)
            <tr>
                <th><img src="{{"https://". $r[$k]['cid'].".ipfs.dweb.link" }}" alt="image" class="div-image"></th>
                <td>{{ $r[$k]['cid'] }}</td>
            </tr>
        @endforeach
    </table>
</div>
s
</body>
</html>
