@extends('layout.app');

@section('title')
laravel dc comics | Comics Create
@endsection

@section('content')


<div class="container">

    <h1>
        Crea il fumetto
    </h1>

    {{-- Form --}}

    <form action="{{ route( 'comics.store' ) }}" method="POST">
        @csrf


        <div class="form-group">
            <label class="form-label" for="">Title</label>
            <input class="form-control" type="text" name="title">
        </div>

        <div class="form-group">
            <label class="form-label" for="">Description</label> <br>
            <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label class="form-label" for="">Thumb</label>
            <input class="form-control" type="text" name="thumb">
        </div>

        <div class="form-group">
            <label class="form-label" for="">Price</label>
            <input class="form-control" type="number" name="price">
        </div>

        <div class="form-group">
            <label class="form-label" for="">Series</label>
            <input class="form-control" type="text" name="series">
        </div>

        <div class="form-group">
            <label class="form-label" for="">Sale Date</label>
            <input class="form-control" type="date" name="sale_date">
        </div>

        <div class="form-group">
            <label class="form-label" for="">Type</label>
            <input class="form-control" type="text" name="type">
        </div>

        <button type="submit" class="btn btn-primary">Crea fumetto</button>


    </form>


</div>

@endsection