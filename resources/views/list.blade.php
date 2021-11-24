@extends('app')
@section('title')
    <title>List</title>
@endsection

@section('content')
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
@endsection

