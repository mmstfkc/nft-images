@extends('app')
@section('title')
    <title>Ek Sayfa</title>
@endsection

@section('content')
    <div class="div">
        <a href="{{route('index')}}"><input type="button" value="Ana Sayfa"></a><br>
        <h1>Görselin eklendi. İşte burada.</h1>
        <a href="{{"https://". $r['value']['cid'].".ipfs.dweb.link"}}">{{"https://". $r['value']['cid'].".ipfs.dweb.link"}}</a><br><br>
        <img src="{{"https://". $r['value']['cid'].".ipfs.dweb.link" }}" alt="asd">
    </div>
@endsection

