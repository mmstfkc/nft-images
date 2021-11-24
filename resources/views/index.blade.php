@extends('app')
@section('title')
    <title>Main</title>
@endsection

@section('content')
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
            <a href="{{route('metamask')}}">
                <input type="button" value="Metamask Login"/>
            </a>
        </form>
        <br>
    </div>
@endsection
