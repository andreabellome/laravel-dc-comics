
@extends('layout.app');

@section('title')
    laravel dc comics | Comics Show
@endsection

@section('content')
    <h1>
        Singolo Fumetto
    </h1>

    <div class="container">

        <h3>
            {{ $singoloComic->title }}
        </h3>

    </div>

@endsection


