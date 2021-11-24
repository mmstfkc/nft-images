@extends('app')
@section('title')
    <title>Single</title>
@endsection

@section('content')
    <div class="div">
        <a href="{{route('single')}}"><input type="button" value="Geri"></a><br>
        <p>{{$r}}</p>
    </div>
@endsection



