<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
</head>
<body>
<div style="margin:50px; background-color:turquoise; height:25%; width:25%">
    <h1>Ana Sayfadasın</h1>
    <form action="{{route('look')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="file">
        <input type="submit" value="Ekle">
    </form>
</div>
<div style="margin:50px; background-color:red; height:25%; width:50%">
    <form method="post" action="{{route('delete')}}">
        <table>
            @foreach($r as $k => $res)
                <tr>
                    <th><img src="{{"https://". $r[$k]['cid'].".ipfs.dweb.link" }}" alt="image" style="height:25%; width:50%"></th>
                    <td>{{ $r[$k]['cid'] }}</td>
                </tr>
            @endforeach
        </table>
    </form>
</div>

</body>
</html>
