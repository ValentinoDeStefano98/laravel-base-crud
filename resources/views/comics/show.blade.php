@extends('layouts.layout')

@section('content')

    <div class="container text-center">
        <h2 class="text-primary text-center py-2">{{$comic->title}}</h2>
        <img class="py-4" src="{{$comic->thumb}}" alt="copertina">
        <p>{{$comic->description}}</p>
        <p>Prezzo attuale: {{$comic->price}}$</p>
        <h4>{{$comic->series}}</h4>
        <h6>Data di rilascio: {{$comic->sale_date}}</h6>
        <h6>{{$comic->type}}</h6>  
    </div>
    
@endsection