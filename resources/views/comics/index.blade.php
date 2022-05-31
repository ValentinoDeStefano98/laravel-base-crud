@extends('layouts.layout')

@section('content')

    <h1 class="text-primary text-center">Boolean-Comics</h1>

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
                    <td>{{$comic->description}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                </tr>
            @empty
                <h3>Nessun fumetto presente al momento</h3>
            @endforelse
        </tbody>
    </table>

    @forelse ($comics as $comic)

        <h1>{{$comic -> title}}</h1>

    @empty
        <h2>Il database è vuoto</h2>

    @endforelse
@endsection