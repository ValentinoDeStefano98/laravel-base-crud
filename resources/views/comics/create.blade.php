@extends('layouts.layout')

@section('content')

    <div class="container text-center">

        <h2 class="text-primary text-center py-4">Crea un nuovo personaggio</h2>

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

        <form action="{{route('comics.store')}}" method="POST">

            @csrf

            <div class="row">
                <div class="col-6 pb-4">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" id="title" class="form-control" name="title" value="{{old('title')}}" required>
                </div>
                <div class="col-6 pb-4">
                    <label for="description" class="form-label">Descrizione</label>
                    <input type="text" id="description" class="form-control" name="description" value="{{old('description')}}" required>
                </div>
                <div class="col-6 pb-4">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" id="price" class="form-control" name="price" value="{{old('price')}}" required>
                </div>
                <div class="col-6 pb-4">
                    <label for="sale_date" class="form-label">Data di uscita</label>
                    <input type="text" id="sale_date" class="form-control" name="sale_date" value="{{old('sale_date')}}" placeholder="Inserisci la data di rilascio nel formato 'YYYY-mm-dd'" required>
                </div>
                <div class="col-6 pb-4">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" id="series" class="form-control" name="series" value="{{old('series')}}" required>
                </div>
                <div class="col-6 pb-4">
                    <label for="thumb" class="form-label">Immagine di copertina</label>
                    <input type="text" id="thumb" class="form-control" name="thumb" value="{{old('thumb')}}" required>
                </div>
                <div class="col-6 py-4">
                    <select class="form-select" aria-label="Default select example" name="type">
                        <option @if(old('type')) selected @endif>Comic Book</option>
                        <option @if(old('type')) selected @endif>Graphic Novel</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Invia</button>
            
        </form>

    </div>
@endsection