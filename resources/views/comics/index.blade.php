@extends('layouts.layout')

@section('content')

    <h1 class="text-primary text-center">Boolean-Comics</h1>

    {{-- messaggio di avvenuta eliminazione --}}
    @if (session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
            <th scope="col">Copertina</th>
            <th scope="col">Titolo</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Serie</th>
            <th scope="col">Rilascio</th>
            <th scope="col">Tipo</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($comics as $comic)
                <tr>
                    <td>
                        <img src="{{$comic->thumb}}" alt="copertina" class="img-fluid">
                    </td>
                    <td>{{$comic->title}}</td>
                    <td class="w-50">{{$comic->description}}</td>
                    <td class="w-25">{{$comic->price}}$</td>
                    <td>{{$comic->series}}</td>
                    <td class="w-25">{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                    <td>
                        <a href="{{route('comics.show', $comic->id)}}" type="button" class="btn btn-primary">Dettagli</a>
                    </td>
                    <td>
                        <a href="{{route('comics.edit', $comic->id)}}" type="button" class="btn btn-warning">Modifica</a>
                    </td>
                    <td>
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="delete-form" data-name="{{$comic->title}}">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit">Elimina</button>
                        </form>
                        
                    </td>
                </tr>
            @empty
                <h3>Nessun fumetto presente al momento</h3>
            @endforelse
        </tbody>
    </table>
@endsection

@section('delete-message')
    <script src="{{asset('js/deleteMessage.js')}}"></script>
@endsection