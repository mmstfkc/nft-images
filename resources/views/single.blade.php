@extends('app')
@section('title')
    <title>Single</title>
@endsection

@section('content')
    <div class="div">
        <a href="{{route('index')}}"><input type="button" value="Ana Sayfa"></a><br><br>
        <form action="{{route('getImage')}}" method="post">
            @csrf
            <input type="text" name="cid" id="cid"/>
            <input type="submit" value="Getir"/>
        </form>
    </div>
@endsection

