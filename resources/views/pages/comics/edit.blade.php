@extends('layout.app');

@section('title')
laravel dc comics | Comics Edit
@endsection

@section('content')

<div class="container">

    <h1>
        Modifica il fumetto
    </h1>

    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach($errors->all() as $error) 
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>

    @endif

    {{-- Form --}}

    <form action="{{ route( 'comics.update', $comic ) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label class="form-label" for="">Title</label>
            <input class="form-control  @error('title') is-invalid @enderror" type="text" name="title" value="{{ old('title') ?? $comic->title }}">
            @error('title')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label class="form-label" for="">Description</label> <br>
            <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ old('description') ?? $comic->description }}</textarea>
        </div>

        <div class="form-group">
            <label class="form-label" for="">Thumb</label>
            <input class="form-control" type="text" name="thumb" value="{{ old('thumb') ?? $comic->thumb }}">
        </div>

        <div class="form-group">
            <label class="form-label" for="">Price</label>
            <input class="form-control" type="number" name="price" value="{{ old('price') ?? $comic->price }}">
        </div>

        <div class="form-group">
            <label class="form-label" for="">Series</label>
            <input class="form-control" type="text" name="series" value="{{ old('series') ?? $comic->series }}">
        </div>

        <div class="form-group">
            <label class="form-label" for="">Sale Date</label>
            <input class="form-control" type="date" name="sale_date" value="{{ old('sale_date') ?? $comic->sale_date }}">
        </div>

        <div class="form-group">
            <label class="form-label" for="">Type</label>
            <input class="form-control" type="text" name="type" value="{{ old('type') ?? $comic->type }}">
        </div>

        <button type="submit" class="btn btn-primary">Crea fumetto</button>


    </form>


</div>

@endsection