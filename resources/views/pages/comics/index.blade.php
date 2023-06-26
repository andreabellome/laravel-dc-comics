
@extends('layout.app');

@section('title')
    laravel dc comics | Comics Index
@endsection

@section('content')
    <h1>
        Tutti i fumetti
    </h1>

    @forelse( $comics as $elem )
        <a href=" {{ route('comics.show', ['comic'=>$elem->id]) }} ">
            <h6>
                {{ $elem->title }}
            </h6>
        </a>
        <a class="btn btn-warning" href="{{ route( 'comics.edit', $elem ) }}">Edit</a>


        <form action="{{ route('comics.destroy', $elem) }}" method="POST">


            @csrf
            @method('DELETE')

            <button onclick="return cancellaElem()" type="submit" class="btn btn-danger">Destroy</button>    
        </form>
        
    @empty
        <h2>
            Non ci sono record nel DB
        </h2>
    @endforelse

@endsection

@section('scripts-custom')

    function cancellaElem(){
        return confirm('Sei sicuro di voler cancellare il fumetto?');
    }

@endsection