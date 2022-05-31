@extends('layouts.layout')

@section('content')
    <div class="container text-center">
        <h2 class="text-primary text-center">{{$comic->title}}</h2>
        <img src="{{$comic->thumb}}" alt="copertina">
        <p>{{$comic->description}}</p>
        <p>{{$comic->price}}$</p>
        <h4>{{$comic->series}}</h4>
        <h6>{{$comic->sale_date}}</h6>
        <h6>{{$comic->type}}</h6>  
    </div>
@endsection