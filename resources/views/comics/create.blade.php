@extends('layouts.layout')

@section('content')

    <div class="container text-center">

        <h2 class="text-primary text-center">Crea un nuovo personaggio</h2>

        <form action="{{route('comics.store')}}" method="POST">

            @csrf

            <div class="row">
                <div class="col-6">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" id="title" class="form-control" name="title" required>
                    <div class="form-text" name="title"> Inserisci il titolo</div>
                </div>
                <div class="col-6">
                    <label for="description" class="form-label">Descrizione</label>
                    <input type="text" id="description" class="form-control" name="description" required>
                    <div class="form-text" name="description"> Inserisci la descrizione del fumetto</div>
                </div>
                <div class="col-6">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" id="price" class="form-control" name="price" required>
                    <div class="form-text" name="price"> Inserisci il prezzo del fumetto</div>
                </div>
                <div class="col-6">
                    <select class="form-select" aria-label="Default select example" name="type">
                        <option selected value="Comic Book">Comic Book</option>
                        <option value="Graphic Novel">Graphic Novel</option>
                    </select>
                </div>
                <div class="col-6">
                    <label for="sale_date" class="form-label">Data di uscita</label>
                    <input type="text" id="sale_date" class="form-control" name="sale_date" required>
                    <div class="form-text" name="sale_date"> Inserisci la data di rilascio nel formato 'YYYY-mm-dd'</div>
                </div>
                <div class="col-6">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" id="series" class="form-control" name="series" required>
                    <div class="form-text" name="series"> Inserisci la serie</div>
                </div>
                <div class="col-6">
                    <label for="thumb" class="form-label">Immagine di copertina</label>
                    <input type="text" id="thumb" class="form-control" name="thumb" required>
                    <div class="form-text" name="thumb"> Inserisci la copertina</div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Invia</button>
            
        </form>

    </div>
@endsection