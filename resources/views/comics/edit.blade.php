@extends('layouts.layout')

@section('content')

    <div class="container text-center">

        <h2 class="text-primary text-center py-4">Modifica il personaggio</h2>

        {{-- Errore validazione --}}

        @if ($errors->any())

            {{-- in caso di errori backend --}}
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif

        <form action="{{route('comics.update', $comic->id)}}" method="POST">

            @method('PUT')
            @csrf

            <div class="row">
                <div class="col-6 pb-4">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" id="title" class="form-control" name="title" value="{{$comic->title }}" required>
                </div>
                <div class="col-6 pb-4">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea type="text" id="description" class="form-control" name="description" required>{{$comic->description }}
                    </textarea>
                </div>
                <div class="col-6 pb-4">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" id="price" class="form-control" name="price" value="{{$comic->price }}" required>
                </div>
                <div class="col-6 pb-4">
                    <label for="sale_date" class="form-label">Data di uscita</label>
                    <input type="text" id="sale_date" class="form-control" name="sale_date" placeholder="Inserisci la data di rilascio nel formato 'YYYY-mm-dd'" value="{{$comic->sale_date }}" required>
                </div>
                <div class="col-6 pb-4">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" id="series" class="form-control" name="series" value="{{$comic->series }}" required>
                </div>
                <div class="col-6 pb-4">
                    <label for="thumb" class="form-label">Immagine di copertina</label>
                    <input type="text" id="thumb" class="form-control" name="thumb" value="{{$comic->thumb }}" required>
                </div>
                <div class="col-6 py-4">
                    <select class="form-select" aria-label="Default select example" name="type">
                        <option @if(old('type',$comic->type === 'comic book')) selected @endif>Comic Book</option>
                        <option @if(old('type',$comic->type === 'graphic novel')) selected @endif>Graphic Novel</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>           
        </form>
    </div>
@endsection